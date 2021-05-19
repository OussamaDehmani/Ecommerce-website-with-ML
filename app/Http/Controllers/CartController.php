<?php

namespace App\Http\Controllers;
use App\Models\Piece;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(Cart::content()->count()<1){
        return redirect()->route('index');

       }else{
       return view('mycart');
       }
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Piece= Piece::where('id',$request->input('myid'))->first();
        $temoin=0;
        foreach(Cart::content() as $item){
        //dd($item->id==$request->input('myid'),$item->id,$request->input('myid')) ;
          
          if($item->id==$request->input('myid')){
          Cart::remove($item->rowId);
          Cart::add($request->input('myid'),$request->input('name'),$request->input('myqte'),$request->input('prix'), ['image' => $request->input('image')])->associate('Piece');
          $temoin=1;
    
          }
        }
    
        if($temoin==0){
        Cart::add($request->input('myid'),$request->input('name'),$request->input('myqte'),$request->input('prix'), ['image' => $request->input('image')])->associate('Piece');
     
          
        }
       
        return redirect()->route('index')->with('success','le produit a été ajouté ');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storenoqte(Request $request)
    {

     $added=Cart::add($request->id,$request->name,1,$request->prix, ['image' => $request->image])->associate('Piece');
    // dd($request,$added,Cart::content());
     return redirect()->route('index')->with('success','le produit a été ajouté ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->route('cart.index');
    }
       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyindex($id)
    {
        Cart::remove($id);
        return redirect()->route('index');
    }
   
    public function destroycart()
    {
        Cart::destroy();
      
    }
}
