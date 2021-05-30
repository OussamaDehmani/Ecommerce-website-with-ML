<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Commande;
use App\Models\Piece;
use App\Models\Car;
use App\Models\Piece_user;
use App\Models\Clique;
use App\Models\Rate;
use App\Models\Favcar;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use GuzzleHttp\Client;

class CarController extends Controller
{

  //function that handel the response from flask api
  public function recommended_product()
  {
      $client = new Client();
      $userid=Auth::user()->id;
      // $url = "http://127.0.0.1:5000/?id=5";
      // $response = $client->request('GET', $url, [
      //     'verify'  => false,
      // ]);
      // $responseBody = json_decode($response->getBody());

      // dd($responseBody);

        $response = $client->get('http://127.0.0.1:5000/?id=5');

        $responseArray = json_decode($response->getBody()->getContents(), true);

        dd($responseArray[3]);
     
      // return view('projects.apiwithoutkey', compact('responseBody'));
  }

    function piecewithcars($id){

      //get the pieces compatible with the searched car
      $Pieces= DB::table('car_piece')
      ->join('pieces', 'pieces.id', '=', 'car_piece.piece_id')
      ->where('car_piece.car_id','=',$id)
      ->get();

      //get All cars
      $Cars= Car::All();

      // get all categories
      $SubCategories= Subcategory::all();

      // add into favcars table the searched car for this user
      $favcar=new Favcar();
      $favcar->user_id=Auth::user()->id;
      $favcar->car_id=$id;
      $favcar->save();

      return view('CarsListe',[
        'Pieces'=>$Pieces,
        'Cars'=>$Cars,
        'SubCategories'=>$SubCategories,
      ]);
    }





        
    function home(){

    // list of best sales 
      $bestsell= DB::table('commande_piece')
      ->join('pieces', 'pieces.id', '=', 'commande_piece.piece_id')
      ->select(DB::raw('count(piece_id) as count, pieces.name,pieces.image,commande_piece.piece_id,pieces.Caracteristique,pieces.prix'))
      ->where('pieces.image','<>','null')
      ->groupBy('piece_id')
      ->get()
      ->take(10);
  
    // list of all product
      $Pieces= DB::table('pieces')
      ->select('*')
      ->where('pieces.image','<>','null')
      ->get();

    // list of all fournisseur
      $Four= DB::table('fournisseurs')
      ->select('*')
      ->where('image','<>','null')
      ->get();

      // list of new arrival product
      $new_arrivals=DB::table('pieces')
      ->select('*')
      ->orderBy('id','desc')
      ->get()
      ->take(4);

      // list of last cliqued 
      $Cliqued= DB::table('cliques')
      ->join('pieces', 'pieces.id', '=', 'cliques.piece_id')
      ->select('*')
      ->get();
  
      // cart content
      $x= Cart::content();

      //list of category
      $Categories= Category::all()->take(9);

      // get all cars
      $Cars= Car::All();

      return view('index1',[
        'Categories'=>$Categories,
        'Cards'=>$x,
        'bestsell'=>$bestsell,
        'Pieces'=>$Pieces,
        'New_arrivals'=>$new_arrivals,
        'Cliqued'=>$Cliqued,
        'Four'=>$Four,
        'Cars'=>$Cars,
        ]);
  }

        



    function details($id){
      //get the product
      $Piece= Piece::where('id',$id)->first();
      $qte=1;
      $idcat=$Piece->subcategory->category->id;
      $Subcategories= Subcategory::where('category_id',$idcat)->take(5)->get();
      $Cars= Car::All();

      foreach(Cart::content() as $cart){
        if($cart->id==$id){
          $qte=$cart->qty;
        }
      }


      //insert user choice
        $clic=new Clique();
        $clic->user_id=1;
        $clic->piece_id=$id;
        $clic->save();

      //get comments
      $comments=Comment::where('piece_id',$id)->take(3)->get();
      //get images of product
      

      return view('details_product',[
        'piece'=>$Piece,
        'comments'=>$comments,
        'Cars'=>$Cars,
        'qte'=>$qte,
        'Subcategories'=>$Subcategories,
      ]);
    }


    function addcomment(Request $request){
   
 
      $comment=new Comment();
      $comment->description=$request->description;
      $comment->piece_id=$request->piece_id;
      $comment->user_id=Auth::user()->id;
      $comment->date_pub=Carbon::now();
      $comment->save();

      //rate the product 
      //check if the user has already rate the product and just update it
      $rating=Rate::where([['piece_id',$request->piece_id],['user_id',Auth::id()]])->get();
      $cnt=$rating->count();
  
      if($cnt!=0){
          Rate::where('id',$rating[0]->id)->update(['rate' =>$request->input('score')]);
      }
      else{
      //if the user rate the product for the first time
      $rate=new Rate();
      $rate->user_id= Auth::id();
      $rate->piece_id= $request->input('myid');
      $rate->rate= $request->input('score');
      $rate->save();
      }
 
     return $this->details($request->piece_id);
    }
  




function subcatgory($id){  
  $Pieces=Piece::where('subcategory_id','=',$id)->get();
  $Cars= Car::All();
  return view('Subpieces',[
    'pieces'=>$Pieces,
    'Cars'=>$Cars,
    ]);
}
    

}
