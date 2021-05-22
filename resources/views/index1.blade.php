
@extends('layouts.master')

@section('content')
        <div class="wrapper">
            <!-- ============================================================= TOP NAVIGATION ============================================================= -->
           
            <!-- ============================================================= HEADER : END ============================================================= -->

            <div id="top-banner-and-menu">
                <div class="container">
                    <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                        <!-- ================================== TOP NAVIGATION ================================== -->
                        <div class="side-menu animate-dropdown">
                            <div class="head"><i class="fa fa-list"></i> all departments</div>
                            <nav class="yamm megamenu-horizontal" role="navigation">
                                <ul class="nav">
                                @foreach($Categories as $cat)
                                    <li class="dropdown menu-item">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$cat->name}}</a>
                                       @if(count($cat->subcategory)>0)
                                        <ul class="dropdown-menu mega-menu">
                                            <li class="yamm-content">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-unstyled">
                                                        @foreach($cat->subcategory as $sub)
                                                            <li><a href="subcategory/{{$sub->id}}">{{$sub->name}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                        @endif
                                    </li><!-- /.menu-item -->
                                @endforeach
                                    <li class="dropdown menu-item">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Value of the Day</a>
                                        <ul class="dropdown-menu mega-menu">
                                            <li class="yamm-content">
                                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                                <div class="row">
                                                    <div class="col-xs-12 col-lg-4">
                                                        <ul>
                                                            <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                            <li><a href="#">CPUs, Processors</a></li>
                                                            <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                            <li><a href="#">Graphics, Video Cards</a></li>
                                                            <li><a href="#">Interface, Add-On Cards</a></li>
                                                            <li><a href="#">Laptop Replacement Parts</a></li>
                                                            <li><a href="#">Memory (RAM)</a></li>
                                                            <li><a href="#">Motherboards</a></li>
                                                            <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                            <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-xs-12 col-lg-4">
                                                        <ul>
                                                            <li><a href="#">Power Supplies Power</a></li>
                                                            <li><a href="#">Power Supply Testers Sound</a></li>
                                                            <li><a href="#">Sound Cards (Internal)</a></li>
                                                            <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                            <li><a href="#">Other</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="dropdown-banner-holder">
                                                        <a href="#"><img alt="" src="{{asset('images/banners/banner-side.png')}}" /></a>
                                                    </div>
                                                </div>
                                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                            </li>
                                        </ul>
                                    </li><!-- /.menu-item -->
                                    <li><a href="http://themeforest.net/item/media-center-electronic-ecommerce-html-template/8178892?ref=shaikrilwan">Buy this Theme</a></li>
                                </ul><!-- /.nav -->
                            </nav><!-- /.megamenu-horizontal -->
                        </div><!-- /.side-menu -->
                        <!-- ================================== TOP NAVIGATION : END ================================== -->
                    </div><!-- /.sidemenu-holder -->

                    <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
                        <!-- ========================================== SECTION – HERO ========================================= -->
                        <div id="hero">
                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                                <div class="item" style="background-image: url(images/sliders/slider01.jpg);">
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left">
                                            <div class="big-text fadeInDown-1">
                                                Save up to a<span class="big"><span class="sign">$</span>400</span>
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                on selected laptops<br>
                                                & desktop pcs or<br>
                                                smartphones
                                            </div>
                                            <div class="small fadeInDown-2">
                                                terms and conditions apply
                                            </div>
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">shop now</a>
                                            </div>
                                        </div><!-- /.caption -->
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                                <div class="item" style="background-image: url('images/sliders/slider03.jpg');">
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left">
                                            <div class="big-text fadeInDown-1">
                                                Want a<span class="big"><span class="sign">$</span>200</span>Discount?
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                on selected <br>desktop pcs<br>
                                            </div>
                                            <div class="small fadeInDown-2">
                                                terms and conditions apply
                                            </div>
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">shop now</a>
                                            </div>
                                        </div><!-- /.caption -->
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                            </div><!-- /.owl-carousel -->
                        </div>
                        <!-- ========================================= SECTION – HERO : END ========================================= -->
                    </div><!-- /.homebanner-holder -->
                </div><!-- /.container -->
            </div><!-- /#top-banner-and-menu -->

            <!-- ========================================= HOME BANNERS ========================================= -->
            <section id="banner-holder" class="wow fadeInUp">
                <div class="container">
                    <div class="col-xs-12 col-lg-6 no-margin banner">
                        <a href="category-grid-2.html">
                            <div class="banner-text theblue">
                                <!-- <h1>New Life</h1> -->
                                <!-- <span class="tagline">Introducing New Category</span> -->
                            </div>
                            <img style="width:570px;height:150px;" class="banner-image" alt="" src="{{asset('images/background-images/maxresdefault.jpg')}}" data-echo="{{asset('images/background-images/maxresdefault.jpg')}}" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                        <a href="category-grid-2.html">
                            <div class="banner-text right">
                                <!-- <h1>Time &amp; Style</h1>
                                <span class="tagline">Checkout new arrivals</span> -->
                            </div>
                            <img style="width:570px;height:150px;" class="banner-image" alt="" src="{{asset('images/background-images/rechange.jpg')}}" data-echo="{{asset('images/background-images/rechange.jpg')}}" />
                        </a>
                    </div>
                </div><!-- /.container -->
            </section><!-- /#banner-holder -->
            <!-- ========================================= HOME BANNERS : END ========================================= -->

            <div id="products-tab" class="wow fadeInUp">
                <div class="container">
                    <div class="tab-holder">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" >
                            <li class="active"><a href="#featured" data-toggle="tab">featured</a></li>
                            <li><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
                            <li><a href="#top-sales" data-toggle="tab">top sales</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="featured">
                                <div class="product-grid-holder">
                                @foreach($bestsell as $best)
                                    <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                    <form class="cart" method="post" action="{{route('cart.storenoqte')}}">

                                        <div class="product-item">
                                            <!-- <div class="ribbon red"><span>sale</span></div> -->
                                            <div class="image">
                                                <img style="width: 200px;height: 200px;" alt="" src="{{$best->image}}" data-echo="{{$best->image}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="details/{{$best->piece_id}}">{{$best->name}}</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">${{$best->prix}}</div>
                                            </div>

                                            <div class="hover-area"> 
                                                    <div class="add-cart-button">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$best->piece_id}}">
                                                    <input type="hidden" name="name" value="{{$best->name}}">
                                                    <input type="hidden" name="prix" value="{{$best->prix}}">
                                                    <input type="hidden" name="image" value="{{$best->image}}">
                                                    <button type="submit" class="le-button">add to cart</button>
                                                    </div>
                                                </form>

                                                
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach($bestsell as $best)
                                    <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <!-- <div class="ribbon red"><span>sale</span></div> -->
                                            <div class="image">
                                                <img alt="" style="width: 200px;height: 200px;" src="{{$best->image}}" data-echo="{{$best->image}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="details/{{$best->piece_id}}">${{$best->name}}</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">{{$best->prix}}</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                              
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                    
                                             
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    <!-- <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-02.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-03.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-04.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>

                            </div>
                            <div class="tab-pane" id="new-arrivals">
                                <div class="product-grid-holder">
                                 
                                @foreach($New_arrivals as $new)
                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                    <form class="cart" method="post" action="{{route('cart.storenoqte')}}">

                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt=""  style="width: 200px;height: 200px;" src="{{$new->image}}" data-echo="{{$new->image}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="details/{{$new->id}}">{{$new->name}}</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">${{$new->prix}}</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$new->id}}">
                                                    <input type="hidden" name="name" value="{{$new->name}}">
                                                    <input type="hidden" name="prix" value="{{$new->prix}}">
                                                    <input type="hidden" name="image" value="{{$new->image}}">
                                                    <button type="submit" class="le-button">add to cart</button>
                                                    </div>
                                                </form>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    <!-- <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-01.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-04.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-03.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>

                            </div>

                            <div class="tab-pane" id="top-sales">
                                <div class="product-grid-holder">
                                @foreach($bestsell as $bestsell)
                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                    <form class="cart" method="post" action="{{route('cart.storenoqte')}}">

                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="{{ $best->image }}" data-echo="{{ $best->image }}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="details/{{$bestsell->piece_id}}">{{$bestsell->name}}</a>
                                                </div>
                                                <div class="brand">{{ $bestsell->Caracteristique }}</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">${{$bestsell->prix}}</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$bestsell->piece_id}}">
                                                    <input type="hidden" name="name" value="{{$bestsell->name}}">
                                                    <input type="hidden" name="prix" value="{{$bestsell->prix}}">
                                                    <input type="hidden" name="image" value="{{$bestsell->image}}">
                                                    <button type="submit" class="le-button">add to cart</button>
                                                    </div>
                                                </form>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                    <!-- <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-03.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-02.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-01.jpg')}}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================================= BEST SELLERS ========================================= -->
            <section id="bestsellers" class="color-bg wow fadeInUp">
                <div class="container">
                    <h1 class="section-title">Best Sellers</h1>

                    <div class="product-grid-holder medium">
                        <div class="col-xs-12 col-md-7 no-margin">

                            <div class="row no-margin">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                <form class="cart" method="post" action="{{route('cart.storenoqte')}}">
                                    
                                    <div class="product-item">
                                        <div class="image">
                                            @if(isset($Cliqued[$i]->image))
                                            <img alt="" style="width: 194px;height: 143px;" src="{{$Cliqued[$i]->image}}" data-echo="{{$Cliqued[$i]->image}}" />
                                            @else
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-06.jpg')}}" />
                                            @endif
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="details/{{$Cliqued[$i]->piece_id}}">{{$Cliqued[$i]->name}}</a>
                                            </div>
                                            <div class="brand">beats</div>
                                        </div>
                                        <div class="prices">

                                            <div class="price-current text-right">${{$Cliqued[$i]->prix}}</div>
                                        </div>
                                        <div class="hover-area">
                                          
                                            <div class="add-cart-button">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$Cliqued[$i]->piece_id}}">
                                                    <input type="hidden" name="name" value="{{$Cliqued[$i]->name}}">
                                                    <input type="hidden" name="prix" value="{{$Cliqued[$i]->prix}}">
                                                    <input type="hidden" name="image" value="{{$Cliqued[$i]->image}}">
                                                    <button type="submit" class="le-button">add to cart</button>
                                            </div>
                                        </form>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor    
                                <!-- /.product-item-holder -->

                               <!--  <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-06.jpg')}}" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">playstasion 4 with four games and pad</a>
                                            </div>
                                            <div class="brand">acer</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>/.product-item-holder -->
