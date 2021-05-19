@extends('layouts.master')




@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
		<div class="wrapper">
			<!-- ============================================================= TOP NAVIGATION ============================================================= -->
			

            <!-- ========================================= CONTENT ========================================= -->
            <section id="checkout-page">
                <div class="container">
                    <div class="col-xs-12 no-margin">

                        <div class="billing-address">
                            <h2 class="border h1">billing address</h2>
                            <form action="{{route('checkout.store')}}" method="POST" class="my-4" id="payment-form">
                            @csrf
                                <div class="row field-row">
                                    <div class="col-xs-12 ">
                                        <label>full name*</label>
                                        <input class="le-input"  readonly='true' value="admin" >
                                    </div>
                                </div><!-- /.field-row -->

                                <div class="row field-row">
                                    <div class="col-xs-12">
                                        <label>company name</label>
                                        <input class="le-input" >
                                    </div>
                                </div><!-- /.field-row -->

                                <div class="row field-row">
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Address Livraison*</label>
                                        <input class="le-input" data-placeholder=" address livraison" id="adressliv">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label>&nbsp;</label>
                                        <input class="le-input" data-placeholder="city"  id="city">
                                    </div>
                                </div><!-- /.field-row -->

                                <div class="row field-row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label>Contry*</label>
                                        <input class="le-input" data-placeholder="contry"  id="contry" >
                                         <!-- <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select> -->
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label>email address*</label>
                                        <input class="le-input" readonly='true' value="email@gmail.com">
                                    </div>

                                    <div class="col-xs-12 col-sm-4">
                                        <label>phone number*</label>
                                        <input class="le-input" >
                                    </div>
                                </div><!-- /.field-row -->

                               <div class="row field-row">
                               <div class="col-md-6">
                                    
                                
                                        <div id="card-element">
                                        <!-- Elements will create input elements here -->
                                        </div>
<br>
                                        <!-- We'll put the error messages in this element -->
                                        <div id="card-errors" role="alert"></div>

                                        <button class="btn btn-success mt-4 le-button big" id="submit">Procéder au paiement (${{Cart::total()}})</button>
                                    
                                    </div>
                                </div>
                                <!-- <div id="create-account" class="col-xs-12">
                                        <input  class="le-checkbox big" type="checkbox"  />
                                        <a class="simple-link bold" href="#">Create Account?</a> - you will receive email with temporary generated password after login you need to change it.
                                    </div> /.field-row -->

                            </form>
                        </div><!-- /.billing-address -->


                       <!-- <section id="shipping-address">
                            <h2 class="border h1">shipping address</h2>
                            <form>
                                <div class="row field-row">
                                    <div class="col-xs-12">
                                        <input  class="le-checkbox big" type="checkbox"  />
                                        <a class="simple-link bold" href="#">ship to different address?</a>
                                    </div>
                                </div>
                            </form>
                        </section> /#shipping-address -->


                        <section id="your-order">
                            <h2 class="border h1">your order</h2>
                            
                            @foreach(Cart::content() as $cart)
                                <div class="row no-margin order-item">
                                    <div class="col-xs-12 col-sm-1 no-margin">
                                        <a href="#" class="qty">{{$cart->qty}} x</a>
                                    </div>

                                    <div class="col-xs-12 col-sm-9 ">
                                        <div class="title"><a href="#">{{$cart->name}} </a></div>
                                        <div class="brand">sony</div>
                                    </div>

                                    <div class="col-xs-12 col-sm-2 no-margin">
                                        <div class="price">${{$cart->price}}</div>
                                    </div>
                                </div><!-- /.order-item -->
                            @endforeach
                  
                            
                        </section><!-- /#your-order -->

                        <div id="total-area" class="row no-margin">
                            <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                                <div id="subtotal-holder">
                                    <ul class="tabled-data inverse-bold no-border">
                                        <li>
                                            <label>cart subtotal</label>
                                            <div class="value ">${{Cart::subtotal()}}</div>
                                        </li>
                                        <li>
                                            <label>shipping</label>
                                            <div class="value">
                                                <div class="radio-group">
                                                    <input class="le-radio" type="radio" name="group1" value="free"> <div class="radio-label bold">free shipping</div><br>
                                                    <input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">local delivery<br><span class="bold">$15</span></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul><!-- /.tabled-data -->

                                    <ul id="total-field" class="tabled-data inverse-bold ">
                                        <li>
                                            <label>order total</label>
                                            <div class="value">${{Cart::total()}}</div>
                                        </li>
                                    </ul><!-- /.tabled-data -->

                                </div><!-- /#subtotal-holder -->
                            </div><!-- /.col -->
                        </div><!-- /#total-area -->

                        <div id="payment-method-options">
                           
                                <div class="payment-method-option">
                                    <input class="le-radio" type="radio" name="group2" value="Direct">
                                    <div class="radio-label bold ">Direct Bank Transfer<br>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempus elit, vestibulum vestibulum erat ornare id.</p>
                                    </div>
                                </div><!-- /.payment-method-option -->

                                <div class="payment-method-option">
                                    <input class="le-radio" type="radio" name="group2" value="cheque">
                                    <div class="radio-label bold ">cheque payment</div>
                                </div><!-- /.payment-method-option -->

                                <div class="payment-method-option">
                                    <input class="le-radio" type="radio" name="group2" value="paypal">
                                    <div class="radio-label bold ">paypal system</div>
                                </div><!-- /.payment-method-option -->
                            </form>
                        </div><!-- /#payment-method-options -->

                        <div class="place-order-button">
                            <button class="le-button big">place order</button>
                        </div><!-- /.place-order-button -->

                    </div><!-- /.col -->
                </div><!-- /.container -->
            </section><!-- /#checkout-page -->
            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ============================================================= FOOTER ============================================================= -->


