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
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;


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

      return view('index1',[
        'Categories'=>$Categories,
        'Cards'=>$x,
        'bestsell'=>$bestsell,
        'Pieces'=>$Pieces,
        'New_arrivals'=>$new_arrivals,
        'Cliqued'=>$Cliqued,
        'Four'=>$Four,
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

    function rate(Request  $request ){

    $Piece_user=new Piece_user();
    $Piece_user->rate=$request->rate;
    $Piece_user->user_id=$request->user_id;
    $Piece_user->piece_id=$request->piece_id;
    $Piece_user->save();
   // dd($request->all());
    return response()->json($Piece_user);
  }



    function shop($id){
      $Pieces= Piece::where('subcategory_id','=',$id)
      ->where('image','<>',null)
      ->get();
      $Cars= Car::All();
      $Categories= Category::All();
      $x= Cart::content();
   
      return view('shop',[
        'Cars'=>$Cars,
        'Pieces'=>$Pieces,
        'Categories'=>$Categories,
        'Cards'=>$x
      ]);
    }

    function details($id){
      //get the product
      $Piece= Piece::where('id',$id)->first();
  
      $qte=1;
      foreach(Cart::content() as $cart){
        if($cart->id==$id){
          $qte=$cart->qty;
        }
      }

      //get simillar products
      // $Similar= Piece::where([
      //   ['subcategory_id','=',$Piece->subcategory_id],
      //   ['image','<>','null']
      //   ])->get();
        
      //insert user choice
        $clic=new Clique();
        $clic->user_id=1;
        $clic->piece_id=$id;
        $clic->save();

      return view('details_product',[
        'piece'=>$Piece,
        'qte'=>$qte,
        // 'Similar'=>$Similar
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
