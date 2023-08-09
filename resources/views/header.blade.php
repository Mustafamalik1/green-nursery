<header>
         <div class="topbar-outer py-2 border-bottom d-md-none d-none d-none d-lg-block">
            <div class="">
               <div class="row">
                  <div class="col-lg-5 col-md-4 col-sm-4 topbar_left">
                     <ul>
                        <li>
                           <span class="font-weight-bolderer">Get 30% Off On Selected Items</span>
                        </li>
                     </ul>
                  </div>
                  <!-- col-lg-5 col-md-4 col-sm-4 hidden-md-down topbar_left -->
                  <div class="col-lg-7 col-md-8 col-sm-8 text-xs-right  topbar_right text-right">
                     <nav class="navbar d-flex align-items-center  justify-content-end">
                        <div class="dropdown right1 md_2 hr_">
                           <span class="dropdown-toggle lng-select-menu" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <select class=" select-menu form-select d-none d-sm-block" >
                                 <option value="selected">English <i class="fas fa-angle-down"></i></option>
                                 <option value="1">Polski</option>
                                 <option value="2">Romana</option>
                                 <option value="3">Deutsch</option>
                              </select>
                           </span>
                        </div>
                        <div class="dropdown right1 md_1">
                            <span class="dropdown-toggle lng-select-menu" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <select class=" select-menu form-select d-none d-sm-block" >
                                 <option value="selected">EUR €<i class="fas fa-angle-down"></i></option>
                                 <option value="1">USD $</option>
                              </select>
                           </span>
                        </div>
                        
                     </nav>
                  </div>
                  <!-- col-lg-7 col-md-8 col-sm-8 text-xs-right hidden-md-down topbar_right text-right -->
               </div>
               <!-- row -->
            </div>
            <!-- container  -->
         </div>
         <!-- topbar-outer py-2 border-bottom<-->
         <!-- second row -->
         <div class="header-top py-4 border-bottom sticky-md-top">
            <div class="header-top-container">
               <div class="row header_row">
                  <div class="col-xl-2 col-lg-2 col-6  head-logo pl-md-0">
                     <div class="text-left header-top-left pt-2"><a href="index.html"><img src="assets/img/logo.png" class="img-responsive img" alt="logo"></a></div>
                  </div>
                  <!-- col-xl-2 col-lg-2 col-md-2 col-sm-3 head-logo -->
                  <div class="col-xl-10 col-lg-10 col-6  head-search">
                     <div class="d-flex navbar">
                        <div class="input-class  text-left col-xl-8 col-lg-7 col-md-12  ">
                           <div class="between-header border border-danger rounded mb-0 head-left">
                              <select class="select-menu form-select d-none d-sm-block" >
                                 <option value="selected">all categories</option>
                                 <option value="1">laptop</option>
                                 <option value="2">headphone</option>
                                 <option value="3">audio</option>
                              </select>
                              <div class="input-group">
                                 <input type="text" placeholder="search" class="form-control" aria-label="search" aria-describedby="button-addon2">
                                 <div class="input-group-btn"><button type="button" class="btn btn-danger text-uppercase font-weight-normal">search</button></div>
                              </div>
                           </div>
                           <!-- between-header text-left col-sm-8 head-left border border-danger rounded mb-0 -->
                        </div>
                        <div class="col-xl-4 col-lg-5 head-right text-right">
                           <ul class="top_cart">
                            @if (auth()->check())
             
                            <li class="dropdown right1 md_acc md_acco">
    <x-app-layout>

    </x-app-layout>
    </li>
                                    @else

                                    <li class="dropdown right1 md_acc md_acco">
                                    <span class="account-block">
                                 </span>
                                 <span class="dropdown-toggle my_account" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My account
                                     <a href="#">
                                         </a>
                                        </span>
                                        <span class="dropdown-menu r_menu dropdown-menu-right" >
                                            <a class="dropdown-item font-weight-bolderer" href="{{ route('login') }}">log in</a>
                                            <a class="dropdown-item font-weight-bolderer" href="{{ route('register') }}">register</a>
                                 </span>
                                </li>
                                @endif
                              <!--  <li class="d-lg-none d-md-inline-block user">
                                 <div class="head_ border rounded bg-white text-left">
                                    <a class=" md_login" href="#"></a>
                                </div>
                                 </li> -->
                              <li class="dropdown d-inline-block my-cart md_acco">
                                 <a href="#"  class="cart-qty">
                                 <span class="cart-contents">
                                 </span>
                                 <span class="d-lg-inline-block d-md-none d-sm-none d-none align-middle font-weight-bolderer"></span><span class="price_cart d-md-inline-block align-middle font-weight-bolderer">2</span>
                                 </a>
                                 <span class="dropdown-toggle Price-amount" role="menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 $230.00
                                 </span>
                                 <div class="dropdown-menu s_cart dropdown-menu-right" >
                                    <ul class="shopping-cart p-2 ">
                                       <li class="pb-2 d-block cart-remove cart_cross">
                                          <div class="media">
                                            
                                             <div>
                                                <a href="#"><img src="assets/img/product/product_13.jpg" class="fst-image img-fluid align-self-center" alt="product_13"></a>
                                             </div>
                                             <div class="media-body">
                                                <h6 class="mt-0 f_15">Media heading</h6>
                                                <p><span class="f_13">1 x $ 299.00</span></p>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="pb-2 d-block cart-remove border-bottom pl-0 cart_cross wblastcart">
                                          <!-- <span class=""></span> -->
                                          <div class="media ">
                                             
                                             <div>
                                                <a href="#"><img src="assets/img/product/product_21.jpg" class="fst-image img-fluid align-self-center" alt="product_21"></a>
                                             </div>
                                             <div class="media-body">
                                                <h6 class="mt-0 f_15">Media heading</h6>
                                                <p><span>1 x $ 299.00</span></p>
                                             </div>
                                          </div>
                                       </li>


                                          <li class="d-block text-muted font-weight-bolderer p-2 border-bottom">
                                             <span class="text-left">subtotal:</span>
                                             <span class="float-right">$230.00</span>
                                          </li>
                                          <li class="d-block font-weight-bolderer pt-2">
                                             <span class="text-left"><a href="{{ route('shop.cart') }}">view cart</a></span>
                                             <span class="float-right"><a href="{{ route('shop.checkout') }}">check out</a></span>
                                          </li>
                                    </ul>
                                    <p class="text-center cartempty">Your Shopping cart is empty!</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <!-- col-sm-4 head-right text-right -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 head-search -->
               </div>
               <!-- row -->
            </div>
            <!--  container  -->
         </div>
         <!-- header-top py-4 border-bottom-->
         <!-- third row -->
         <!-- third row -->
        

                  <div class="header_bottom shadow-sm rounded d-md-none d-sm-none d-none d-lg-block">
         <div class="">
            <div class="row">
               <div class="col-lg-12 text-left">
                  <ul class="main-menu navbar">
                     <li><a href="{{ route('shop.redirect') }}">Home</a></li>
                     <li>
                     <a href="{{ route('shop.shop') }}" class="font-weight-bolder">Shop</a>

               </li>
               </li>
               <li class="dropdown mega_menu m1 level-1 font-weight-bolderer">
                  <a class="dropdown-toggle" href="single-product.html"  role="button" data-toggle="dropdown" aria-expanded="false">category&nbsp;<span class="float-right"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="dropdown-menu">
                     <li>
                        <ul class="row mx-0">
                           <li class="mg_menu col-lg-3 col-md-12 ">
                              <ul class="sub-category">
                                 <li class="h_title text-uppercase font-weight-bolder border-bottom d-block">Pot</li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Pigmyweeds</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Indoor Plants</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">outdoor Plants</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Flamingo plant</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Succulent Plant</a></li>
                              </ul>
                           </li>
                           <li class="mg_menu col-lg-3 col-md-12 ">
                              <ul class="sub-category">
                                 <li class="h_title text-uppercase font-weight-bolder border-bottom d-block">Plant</li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Fragrant Plants</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Purifying Plant</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Live Plant</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Raisin Pot</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html"> Decorative Pot</a></li>
                              </ul>
                           </li>
                           <li class="mg_menu col-lg-3 col-md-12 ">
                              <ul class="sub-category">
                                 <li class="h_title text-uppercase font-weight-bolder border-bottom d-block">Crassula</li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Nerve Plant</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Flowering Plants</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Plant Seed</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Luck Plants</a></li>
                                 <li class="d-block"><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Plant House</a></li>
                              </ul>
                           </li>
                           <li class="mg_menu col-lg-3 col-md-12">
                              <ul>
                                 <li class="d-block"><a href="single-product.html"><img src="assets/img/m_menu.jpg" class="fst-image mx-auto d-block mb-1 img-fluid" alt="m_menu"></a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <!-- <li>
                  <a class="dropdown-toggle" href="blog.html"  role="button" data-toggle="dropdown" aria-expanded="false">blog&nbsp;<span class="float-right"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="dropdown-menu all-page-drop">
                     <li><a class="dropdown-item font-weight-bolder" href="blog.html">blog</a></li>
                     <li><a class="dropdown-item font-weight-bolder" href="blog-left-sidebar.html">left sidebar</a></li>
                     <li><a class="dropdown-item font-weight-bolder" href="blog-right-sidebar.html">right sidebar</a></li>
                  </ul>
               </li> -->
               <li><a href="{{ route('shop.gallery') }}">gallery</a></li>
               <li><a href="{{ route('shop.about_us') }}">about us</a></li>
               <li><a href="{{ route('shop.wishlist') }}">Wishlist</a></li>
               <li><a href="{{ route('shop.contact_us') }}">contact-us</a></li>
            </ul>
         </div>
         <!-- col-lg-12 text-left -->
         </div>
               <!-- row -->
            </div>
            <!-- container  -->
         </div>


         <!-- header_bottom shadow-sm rounded  -->
      </header>