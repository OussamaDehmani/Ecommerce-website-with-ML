<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Commande;
use App\Models\Piece;
use App\Models\Car;
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
        $Pieces= Piece::All();
        $Subcategorie= Subcategory::where('image','<>','null')->get();
        $Cars= Car::All();
        $bestsell= DB::table('commande_piece')
        ->join('pieces', 'pieces.id', '=', 'commande_piece.piece_id')
        ->select(DB::raw('count(piece_id) as count, pieces.name,pieces.image,commande_piece.piece_id,pieces.Caracteristique,pieces.prix'))
        ->where('pieces.image','<>','null')
        ->groupBy('piece_id')
        ->take(9)
        ->get();
        $Pieces= DB::table('pieces')
        ->select('*')
        ->where('pieces.image','<>','null')
        ->get();
      return view('index',[
           'Categories'=>$Categories,
           'Subcategorie'=>$Subcategorie,
           'Cars'=>$Cars,
           'bestsell'=>$bestsell,
           'Pieces'=>$Pieces,
           'Cards'=>$x,
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



    function shop($id){
      $Pieces= Piece::where('subcategory_id','=',$id)
      ->where('image','<>',null)
      ->get();
      $Cars= Car::All();
   
      return view('shop',[
        'Cars'=>$Cars,
        'Pieces'=>$Pieces
      ]);
    }

    function details($id){
      $Pieces= Piece::where('id','=',$id)->first();
      $Cars= Car::All();
      $Similar= Piece::where([
        ['subcategory_id','=',$Pieces->subcategory_id],
        ['image','<>','null']
        ])->get();
      
      return view('product_details',[
        'piece'=>$Pieces,
        'Cars'=>$Cars,
        'Similar'=>$Similar
      ]);
    }

    



}