<!-- 
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-07.jpg')}}" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">EOS rebel t5i DSLR Camera with 18-55mm IS STM lens</a>
                                            </div>
                                            <div class="brand">canon</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>/.product-item-holder -->
                            </div><!-- /.row -->

                            <div class="row no-margin">
                            @for ($j = 0; $j < 3; $j++)
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                <form class="cart" method="post" action="{{route('cart.storenoqte')}}">
                                   
                                    <div class="product-item">
                                        <div class="image">
                                            @if(isset($Cliqued[$j]->image))
                                            <img alt="" style="width: 194px;height: 143px;" src="{{$Cliqued[$j]->image}}" data-echo="{{$Cliqued[$j]->image}}" />
                                            @else
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-06.jpg')}}" />
                                            @endif
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="details/{{$Cliqued[$j]->piece_id}}">{{$Cliqued[$j]->name}}</a>
                                            </div>
                                            <div class="brand">fitbit zip</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">${{$Cliqued[$j]->prix}}</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                            @csrf
                                                    <input type="hidden" name="id" value="{{$Cliqued[$i]->piece_id}}">
                                                    <input type="hidden" name="name" value="{{$Cliqued[$i]->name}}">
                                                    <input type="hidden" name="prix" value="{{$Cliqued[$i]->prix}}">
                                                    <input type="hidden" name="image" value="{{$Cliqued[$i]->image}}">
                                                    <button type="submit" class="le-button">add to cart</button>
                                            </div>
                                            </form>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor    
                                <!-- /.product-item-holder -->
