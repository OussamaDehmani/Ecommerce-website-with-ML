<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;





use App\Models\Category;



use App\Models\Subcategory;

use App\Models\Car;
use Illuminate\Support\Facades\DB;



class CarController extends Controller
{
    function index(){
        $Categories= Category::All();
        $Subcategorie= Subcategory::All();
        $Cars= Car::All();
        
      return view('index',[
           'Categories'=>$Categories,
           'Cars'=>$Cars,
           ]);
    }


    function view($id){
        dd($id);
    }
    function test(){
    //     $tab=[];
    //    $x= Subcategory::all();
    //    foreach($x->category as $cat){
    //     array_push($tab,$cat->name); 
    //    }
    //    $x=implode(",", $tab);
    //    return $x;
    $x=Category::find(1);
  dd( $x->name);
    }

}
