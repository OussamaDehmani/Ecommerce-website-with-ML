<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ML-AUTO</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}" />

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  </head>

  <body>
    <div class="catagories-side-menu">
      <!-- Close Icon -->
      <div id="sideMenuClose" class="backorg">
        <i class="ti-close"></i>
      </div>
      <!--  Side Nav  -->
      <div class="nav-side-menu">
        <div class="menu-list">
          <h6>Categories</h6>
          <ul id="menu-content" class="menu-content collapse out">
            <!--start Single Item -->
            @foreach($Categories as $Cat)
            <li data-toggle="collapse" data-target="#{{$Cat->name}}" class="collapsed ">
              <a href="#{{$Cat->name}}">{{$Cat->name}}<span class="arrow"></span></a>
              
            
              <ul class="sub-menu collapse" id="{{$Cat->name}}" >
              @foreach($Cat->subcategory as $sub )
                <li ><a href="sub/{{$sub->id}}" >{{$sub->name}}</a></li>
                @endforeach
              </ul>
            
              
            </li>
            @endforeach


          
          
          </ul>
        </div>
      </div>
    </div>

    <div id="wrapper">
      <!-- ****** Header Area Start ****** -->
      <header class="header_area">
        <!-- Top Header Area Start -->
        <div class="top_header_area backgrey">
          <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-end">
              <div
                class="d-flex align-items-center mr-auto header-right-side-menu"
              >
                <a class=" " href="#" id="sideMenuBtn"
                  ><i class="ti-menu" aria-hidden="true"></i
                ></a>
              </div>
              <div class="col-12 col-lg-7">
                <div class="top_single_area d-flex align-items-center">
                  <!-- Logo Area -->
                  <div class="top_logo">
                    <a href="#"><img src="{{ asset('img/core-img/logo.png') }}" alt="" /></a>
                  </div>
                  <!-- Cart & Menu Area -->
                  <div
                    class="header-cart-menu d-flex align-items-center ml-auto"
                  >
                    <!-- Cart Area -->
                    <div class="cart">
                      <a href="#" id="header-cart-btn" target="_blank"
                      ><span class="cart_quantity">{{Cart::content()->count()}}</span>
                      <i class="ti-bag"></i> Your Bag $20</a>
                      @guest
                     <a href="register"> <button type="button"  class="btn btn-secondary btn-sm sign" >Sign Up</button></a>
                     <a href="login"> <button type="button" class="btn btn-secondary btn-sm sign">Sign In</button></a>
                      @else
                      <a class="btn"> {{ Auth::user()->name }} <span class='arrow'>></span></a>
                      @endguest
                    
                      <!-- Cart List Area Start -->
                      <ul class="cart-list">
                      @foreach($Cards as $card)
                        <li>
                          <a href="#" class="image"
                            ><img
                              src="{{ asset($card->options->image) }}"
                              class="cart-thumb"
                              alt=""
                          /></a>
                          <div class="cart-item-desc">
                            <h6><a href="#">{{$card->name}}</a></h6>
                            <p> <span class="price">${{$card->price}}</span></p>
                          </div>
                          <span class="dropdown-product-remove"
                            ><i class="icon-cross"></i
                          ></span>
                        </li>
                      @endforeach
                        <li class="total">
                          <span class="pull-right">Total: ${{Cart::total()}}</span>
                          <a href="cart" class="btn btn-sm btn-cart"
                            >Cart</a
                          >
                          <a
                            href="checkout-1.html"
                            class="btn btn-sm btn-checkout"
                            >Checkout</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @yield('content')
              <!-- ****** Footer Area Start ****** -->
      <footer class="footer_area">
        <div class="container">
          <div class="row">
            <!-- Single Footer Area Start -->
            <div class="col-12 col-md-6 col-lg-3">
              <div class="single_footer_area">
                <div class="footer-logo">
                  <img src="{{ asset('img/core-img/logo.png') }}" alt="" />
                </div>
                <div class="copywrite_text d-flex align-items-center">
                  <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    All rights reserved | Made with
                    <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    &amp; distributed by
                    <a href="https://themewagon.com" target="_blank"
                      >ThemeWagon</a
                    >
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
              </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
              <div class="single_footer_area">
                <ul class="footer_widget_menu">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Faq</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
              <div class="single_footer_area">
                <ul class="footer_widget_menu">
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">Shipping</a></li>
                  <li><a href="#">Our Policies</a></li>
                  <li><a href="#">Afiliates</a></li>
                </ul>
              </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-lg-5">
              <div class="single_footer_area">
                <div class="footer_heading mb-30">
                  <h6>Subscribe to our newsletter</h6>
                </div>
                <div class="subscribtion_form">
                  <form action="#" method="post">
                    <input
                      type="email"
                      name="mail"
                      class="mail"
                      placeholder="Your email here"
                    />
                    <button type="submit" class="submit">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="line"></div>

          <!-- Footer Bottom Area Start -->
          <div class="footer_bottom_area">
            <div class="row">
              <div class="col-12">
                <div class="footer_social_area text-center">
                  <a href="#"
                    ><i class="fa fa-pinterest" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-linkedin" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
  </body>
</html>