<!--
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-09.jpg')}}" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">PowerShot elph 115 16MP digital camera</a>
                                            </div>
                                            <div class="brand">canon</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> /.product-item-holder -->
<!--
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-10.jpg')}}" />
                                        </div>
                                        <div class="body">
                                            <div class="label-discount clear"></div>
                                            <div class="title">
                                                <a href="single-product.html">netbook acer travelMate b113-E-10072</a>
                                            </div>
                                            <div class="brand">acer</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
                                        </div>
                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="single-product.html" class="le-button">Add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                                <a class="btn-add-to-compare" href="#">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> /.product-item-holder -->

                            </div><!-- /.row -->
                        </div><!-- /.col -->
                        <div class="col-xs-12 col-md-5 no-margin">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-rel="prettyphoto" href="{{asset('images/products/product-gallery-01.jpg')}}">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-gallery-01.jpg')}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->

                                    <div class="single-product-gallery-item" id="slide2">
                                        <a data-rel="prettyphoto" href="{{asset('images/products/product-gallery-01.jpg')}}">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-gallery-01.jpg')}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->

                                    <div class="single-product-gallery-item" id="slide3">
                                        <a data-rel="prettyphoto" href="{{asset('images/products/product-gallery-01.jpg')}}">
                                            <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-gallery-01.jpg')}}" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                </div><!-- /.single-product-slider -->

                                <div class="gallery-thumbs clearfix">
                                    <ul>
                                        <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="0" href="#slide1"><img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/gallery-thumb-01.jpg')}}" /></a></li>
                                        <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="1" href="#slide2"><img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/gallery-thumb-01.jpg')}}" /></a></li>
                                        <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="2" href="#slide3"><img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/gallery-thumb-01.jpg')}}" /></a></li>
                                    </ul>
                                </div><!-- /.gallery-thumbs -->

                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">CPU intel core i5-4670k 3.4GHz BOX B82-12-122-41</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices text-right">
                                    <div class="price-current inline">$1199.00</div>
                                    <a href="cart.html" class="le-button big inline">add to cart</a>
                                </div>
                            </div><!-- /.product-item-holder -->
                        </div><!-- /.col -->

                    </div><!-- /.product-grid-holder -->
                </div><!-- /.container -->
            </section><!-- /#bestsellers -->
            <!-- ========================================= BEST SELLERS : END ========================================= -->

            <!-- ========================================= RECENTLY VIEWED ========================================= -->
            <section id="recently-reviewd" class="wow fadeInUp">
                <div class="container">
                    <div class="carousel-holder hover">

                        <div class="title-nav">
                            <h2 class="h1">Recently Viewed</h2>
                            <div class="nav-holder">
                                <a href="#prev" data-target="#owl-recently-viewed" class="slider-prev btn-prev fa fa-angle-left"></a>
                                <a href="#next" data-target="#owl-recently-viewed" class="slider-next btn-next fa fa-angle-right"></a>
                            </div>
                        </div><!-- /.title-nav -->

                        <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                        @foreach($Pieces as $piece)
                            <div class="no-margin carousel-item product-item-holder size-small hover">
                            <form class="cart" method="post" action="{{route('cart.storenoqte')}}">

                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div>
                                    <div class="image">
                                    @if(isset($piece->image))
                                        <img alt="" style="width: 194px;height: 143px;" src="{{$piece->image}}" data-echo="{{$piece->image}}" />
                                    @else
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-06.jpg')}}" />
                                    @endif
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="details/{{$piece->id}}">{{$piece->name}}</a>
                                        </div>
                                        <div class="brand">Sharp</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">${{$piece->prix}}</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                        @csrf
                                                    <input type="hidden" name="id" value="{{$piece->id}}">
                                                    <input type="hidden" name="name" value="{{$piece->name}}">
                                                    <input type="hidden" name="prix" value="{{$piece->prix}}">
                                                    <input type="hidden" name="image" value="{{$piece->image}}">
                                                    <button type="submit" class="le-button">add to cart</button>
                                        </div>
                                        </form>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.product-item-holder -->
                        @endforeach
                           <!--  <div class="no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-12.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">cinemizer OLED 3D virtual reality TV Video</a>
                                        </div>
                                        <div class="brand">zeiss</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>/.product-item-holder -->

                          <!--  <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-13.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                                        </div>
                                        <div class="brand">dell</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div> /.product-item-holder -->

                          <!--   <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-14.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                                        </div>
                                        <div class="brand">harman</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>/.product-item-holder -->

                           <!--  <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon green"><span>bestseller</span></div>
                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-15.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">netbook acer travel B113-E-10072</a>
                                        </div>
                                        <div class="brand">acer</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>/.product-item-holder -->

                           <!--  <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-16.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">iPod touch 5th generation,64GB, blue</a>
                                        </div>
                                        <div class="brand">apple</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>/.product-item-holder -->

                           <!-- <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">

                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-13.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                                        </div>
                                        <div class="brand">dell</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div> /.product-item-holder -->

                        <!--    <div class=" no-margin carousel-item product-item-holder size-small hover">
                                <div class="product-item">
                                    <div class="ribbon blue"><span>new!</span></div>
                                    <div class="image">
                                        <img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-14.jpg')}}" />
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                                        </div>
                                        <div class="brand">harman</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right">$1199.00</div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="single-product.html" class="le-button">Add to cart</a>
                                        </div>
                                        <div class="wish-compare">
                                            <a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
                                            <a class="btn-add-to-compare" href="#">Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div> /.product-item-holder -->
                        </div><!-- /#recently-carousel -->

                    </div><!-- /.carousel-holder -->
                </div><!-- /.container -->
            </section><!-- /#recently-reviewd -->
            <!-- ========================================= RECENTLY VIEWED : END ========================================= -->

            <!-- ========================================= TOP BRANDS ========================================= -->
            <section id="top-brands" class="wow fadeInUp">
                <div class="container">
                    <div class="carousel-holder" >

                        <div class="title-nav">
                            <h1>Top Brands</h1>
                            <div class="nav-holder">
                                <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                                <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                            </div>
                        </div><!-- /.title-nav -->

                        <div id="owl-brands" class="owl-carousel brands-carousel">
                        @foreach($Four as $fournisseur)
                            <div class="carousel-item">
                                <a href="#">
                                    <img alt="" src="{{$fournisseur->image}}" />
                                </a>
                            </div><!-- /.carousel-item -->
                        @endforeach

                          

                        </div><!-- /.brands-caresoul -->

                    </div><!-- /.carousel-holder -->
                </div><!-- /.container -->
            </section><!-- /#top-brands -->
            <!-- ========================================= TOP BRANDS : END ========================================= -->

@endsection
