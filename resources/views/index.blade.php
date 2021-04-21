

@extends('layouts.master')

@section('content')
        <!-- Top Header Area End -->
        <div class="main_header_area">
          <div class="container h-100">
            <div class="row h-100">
              <div class="col-12 d-md-flex justify-content-between">
                <!-- Header Social Area -->
                <div class="header-social-area">
                  <!--
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>-->
                </div>
                <!-- Menu Area -->
                <div class="main-menu-area">
                  <nav class="navbar navbar-expand-lg align-items-start">
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-toggle="collapse"
                      data-target="#karl-navbar"
                      aria-controls="karl-navbar"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"
                        ><i class="ti-menu"></i
                      ></span>
                    </button>

                    <div
                      class="collapse navbar-collapse align-items-start collapse"
                      id="karl-navbar"
                    >
                      <ul class="navbar-nav animated" id="nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="">Marque</a>
                        </li>
                        <li class="nav-item ">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Marque</option>
                                @foreach($Cars as $Car)
                                <option value="1">{{$Car->marque}}</option>
                                @endforeach
                              </select>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="">Modèle</a>
                        </li>
                        <li class="nav-item ">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>models</option>
                                @foreach($Cars as $Car)
                                <option value="1">{{$Car->model}}</option>
                                @endforeach
                              </select>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="">Motorisation</a>
                        </li>
                        <li class="nav-item ">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>diesel</option>
                                @foreach($Cars as $Car)
                                <option value="1">{{$Car->motorisation}}</option>
                                @endforeach
                              </select>
                        </li>
                        <li class="nav-item active">
                          <a class=" btn-primary nav-link mx-3 btn-md search" href="" style="background-color: #ff084e;" >Motorisation</a>

                        </li>

                        <!-- <li class="nav-item dropdown">
                          <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="karlDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Pages</a
                          >
                          <div
                            class="dropdown-menu"
                            aria-labelledby="karlDropdown"
                          >
                            <a class="dropdown-item" href="index.html">Home</a>
                            <a class="dropdown-item" href="shop.html">Shop</a>
                            <a class="dropdown-item" href="product-details.html"
                              >Product Details</a
                            >
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html"
                              >Checkout</a
                            >
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Dresses</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"
                            ><span class="karl-level">hot</span> Shoes</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li> -->
                      </ul>
                    </div>
                  </nav>
                </div>
                <!-- Help Line -->
                <div class="help-line" style="border:1px solid white; border-radius: 2px;">

                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ****** Header Area End ****** -->

      <!-- ****** Top Discount Area End ****** -->

      <!-- ****** Welcome Slides Area Start ****** -->
      <div class="row">
        <div class="col-lg-12" style="padding-left: 10%; padding-right: 10%">
          <section class="welcome_area">
            <div class="welcome_slides owl-carousel " >
              <!-- Single Slide Start -->
              <div
                class="single_slide height-800 bg-img background-overlay"
                style="background-image: url({{ asset('img/bg-img/bg-1.jpg') }})"
              >
                <div class="container h-100">
                  <div class="row h-100 align-items-center">
                    <div class="col-12">
                      <div class="welcome_slide_text">
                        <h6
                          data-animation="bounceInDown"
                          data-delay="0"
                          data-duration="500ms"
                        >
                          * Only today we offer free shipping
                        </h6>
                        <h2
                          data-animation="fadeInUp"
                          data-delay="500ms"
                          data-duration="500ms"
                        >
                          Fashion Trends
                        </h2>
                        <a
                          href="#"
                          class="btn karl-btn"
                          data-animation="fadeInUp"
                          data-delay="1s"
                          data-duration="500ms"
                          >Shop Now</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide Start -->
              <div
                class="single_slide height-800 bg-img background-overlay"
                style="background-image: url({{ asset('img/bg-img/bg-4.jpg') }})"
              >
                <div class="container h-100">
                  <div class="row h-100 align-items-center">
                    <div class="col-12">
                      <div class="welcome_slide_text">
                        <h6
                          data-animation="fadeInDown"
                          data-delay="0"
                          data-duration="500ms"
                        >
                          * Only today we offer free shipping
                        </h6>
                        <h2
                          data-animation="fadeInUp"
                          data-delay="500ms"
                          data-duration="500ms"
                        >
                          Summer Collection
                        </h2>
                        <a
                          href="#"
                          class="btn karl-btn"
                          data-animation="fadeInLeftBig"
                          data-delay="1s"
                          data-duration="500ms"
                          >Check Collection</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Single Slide Start -->
              <div
                class="single_slide height-800 bg-img background-overlay"
                style="background-image: url({{ asset('img/bg-img/bg-2.jpg') }})"
              >
                <div class="container h-100">
                  <div class="row h-100 align-items-center">
                    <div class="col-12">
                      <div class="welcome_slide_text">
                        <h6
                          data-animation="fadeInDown"
                          data-delay="0"
                          data-duration="500ms"
                        >
                          * Only today we offer free shipping
                        </h6>
                        <h2
                          data-animation="bounceInDown"
                          data-delay="500ms"
                          data-duration="500ms"
                        >
                          Women Fashion
                        </h2>
                        <a
                          href="#"
                          class="btn karl-btn"
                          data-animation="fadeInRightBig"
                          data-delay="1s"
                          data-duration="500ms"
                          >Check Collection</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
           <!-- Single Catagory -->
           <!-- Single Catagory -->
           <!--Pub Section
          <section class="top_catagory_area d-md-flex clearfix">
           
            <div
              class="single_catagory_area d-flex align-items-center bg-img"
              style="background-image: url(img/bg-img/bg-2.jpg)"
            >
              <div class="catagory-content">
                <h6>On Accesories</h6>
                <h2>Sale 30%</h2>
                <a href="#" class="btn karl-btn">SHOP NOW</a>
              </div>
            </div>
           
            <div
              class="single_catagory_area d-flex align-items-center bg-img"
              style="background-image: url(img/bg-img/bg-3.jpg)"
            >
              <div class="catagory-content">
                <h6>in Bags excepting the new collection</h6>
                <h2>Designer bags</h2>
                <a href="#" class="btn karl-btn">SHOP NOW</a>
              </div>
            </div>
          </section>
        -->
        </div>
      </div>

      <!-- ****** Welcome Slides Area End ****** -->

      <!-- ****** Top Catagory Area Start ****** -->
    
      <!-- ****** Top Catagory Area End ****** -->

      <!-- ****** Quick View Modal Area Start ****** -->
