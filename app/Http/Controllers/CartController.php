<?php





namespace App\Http\Controllers;
use App\Models\Piece;
use App\Models\Rate;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;


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

        // if the product exist already update it with the new qte
          if($item->id==$request->input('myid')){
          Cart::remove($item->rowId);
          Cart::add($request->input('myid'),$request->input('name'),$request->input('myqte'),$request->input('prix'), ['image' => $request->input('image')])->associate('Piece');
          $temoin=1;
    
          }
        }
        // if the product doesn't exist in our cart add it
        if($temoin==0){
        Cart::add($request->input('myid'),$request->input('name'),$request->input('myqte'),$request->input('prix'), ['image' => $request->input('image')])->associate('Piece');
     
          
        }

        //rate the product 
        //check if the user has already rate the product and just update it
        $rating=Rate::where([['piece_id',$request->input('myid')],['user_id',Auth::id()]])->get();
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
