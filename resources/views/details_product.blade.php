@extends('layouts.master')

@section('content')
        <div class="wrapper">
            <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->

           
            <!-- ============================================================= HEADER : END ============================================================= -->
            <div class="animate-dropdown"><!-- ========================================= BREADCRUMB ========================================= -->
                <div id="top-mega-nav">
                    <div class="container">
                        <nav>
                            <ul class="inline">
                                <li class="dropdown le-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-list"></i> Recommended Category
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($Subcategories as $cat)
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
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">desktop PC </a>
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
                                            <a href="#">gaming</a>
                                        </li><!-- /.breadcrumb-item -->

                                        <li class="breadcrumb-item current">
                                            <a href="#">VAIO Fit Laptop - Windows</a>
                                        </li><!-- /.breadcrumb-item -->
                                    </ul>
                                </li><!-- /.breadcrumb-nav-holder -->
                            </ul>
                         </nav>
                    </div><!-- /.container -->
                </div><!-- /#top-mega-nav -->
            <!-- ========================================= BREADCRUMB : END ========================================= -->
            </div>

            <div id="single-product">
                <div class="container">
                @if(count($piece->myimage)>=2)
                    <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">

                            <div id="owl-single-product" class="owl-carousel">
                                <div class="single-product-gallery-item" id="slide0">
                                    <a data-rel="prettyphoto" href="">
                                        <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->image)}}"  />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->
                              
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-rel="prettyphoto" href="">
                                        <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->myimage[0]->image)}}"  />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->

                                <div class="single-product-gallery-item" id="slide2">
                                    <a data-rel="prettyphoto" href="">
                                    <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->myimage[1]->image)}}" />

                                    </a>
                                </div><!-- /.single-product-gallery-item -->

                                <div class="single-product-gallery-item" id="slide3">
                                    <a data-rel="prettyphoto" href="">
                                        <!-- <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-gallery-01.jpg')}}" />
                                     -->
                                     <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->myimage[2]->image)}}"  />

                                    </a>
                                </div><!-- /.single-product-gallery-item -->
                            </div><!-- /.single-product-slider -->

                          
                            <div class="single-product-gallery-thumbs gallery-thumbs">

                                <div id="owl-single-product-thumbnails" class="owl-carousel">
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide0">
                                        <img width="67" alt="" src="{{($piece->image)}}"  />
                                    </a>
                                  
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                        <img width="67" alt="" src="{{($piece->myimage[0]->image)}}"  />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                    <img width="67" alt="" src="{{asset($piece->myimage[1]->image)}}" />
                                        
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                    <img width="67" alt="" src="{{asset($piece->myimage[2]->image)}}"  />
                                       
                                    </a>

                                      
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                        <img width="67" alt="" src="{{($piece->myimage[0]->image)}}"  />
                                    </a>

                                  
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide0">
                                        <img width="67" alt="" src="{{($piece->image)}}"  />
                                    </a>
                                 

                                    <!-- <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                    <img width="67" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/gallery-thumb-01.jpg')}}" />

                                    </a>

                    -->
                                </div><!-- /#owl-single-product-thumbnails -->

                                <div class="nav-holder left hidden-xs">
                                    <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                                </div><!-- /.nav-holder -->

                                <div class="nav-holder right hidden-xs">
                                    <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                                </div><!-- /.nav-holder -->

                            </div><!-- /.gallery-thumbs -->

                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.gallery-holder -->
                @else
                <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">

                            <div id="owl-single-product" class="owl-carousel">
                                <div class="single-product-gallery-item" id="slide1">
                                    <a data-rel="prettyphoto" href="">
                                        <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->image)}}"  />
                                    </a>
                                </div><!-- /.single-product-gallery-item -->

                                <div class="single-product-gallery-item" id="slide2">
                                    <a data-rel="prettyphoto" href="">
                                    <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->image)}}" />

                                    </a>
                                </div><!-- /.single-product-gallery-item -->

                                <div class="single-product-gallery-item" id="slide3">
                                    <a data-rel="prettyphoto" href="">
                                        <!-- <img class="img-responsive" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-gallery-01.jpg')}}" />
                                     -->
                                     <img class="img-responsive" style="width:433px;height:325px" alt="" src="{{asset($piece->image)}}"  />

                                    </a>
                                </div><!-- /.single-product-gallery-item -->
                            </div><!-- /.single-product-slider -->


                            <div class="single-product-gallery-thumbs gallery-thumbs">

                                <div id="owl-single-product-thumbnails" class="owl-carousel">
                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                        <img width="67" alt="" src="{{asset($piece->image)}}"  />
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                    <img width="67" alt="" src="{{asset($piece->image)}}" />
                                        
                                    </a>

                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                                    <img width="67" alt="" src="{{asset($piece->image)}}"  />
                                       
                                    </a>

                                    <!-- <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                    <img width="67" alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/gallery-thumb-01.jpg')}}" />
                                    </a>
                    -->
                                </div><!-- /#owl-single-product-thumbnails -->

                                <div class="nav-holder left hidden-xs">
                                    <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                                </div><!-- /.nav-holder -->

                                <div class="nav-holder right hidden-xs">
                                    <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                                </div><!-- /.nav-holder -->

                            </div><!-- /.gallery-thumbs -->

                        </div><!-- /.single-product-gallery -->
                    </div><!-- /.gallery-holder -->
                @endif
                    <div class="no-margin col-xs-12 col-sm-7 body-holder">
                    <div class="body">
                         
                        <form action="{{route('cart.store')}}" method="post">
                            @csrf
                            <div class="star-holder inline">
                                <div class="star" data-score="4"></div>
                            </div>
                           
                            <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

                            <div class="title">
                           
                            <a href="#">{{$piece->name}}</a></div>
                            <div class="brand">sony</div>

                            <div class="social-row">
                                <span class="st_facebook_hcount"></span>
                                <span class="st_twitter_hcount"></span>
                                <span class="st_pinterest_hcount"></span>
                            </div>

                            <div class="buttons-holder">
                                <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                <a class="btn-add-to-compare" href="#">add to compare list</a>
                            </div>

                            <div class="excerpt">
                                <p>{{$piece->Caracteristique}}.</p>
                            </div>

                            <div class="prices">
                                <div class="price-current">${{$piece->prix}}</div>
                                <div class="price-prev">$2199.00</div>
                            </div>

                            <div class="qnt-holder">
                                <div class="le-quantity">
                                   
                                        <a class="minus" href="#reduce" 
                                        onclick="$in=document.getElementById('myqte').value;
                                        document.getElementById('myqte').value=$in-1;"
                                        ></a>
                                        <input name="myqte" id="myqte" readonly='false' type="text" value="{{$qte}}">
                                        <a class="plus" href="#add"
                                        onclick="$in=document.getElementById('myqte').value;
                                        document.getElementById('myqte').value=parseInt(document.getElementById('myqte').value)+1;"></a>
                                    
                                </div>
                               
                                        <input hidden='true' name='myid' value="{{$piece->id}}">
                                        <input hidden='true' name='name' value="{{$piece->name}}">
                                        <input hidden='true' name='prix' value="{{$piece->prix}}">
                                        <input hidden='true' name='image' value="{{$piece->image}}">
                                        <button type="submit" class="le-button huge">add to cart</button>
                        </form>
                          
                    </div><!-- /.qnt-holder -->
                    </div><!-- /.body -->

                    </div><!-- /.body-holder -->
                </div><!-- /.container -->
            </div><!-- /.single-product -->

            <!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
            <section id="single-product-tab">
                <div class="container">
                    <div class="tab-holder">

                        <ul class="nav nav-tabs simple" >
                            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
                            <li><a href="#reviews" data-toggle="tab">Reviews (3)</a></li>
                        </ul><!-- /.nav-tabs -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet porttitor eros. Praesent quis diam placerat, accumsan velit interdum, accumsan orci. Nunc libero sem, elementum in semper in, sollicitudin vitae dolor. Etiam sed tempus nisl. Integer vel diam nulla. Suspendisse et aliquam est. Nulla molestie ante et tortor sollicitudin, at elementum odio lobortis. Pellentesque neque enim, feugiat in elit sed, pharetra tempus metus. Pellentesque non lorem nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                                <p>Sed consequat orci vel rutrum blandit. Nam non leo vel risus cursus porta quis non nulla. Vestibulum vitae pellentesque nunc. In hac habitasse platea dictumst. Cras egestas, turpis a malesuada mollis, magna tortor scelerisque urna, in pellentesque diam tellus sit amet velit. Donec vel rhoncus nisi, eget placerat elit. Phasellus dignissim nisl vel lectus vehicula, eget vehicula nisl egestas. Duis pretium sed risus dapibus egestas. Nam lectus felis, sodales sit amet turpis se.</p>

                                <div class="meta-row">
                                    <div class="inline">
                                        <label>SKU:</label>
                                        <span>54687621</span>
                                    </div><!-- /.inline -->

                                    <span class="seperator">/</span>

                                    <div class="inline">
                                        <label>categories:</label>
                                        <span><a href="#">-50% sale</a>,</span>
                                        <span><a href="#">gaming</a>,</span>
                                        <span><a href="#">desktop PC</a></span>
                                    </div><!-- /.inline -->

                                    <span class="seperator">/</span>

                                    <div class="inline">
                                        <label>tag:</label>
                                        <span><a href="#">fast</a>,</span>
                                        <span><a href="#">gaming</a>,</span>
                                        <span><a href="#">strong</a></span>
                                    </div><!-- /.inline -->
                                </div><!-- /.meta-row -->
                            </div><!-- /.tab-pane #description -->

                            <div class="tab-pane" id="additional-info">
                                <ul class="tabled-data">
                                    <li>
                                        <label>weight</label>
                                        <div class="value">7.25 kg</div>
                                    </li>
                                    <li>
                                        <label>dimensions</label>
                                        <div class="value">90x60x90 cm</div>
                                    </li>
                                    <li>
                                        <label>size</label>
                                        <div class="value">one size fits all</div>
                                    </li>
                                    <li>
                                        <label>color</label>
                                        <div class="value">white</div>
                                    </li>
                                    <li>
                                        <label>guarantee</label>
                                        <div class="value">5 years</div>
                                    </li>
                                </ul><!-- /.tabled-data -->

                                <div class="meta-row">
                                    <div class="inline">
                                        <label>SKU:</label>
                                        <span>54687621</span>
                                    </div><!-- /.inline -->

                                    <span class="seperator">/</span>

                                    <div class="inline">
                                        <label>categories:</label>
                                        <span><a href="#">-50% sale</a>,</span>
                                        <span><a href="#">gaming</a>,</span>
                                        <span><a href="#">desktop PC</a></span>
                                    </div><!-- /.inline -->

                                    <span class="seperator">/</span>

                                    <div class="inline">
                                        <label>tag:</label>
                                        <span><a href="#">fast</a>,</span>
                                        <span><a href="#">gaming</a>,</span>
                                        <span><a href="#">strong</a></span>
                                    </div><!-- /.inline -->
                                </div><!-- /.meta-row -->
                            </div><!-- /.tab-pane #additional-info -->


                            <div class="tab-pane" id="reviews">
                                
                                <div class="comments">
                                @foreach($comments as $comment)
                                    <div class="comment-item">
                                        <div class="row no-margin">
                                            <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                <div class="avatar">
                                                    <img alt="avatar" src="{{asset('images/default-avatar.jpg')}}">
                                                </div><!-- /.avatar -->
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-lg-11 col-sm-10 no-margin">
                                                <div class="comment-body">
                                                    <div class="meta-info">
                                                        <div class="author inline">
                                                            <a href="#" class="bold">{{$comment->user->name}}</a>
                                                        </div>
                                                        <div class="star-holder inline">
                                                            <div class="star" data-score="4"></div>
                                                        </div>
                                                        <div class="date inline pull-right">
                                                        {{$comment->date_pub}}
                                                       
                                                        </div>
                                                    </div><!-- /.meta-info -->
                                                    <p class="comment-text">
                                                    {{$comment->description}}
                                                    </p><!-- /.comment-text -->
                                                </div><!-- /.comment-body -->

                                            </div><!-- /.col -->

                                        </div><!-- /.row -->
                                    </div><!-- /.comment-item -->
                                @endforeach
                                
                                </div><!-- /.comments -->

                                <div class="add-review row">
                                    <div class="col-sm-8 col-xs-12">
                                        <div class="new-review-form">
                                            <h2>Add review</h2>
                                            <form id="contact-form" class="contact-form" method="post" action="{{route('addcomment')}}" >
                                            @csrf   
                                            <div class="row field-row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <label>name*</label>
                                                        <input class="le-input" readonly="true" value="{{ Auth::user()->name }}">
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <label>email*</label>
                                                        <input class="le-input" readonly="true" value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div><!-- /.field-row -->

                                                <div class="field-row star-row">
                                                    <label>your rating</label>
                                                    <div class="star-holder">
                                                        <div class="star big" data-score="0"></div>
                                                    </div>
                                                </div><!-- /.field-row -->

                                                <div class="field-row">
                                                    <label>your review</label>
                                                    <textarea rows="8" class="le-input" name="description"></textarea>
                                                </div><!-- /.field-row -->
                                            <input type="hidden" name="piece_id" value='{{$piece->id}}'>
                                                <div class="buttons-holder">
                                                    <button  class="le-button huge">Add review</button>
                                                </div><!-- /.buttons-holder -->
                                            </form><!-- /.contact-form -->
                                        </div><!-- /.new-review-form -->
                                    </div><!-- /.col -->
                                </div><!-- /.add-review -->

                            </div><!-- /.tab-pane #reviews -->
                        </div><!-- /.tab-content -->

                    </div><!-- /.tab-holder -->
                </div><!-- /.container -->
            </section><!-- /#single-product-tab -->
            <!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->
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
            				<div class="no-margin carousel-item product-item-holder size-small hover">
            					<div class="product-item">
            						<div class="ribbon red"><span>sale</span></div>
            						<div class="image">
            							<img alt="" src="{{asset('images/blank.gif')}}" data-echo="{{asset('images/products/product-11.jpg')}}" />
            						</div>
            						<div class="body">
            							<div class="title">
            								<a href="single-product.html">LC-70UD1U 70" class aquos 4K ultra HD</a>
            							</div>
            							<div class="brand">Sharp</div>
            						</div>
            						<div class="prices">
            							<div class="price-current text-right">$1199.00</div>
            						</div>
            						<div class="hover-area">
            							<div class="add-cart-button">
            								<a href="single-product.html" class="le-button">Add to Cart</a>
            							</div>
            							<div class="wish-compare">
            								<a class="btn-add-to-wishlist" href="#">Add to Wishlist</a>
            								<a class="btn-add-to-compare" href="#">Compare</a>
            							</div>
            						</div>
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class="no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class=" no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class=" no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class=" no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class=" no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class=" no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->

            				<div class=" no-margin carousel-item product-item-holder size-small hover">
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
            					</div><!-- /.product-item -->
            				</div><!-- /.product-item-holder -->
            			</div><!-- /#recently-carousel -->

            		</div><!-- /.carousel-holder -->
            	</div><!-- /.container -->
            </section><!-- /#recently-reviewd -->
            <!-- ========================================= RECENTLY VIEWED : END ========================================= -->
            <!-- ============================================================= FOOTER ============================================================= -->
            @endsection