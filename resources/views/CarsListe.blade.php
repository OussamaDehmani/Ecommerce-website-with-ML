@extends('layouts.master')

@section('content')
		<div class="wrapper">

			<!-- ============================================================= HEADER : END ============================================================= -->

            <div class="animate-dropdown">
                <!-- ========================================= BREADCRUMB ========================================= -->
                <div id="top-mega-nav">
                    <div class="container">
                        <nav>
                            <ul class="inline">
                                <li class="dropdown le-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-list"></i> Pieces Categories
                                    </a>

                                    <ul class="dropdown-menu" style="height:400px; overflow-y:scroll">
                                    @foreach($SubCategories as $cat)
                                        <li><a href="{{ route('subcategory', ['id' => $cat->id]) }}">{{$cat->name}}</a></li>
                                    @endforeach
                                    </ul>
                                </li>

                                <li class="breadcrumb-nav-holder">
                                    <ul>
                                        <li class="dropdown breadcrumb-item">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">laptops &amp; computers </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">PDA</a>
                                                    <a href="#">accesories</a>
                                                    <a href="#">tablets</a>
                                                    <a href="#">games</a>
                                                    <a href="#">consoles</a>
                                                </li>
                                            </ul>
                                        </li><!-- /.breadcrumb-item -->

                                        <li class="dropdown breadcrumb-item">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desktop PC </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">PDA</a>
                                                    <a href="#">accesories</a>
                                                    <a href="#">tablets</a>
                                                    <a href="#">games</a>
                                                    <a href="#">consoles</a>
                                                </li>
                                            </ul>
                                        </li><!-- /.breadcrumb-item -->

                                        <li class="breadcrumb-item">
                                            <a href="#">Gaming</a>
                                        </li><!-- /.breadcrumb-item -->

                                        <li class="breadcrumb-item current">
                                            <a href="#">VAIO Fit Laptop - Windows</a>
                                        </li><!-- /.breadcrumb-item -->
                                    </ul>
                                </li><!-- /.breadcrumb-nav-holder -->

                            </ul><!-- /.inline -->
                        </nav>

                    </div><!-- /.container -->
                </div><!-- /#top-mega-nav -->
                <!-- ========================================= BREADCRUMB : END ========================================= -->
            </div>

            <section id="category-grid">
                <div class="container">
                    <!-- ========================================= SIDEBAR ========================================= -->
                    <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
                        <!-- ========================================= PRODUCT FILTER ========================================= -->
                       
                        <!-- ========================================= PRODUCT FILTER : END ========================================= -->

                        <div class="widget">
                            <h1 class="border">special offers</h1>
                            <ul class="product-list">
                                <li>
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">Netbook Acer </a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-03.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">Netbook Acer</a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                                <div class="price">
                                                    <div class="price-prev">$2000</div>
                                                    <div class="price-current">$1873</div>
                                                </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.widget -->

                        <div class="widget">
                            <div class="simple-banner">
                                <a href="#"><img alt="" class="img-responsive" src="assets/images/blank.gif" data-echo="assets/images/banners/banner-simple.jpg" /></a>
                            </div>
                        </div>

                        <!-- ========================================= FEATURED PRODUCTS ========================================= -->
                        <div class="widget">
                            <h1 class="border">Featured Products</h1>
                            <ul class="product-list">

                                <li class="sidebar-product-list-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">Netbook Acer </a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-product-list-item -->

                                <li class="sidebar-product-list-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-product-list-item -->

                                <li class="sidebar-product-list-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-03.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-product-list-item -->

                                <li class="sidebar-product-list-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-01.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">Netbook Acer </a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-product-list-item -->

                                <li class="sidebar-product-list-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin">
                                            <a href="#" class="thumb-holder">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-small-02.jpg" />
                                            </a>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                            <div class="price">
                                                <div class="price-prev">$2000</div>
                                                <div class="price-current">$1873</div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- /.sidebar-product-list-item -->

                            </ul><!-- /.product-list -->
                        </div><!-- /.widget -->
                        <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
                    </div>
                    <!-- ========================================= SIDEBAR : END ========================================= -->

                    <!-- ========================================= CONTENT ========================================= -->
                    <div class="col-xs-12 col-sm-9 no-margin wide sidebar">
                        <section id="recommended-products" class="carousel-holder hover small">
                            <div class="title-nav">
                                <h2 class="inverse">Recommended Products</h2>
                                <div class="nav-holder">
                                    <a href="#prev" data-target="#owl-recommended-products" class="slider-prev btn-prev fa fa-angle-left"></a>
                                    <a href="#next" data-target="#owl-recommended-products" class="slider-next btn-next fa fa-angle-right"></a>
                                </div>
                            </div><!-- /.title-nav -->

                            <div id="owl-recommended-products" class="owl-carousel product-grid-holder">
                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="ribbon red"><span>sale</span></div>
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-11.jpg" />
                                        </div>
                                        <div class="body">
                                            <div class="title">
                                                <a href="single-product.html">LC-70UD1U 70" class aquos 4K ultra HD</a>
                                            </div>
                                            <div class="brand">sharp</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-current text-right">$1199.00</div>
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
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="ribbon blue"><span>new!</span></div>
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-12.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-13.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="ribbon blue"><span>new!</span></div>
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-14.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-15.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-16.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-13.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                                <div class="no-margin carousel-item product-item-holder hover size-medium">
                                    <div class="product-item">
                                        <div class="ribbon blue"><span>new!</span></div>
                                        <div class="image">
                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-14.jpg" />
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
                                                <a href="single-product.html" class="le-button">add to cart</a>
                                            </div>
                                            <div class="wish-compare">
                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                <a class="btn-add-to-compare" href="#">compare</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.carousel-item -->

                            </div><!-- /#recommended-products-carousel .owl-carousel -->
                        </section><!-- /.carousel-holder -->

                        <section id="gaming">
                            <div class="grid-list-products">
                                <h2 class="section-title">hello</h2>

                                <div class="control-bar">
                                    <div id="popularity-sort" class="le-select" >
                                        <select data-placeholder="sort by popularity">
                                            <option value="1">1-100 players</option>
                                            <option value="2">101-200 players</option>
                                            <option value="3">200+ players</option>
                                        </select>
                                    </div>

                                    <div id="item-count" class="le-select">
                                        <select>
                                            <option value="1">24 per page</option>
                                            <option value="2">48 per page</option>
                                            <option value="3">32 per page</option>
                                        </select>
                                    </div>

                                    <div class="grid-list-buttons">
                                        <ul>
                                            <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>
                                            <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> List</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.control-bar -->

                                <div class="tab-content">
                                    <div id="grid-view" class="products-grid fade tab-pane in active">

                                        <div class="product-grid-holder">
                                            <div class="row no-margin">
                                        @foreach($Pieces as $piece)
                                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                                <form class="cart" method="post" action="{{route('cart.storenoqte')}}">
                                                    <div class="product-item">
                                                        <div class="ribbon green"><span>NEW!</span></div>
                                                        <div class="image">
                                                            @if(isset($piece->image))
                                                            <img alt="" style="width: 194px;height: 143px;"  src="{{asset($piece->image)}}" data-echo="{{asset($piece->image)}}" />
                                                            @else
                                                            <img alt=""  src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-01.jpg')}}" />
                                                            @endif
                                                        </div>
                                                        <div class="body">
                                                            <!-- <div class="label-discount green">-50% sale</div> -->
                                                            <div class="title">
                                                                <a href="{{ route('details', ['id' => $piece->id]) }}">{{$piece->name}}</a>
                                                            </div>
                                                            <div class="brand">sonny</div>
                                                            <div class="star-holder">
                                                                    <div class="star" data-score="4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="prices">
                                                            <div class="price-prev">$1399.00</div>
                                                            <div class="price-current pull-right">${{$piece->prix}}</div>
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
                                                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                                <a class="btn-add-to-compare" href="#">compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-item -->
                                                </div><!-- /.product-item-holder -->
                                        @endforeach

                                            </div><!-- /.row -->
                                        </div><!-- /.product-grid-holder -->

                                        <div class="pagination-holder">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 text-left">
                                                    <ul class="pagination ">
                                                        <li class="current"><a  href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">next</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="result-counter">
                                                        Showing <span>1-9</span> of <span>11</span> results
                                                    </div>
                                                </div>

                                            </div><!-- /.row -->
                                        </div><!-- /.pagination-holder -->
                                    </div><!-- /.products-grid #grid-view -->

                                    <div id="list-view" class="products-grid fade tab-pane ">
                                        <div class="products-list">

                                            <div class="product-item product-item-holder">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="ribbon blue"><span>new!</span></div>
                                                <div class="row">
                                                    <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                        <div class="image">
                                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                                        </div>
                                                    </div><!-- /.image-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                        <div class="body">
                                                            <div class="label-discount green">-50% sale</div>
                                                            <div class="title">
                                                                <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                            </div>
                                                            <div class="brand">sony</div>
                                                            <div class="excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                            </div>
                                                            <div class="addto-compare">
                                                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.body-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                        <div class="right-clmn">
                                                            <div class="price-current">$1199.00</div>
                                                            <div class="price-prev">$1399.00</div>
                                                            <div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
                                                            <a class="le-button" href="#">add to cart</a>
                                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                        </div>
                                                    </div><!-- /.price-area -->
                                                </div><!-- /.row -->
                                            </div><!-- /.product-item -->


                                            <div class="product-item product-item-holder">
                                                <div class="ribbon green"><span>bestseller</span></div>
                                                <div class="row">
                                                    <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                        <div class="image">
                                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
                                                        </div>
                                                    </div><!-- /.image-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                        <div class="body">
                                                            <div class="label-discount clear"></div>
                                                            <div class="title">
                                                                <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                            </div>
                                                            <div class="brand">sony</div>
                                                            <div class="excerpt">
                                                                <div class="star-holder">
                                                                    <div class="star" data-score="4"></div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                            </div>
                                                            <div class="addto-compare">
                                                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.body-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                        <div class="right-clmn">
                                                            <div class="price-current">$1199.00</div>
                                                            <div class="price-prev">$1399.00</div>
                                                            <div class="availability"><label>availability:</label><span class="not-available">out of stock</span></div>
                                                            <a class="le-button disabled" href="#">add to cart</a>
                                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                        </div>
                                                    </div><!-- /.price-area -->
                                                </div><!-- /.row -->
                                            </div><!-- /.product-item -->


                                            <div class="product-item product-item-holder">
                                                <div class="ribbon red"><span>sell</span></div>
                                                <div class="row">
                                                    <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                        <div class="image">
                                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                                        </div>
                                                    </div><!-- /.image-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                        <div class="body">
                                                            <div class="label-discount clear"></div>
                                                            <div class="title">
                                                                <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                            </div>
                                                            <div class="brand">sony</div>
                                                            <div class="excerpt">
                                                                <div class="star-holder">
                                                                    <div class="star" data-score="2"></div>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                                            </div>
                                                            <div class="addto-compare">
                                                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.body-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                        <div class="right-clmn">
                                                            <div class="price-current">$1199.00</div>
                                                            <div class="price-prev">$1399.00</div>
                                                            <div class="availability"><label>availability:</label><span class="available">in stock</span></div>
                                                            <a class="le-button" href="#">add to cart</a>
                                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                        </div>
                                                    </div><!-- /.price-area -->
                                                </div><!-- /.row -->
                                            </div><!-- /.product-item -->

                                            <div class="product-item product-item-holder">
                                                <div class="row">
                                                    <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                        <div class="image">
                                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                                        </div>
                                                    </div><!-- /.image-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                        <div class="body">
                                                            <div class="label-discount green">-50% sale</div>
                                                            <div class="title">
                                                                <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                            </div>
                                                            <div class="brand">sony</div>
                                                            <div class="excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                                            </div>
                                                            <div class="addto-compare">
                                                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.body-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                        <div class="right-clmn">
                                                            <div class="price-current">$1199.00</div>
                                                            <div class="price-prev">$1399.00</div>
                                                            <div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
                                                            <a class="le-button" href="#">add to cart</a>
                                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                        </div>
                                                    </div><!-- /.price-area -->
                                                </div><!-- /.row -->
                                            </div><!-- /.product-item -->

                                            <div class="product-item product-item-holder">
                                                <div class="ribbon green"><span>bestseller</span></div>
                                                <div class="row">
                                                    <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                        <div class="image">
                                                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-05.jpg" />
                                                        </div>
                                                    </div><!-- /.image-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                        <div class="body">
                                                            <div class="label-discount clear"></div>
                                                            <div class="title">
                                                                <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                            </div>
                                                            <div class="brand">sony</div>
                                                            <div class="excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                            </div>
                                                            <div class="addto-compare">
                                                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.body-holder -->
                                                    <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                        <div class="right-clmn">
                                                            <div class="price-current">$1199.00</div>
                                                            <div class="price-prev">$1399.00</div>
                                                            <div class="availability"><label>availability:</label><span class="available">  in stock</span></div>
                                                            <a class="le-button" href="#">add to cart</a>
                                                            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                        </div>
                                                    </div><!-- /.price-area -->
                                                </div><!-- /.row -->
                                            </div><!-- /.product-item -->

                                        </div><!-- /.products-list -->

                                        <div class="pagination-holder">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 text-left">
                                                    <ul class="pagination">
                                                        <li class="current"><a  href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">next</a></li>
                                                    </ul><!-- /.pagination -->
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="result-counter">
                                                        Showing <span>1-9</span> of <span>11</span> results
                                                    </div><!-- /.result-counter -->
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.pagination-holder -->

                                    </div><!-- /.products-grid #list-view -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.grid-list-products -->

                        </section><!-- /#gaming -->
                    </div><!-- /.col -->
                    <!-- ========================================= CONTENT : END ========================================= -->
                </div><!-- /.container -->
            </section><!-- /#category-grid -->

            <!-- ============================================================= FOOTER ============================================================= -->
@endsection