@endsection
@section('extra-js')
<script>
var stripe = Stripe(
'pk_test_51IlcqoDK69cJnSQxKGitSzHhCdB5TDIJjpRZ2621tB8FmLEBVbaNM0jGAaMBd5nODULhZ7QYGkq0SPoRExV8ZICb00sDe3L8Pq'
);
var elements = stripe.elements();
var style = {
        base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
            color: "#aab7c4"
        }
        },
        invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
        }
    };
    var card = elements.create("card", { style: style });
    card.mount("#card-element");
 
    card.addEventListener('change', ({error}) => {
    const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert', 'alert-warning', 'mt-3');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('alert', 'alert-warning', 'mt-3');
            displayError.textContent = '';
        }
    });
    var submitButton = document.getElementById('submit');
    submitButton.addEventListener('click', function(ev) {
    ev.preventDefault();
    submitButton.disabled=true;
    stripe.confirmCardPayment("{{ $clientSecret }}", {
        payment_method: {
            card: card
        }
        }).then(function(result) {
            if (result.error) {
            submitButton.disabled=false;
            // Show error to your customer (e.g., insufficient funds)
            console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    //objet retourné du stripe comme un reçu contenantles info de la transaction
                    var paymentIntent = result.paymentIntent;
                    // ajax csrf pour la securisation
                    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var form = document.getElementById('payment-form');
                    var url = form.action;
                    console.log(result.paymentIntent);
                    var redirect = '/remerciement';
                    var adressliv=document.getElementById('adressliv').value;
                    var city=document.getElementById('city').value;
                    var contry=document.getElementById('contry').value;

                   
                   fetch(
                        url,
                        {
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN": token
                            },
                            method: 'post',
                            body: JSON.stringify({
                                paymentIntent: paymentIntent,
                                adressliv:adressliv,
                                city:city,
                                contry:contry,
                            })
                    }).then((data) => {
                            console.log(data);
                            form.reset();
                            window.location.href = redirect;
                    }).catch((error) => {
                            console.log(error)
                        })

                }
            }
        });
    });
</script>

@endsection