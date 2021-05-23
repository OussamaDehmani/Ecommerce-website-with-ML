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
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class CarController extends Controller
{
    function index(){
        $x= Cart::content();
        $tab=[];
        foreach($x as $card){
          array_push($tab,Piece::where('id','=',$card->id)->first());
        }
     
        $Categories= Category::All();
        // $Pieces= Piece::All();
        // $Subcategorie= Subcategory::where('image','<>','null')->get();
        // $Cars= Car::All();
        // $bestsell= DB::table('commande_piece')
        // ->join('pieces', 'pieces.id', '=', 'commande_piece.piece_id')
        // ->select(DB::raw('count(piece_id) as count, pieces.name,pieces.image,commande_piece.piece_id,pieces.Caracteristique,pieces.prix'))
        // ->where('pieces.image','<>','null')
        // ->groupBy('piece_id')
        // ->take(9)
        // ->get();
        // $Pieces= DB::table('pieces')
        // ->select('*')
        // ->where('pieces.image','<>','null')
        // ->get();
      return view('index',[
          //  'Categories'=>$Categories,
          //  'Subcategorie'=>$Subcategorie,
          //  'Cars'=>$Cars,
          //  'bestsell'=>$bestsell,
          //  'Pieces'=>$Pieces,
          //  'Cards'=>$x,
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

        
    function cart(){
      $x= Cart::content();
      $Categories= Category::All();
      $Cars= Car::All();
      return view('cart',[
        'Categories'=>$Categories,
        'Cars'=>$Cars,
        'Cards'=>$x,
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
    
function test($id){  
//   Cart::destroy();
  dd(Cart::content());
//   dd($cart);
// foreach($cart as $c){
//   if ($c->id = $id){
    
//   }
// }
// }
}

}
