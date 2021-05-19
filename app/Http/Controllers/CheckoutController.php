<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Commande;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Cart::count()<=0){
            return redirect()->route('index');
          }else{
             Stripe::setApiKey('sk_test_51IlcqoDK69cJnSQxq1COSvSPjECnD3MkJNjiF088PILo6ZqzI7s1JVcaRKqYYTWjRrOTUDRDrAFZasV8Y11RJ6ia00afmaF8Lc');
                                
          $intent = PaymentIntent::create([
        'description' => 'Stripe Test Payment',
        'amount' =>round(Cart::total()),
        'currency' => 'usd',
        'description' => 'Payment From Autocar',
        'payment_method_types' => ['card'],
        ]);
        
        $clientSecret = Arr::get($intent, 'client_secret');
         
          return view('checkout',[
            'clientSecret' => $clientSecret
            ]);
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
       
        $data=$request->json()->all();
        //insert order
        $order = new Commande();
        $order->adressliv = $data["adressliv"];
        $order->user_id = 1;
        $order->amount = $data['paymentIntent']['amount'];
        $order->contry = $data["contry"];
        $order->city = $data["city"];
        $order->save();

        $products=[];
        $x= Cart::content();
        foreach($x as $c){
        array_push($products, $c->id);
        } 
        $order->piece()->attach($products);

        if ($data['paymentIntent']['status'] === 'succeeded') {
            Cart::destroy();
            Session::flash('success', 'Votre commande a été traitée avec succès.');
            return response()->json(['success' => 'Payment Intent Succeeded']);
        } else {
            return response()->json(['error' => 'Payment Intent Not Succeeded']);
        }
    }


    public function thankyou()
    {
        return Session::has('success') ? view('merci') : redirect()->route('products.index');
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
        //
    }


    public function remerciement(){ 
        return view('merci');
    }
}
