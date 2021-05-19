<?php

namespace App\Http\Controllers;




use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Category;
use App\Models\Car;
use App\Models\Commande;

class PayementController extends Controller
{

function index(){
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
function store(Request $request){

Cart::destroy();
$data=$request->json()->all();
// $order = new Commande();
// $order->adressliv = $data["adressliv"];
// $order->user_id = 1;
// $order->amount = $data['paymentIntent']['amount'];
// $order->contry = $data["contry"];
// $order->city = $data["city"];
// $order->save();

// $products=[];
// $x= Cart::content();
// foreach($x as $c){
//   array_push($products, $c->id);
// } 
// $order->piece()->attach($products);
// Cart::destroy();
// if ($data['paymentIntent']['status'] === 'succeeded') {
//     return response()->json(['success' => 'Payment Intent Succeeded']);
// } else {
//     return response()->json(['error' => 'Payment Intent Not Succeeded']);
// }
return view('index');
}


public function remerciement()
{
  $x= Cart::content();
  $Categories= Category::All();
  $Cars= Car::All();
  return view('remerciement',[
    'Categories'=>$Categories,
    'Cars'=>$Cars,
    'Cards'=>$x,
    
    ]);
}

public function test()
{$order = new Commande();
  $order->adressliv = "settat";
  $order->user_id = 1;
  $order->amount = 22;
  $order->contry = "settat";
  $order->city = "settat";
  $order->save();
  
  $products=[];
  $x= Cart::content();
  foreach($x as $c){
    array_push($products, $c->id);
  } 
  $order->piece()->attach($products);
  
}


}