@foreach($bestsell as $b)
      <div
        class="modal fade"
        id="myModal-{{$b->piece_id}}"
        tabindex="-1"
        role="dialog"
        aria-labelledby="quickview"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-lg modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <button
              type="button"
              class="close btn"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
              <div class="quickview_body">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-5">
                      <div class="quickview_pro_img">
                        <img src="{{ $b->image }}" alt="" />
                      </div>
                    </div>
                    <div class="col-12 col-lg-7">
                      <div class="quickview_pro_des">
                        <h4 class="title">  {{$b->name}}</h4>
                        <div class="top_seller_product_rating mb-15">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h5 class="price"> ${{$b->prix}} <span>$130</span></h5>
                        <p>
                         {{$b->Caracteristique}}
                        </p>
                        <a href="details/{{$b->piece_id}}">View Full Product Details</a>
                      </div>
                      <!-- Add to Cart Form -->
                      <form class="cart" method="post" action="{{route('cart.store')}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$b->piece_id}}">
                                        <input type="hidden" name="name" value="{{$b->name}}">
                                        <input type="hidden" name="prix" value="{{$b->prix}}">
                                        <input type="hidden" name="image" value="{{$b->image}}">
                        <div class="quantity">
                          <span
                            class="qty-minus"
                            onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"
                            ><i class="fa fa-minus" aria-hidden="true"></i
                          ></span>

                          <input
                            type="number"
                            class="qty-text"
                            id="qty"
                            step="1"
                            min="1"
                            max="12"
                            name="quantity"
                            value="1"
                          />

                          <span
                            class="qty-plus"
                            onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"
                            ><i class="fa fa-plus" aria-hidden="true"></i
                          ></span>
                        </div>
                        <button
                          type="submit"
                          name="addtocart"
                          value="5"
                          class="cart-submit"
                        >
                          Add to cart
                        </button>
                        <!-- Wishlist -->
                        <div class="modal_pro_wishlist">
                          <a href="wishlist.html" target="_blank"
                            ><i class="ti-heart"></i
                          ></a>
                        </div>
                      </form>

                      <div class="share_wf mt-30">
                        <p>Share With Friend</p>
                        <div class="_icon">
                          <a href="#"
                            ><i class="fa fa-facebook" aria-hidden="true"></i
                          ></a>
                          <a href="#"
                            ><i class="fa fa-twitter" aria-hidden="true"></i
                          ></a>
                          <a href="#"
                            ><i class="fa fa-pinterest" aria-hidden="true"></i
                          ></a>
                          <a href="#"
                            ><i class="fa fa-google-plus" aria-hidden="true"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- ****** Quick View Modal Area End ****** -->

      <section class="you_may_like_area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 pad">
                    <div class="section_heading text-center backgrey ">
                        <h2>Best Selling</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="you_make_like_slider owl-carousel">
                      @foreach($bestsell as $best)
                        <!-- Single gallery Item -->
                        <div class="single_gallery_item shadow ">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ $best->image }}" alt="">
                                <div class="product-quicview">
                                    <a href="" data-toggle="modal" data-target="#myModal-{{$best->piece_id }}"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">${{ $best->prix }}</h4>
                                <p>{{ $best->Caracteristique }}</p>
                                <!-- Add to Cart -->
                                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                            </div>
                        </div>
                      @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- ****** New Arrivals Area Start ****** -->
      <section class="new_arrivals_area  clearfix">
        <div class="container">
          <div class="row">
            <div class="col-12 ">
              <div class="section_heading text-center backgrey ">
                  <h2>New Arrivals</h2>
              </div>      
          </div>
        </div>

        <div class="karl-projects-menu mb-100">
          <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All</button>
            @foreach($Categories->take(5) as $Categorie)
            <button class="btn" data-filter=".{{$Categorie->id}}">{{$Categorie->name}}</button>
            @endforeach
            <!-- <button class="btn" data-filter=".man">Categorie3</button>
            <button class="btn" data-filter=".access">Categorie4</button>
            <button class="btn" data-filter=".shoes">Categorie5</button>
            <button class="btn" data-filter=".kids">Categorie6</button> -->
          </div>
        </div>

        <div class="container">
          <div class="row karl-new-arrivals">
          @foreach($Subcategorie as $subcategorie)

            <!-- Single gallery Item Start -->
            <div
          style="box-shadow: ;"
              class="col-12 col-sm-6 col-md-2 single_gallery_item {{ $subcategorie->category_id }} wow fadeInUpBig cc shadow"
              data-wow-delay="0.2s"
            >
              <!-- Product Image -->
              <div class="product-img">
                <img src="{{ $subcategorie->image }}" alt=""  style="width: 100%";/>
                <div class="product-quicview">
                  <a href="shop/{{$subcategorie->id}}"
                    ><i class="ti-more-alt"></i
                  ></a>
                </div>
              </div>
              <!-- Product Description -->
              <div class="product-description">
                <h4 class="product-price">{{ $subcategorie->category->name }}</h4>
                <p>{{ $subcategorie->name }}</p>
                <!-- Add to Cart -->
                <a href="#" class="add-to-cart-btn">See more</a>
              </div>
            </div>

            @endforeach
          </div>
        </div>
      </section>
      <!-- ****** New Arrivals Area End ****** -->

      <!-- ****** Offer Area Start ****** -->
      <section
        class="offer_area height-700 section_padding_100 bg-img"
        style="background-image: url({{ asset('img/bg-img/bg-5.jpg') }})"
      >
        <div class="container h-100">
          <div class="row h-100 align-items-end justify-content-end">
            <div class="col-12 col-md-8 col-lg-6">
              <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                <p>* Free shipping until 25 Dec 2017</p>
                <div class="offer-product-price">
                  <h3><span class="regular-price">$25.90</span> $15.90</h3>
                </div>
                <a href="#" class="btn karl-btn mt-30">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ****** Offer Area End ****** -->

      <!-- ****** Popular Brands Area Start ****** -->
      <section class="karl-testimonials-area section_padding_100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section_heading text-center">
                <h2>Commentaires</h2>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              <div class="karl-testimonials-slides owl-carousel">
                <!-- Single Testimonial Area -->
                <div class="single-testimonial-area text-center">
                  <span class="quote">"</span>
                  <h6>
                    Nunc pulvinar molestie sem id blandit. Nunc venenatis
                    interdum mollis. Aliquam finibus nulla quam, a iaculis justo
                    finibus non. Suspendisse in fermentum nunc.Nunc pulvinar
                    molestie sem id blandit. Nunc venenatis interdum mollis.
                  </h6>
                  <div
                    class="testimonial-info d-flex align-items-center justify-content-center"
                  >
                    <div class="tes-thumbnail">
                      <img src="{{ asset('img/bg-img/tes-1.jpg') }}" alt="" />
                    </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span>
                    </div>
                  </div>
                </div>

                <!-- Single Testimonial Area -->
                <div class="single-testimonial-area text-center">
                  <span class="quote">"</span>
                  <h6>
                    Nunc pulvinar molestie sem id blandit. Nunc venenatis
                    interdum mollis. Aliquam finibus nulla quam, a iaculis justo
                    finibus non. Suspendisse in fermentum nunc.Nunc pulvinar
                    molestie sem id blandit. Nunc venenatis interdum mollis.
                  </h6>
                  <div
                    class="testimonial-info d-flex align-items-center justify-content-center"
                  >
                    <div class="tes-thumbnail">
                      <img src="{{ asset('img/bg-img/tes-1.jpg') }}" alt="" />
                    </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span>
                    </div>
                  </div>
                </div>

                <!-- Single Testimonial Area -->
                <div class="single-testimonial-area text-center">
                  <span class="quote">"</span>
                  <h6>
                    Nunc pulvinar molestie sem id blandit. Nunc venenatis
                    interdum mollis. Aliquam finibus nulla quam, a iaculis justo
                    finibus non. Suspendisse in fermentum nunc.Nunc pulvinar
                    molestie sem id blandit. Nunc venenatis interdum mollis.
                  </h6>
                  <div
                    class="testimonial-info d-flex align-items-center justify-content-center"
                  >
                    <div class="tes-thumbnail">
                      <img src="{{ asset('img/bg-img/tes-1.jpg') }}" alt="" />
                    </div>
                    <div class="testi-data">
                      <p>Michelle Williams</p>
                      <span>Client, Los Angeles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ****** Popular Brands Area End ****** -->
@endsection

