<!DOCTYPE html>
<html class="" lang="zxx">
   <head>
        <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/Favicon.ico">
      <!-- bootstrap min-->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <!-- fontawesome -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
      <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
      <!-- OwlCarousel2 -->			
      <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
      <!-- animate -->
      <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
      <!-- media -->
      <link rel="stylesheet" type="text/css" href="assets/css/media.css">
      <!-- style -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <!-- googleapis -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
   </head>
   <body>
      <!-- cart-model -->
      <div class="modal fade" id="cart_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="modal-title f_13 font-weight-bold">Product successfully added to your shopping cart</div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-sm-4 col-xs-12 mb-3  ">
                        <img src="assets/img/product/product_13.jpg" class="fst-image mx-auto d-block img-fluid border rounded" alt="product_13">
                     </div>
                     <div class="col-sm-8 col-xs-12 ">
                        <h6 class="font-weight-bold">Hummingbird printed t-shirt</h6>
                        <div class="font-weight-bolder pb-1">$19.12</div>
                        <span class="font-weight-bolder f_13 pb-1">Size: S</span><br>
                        <span class="font-weight-bolder f_13 pb-1">Color: White</span><br>
                        <span class="font-weight-bolder f_13 pb-1">Qty: 2</span>
                     </div>
                  </div>
                  <div class="row">
                     <div class=" col-12 ">
                        <div class="border rounded final_payment">
                           <div class="card-body  border-bottom">
                              <p class="text-muted">5 items</p>
                              <p class="font-weight-bolder">show details</p>
                              <div>
                                 <span class="font-weight-bold">subtotal</span>
                                 <span class="float-right font-weight-bold">$94.00</span>
                              </div>
                              <div>
                                 <span class="font-weight-bold">shipping</span>
                                 <span class="float-right font-weight-bold">$9.00</span>
                              </div>
                           </div>
                           <div class="card-body ">
                              <div>
                                 <span class="font-weight-bold">total(tax excl.)</span>
                                 <span class="float-right font-weight-bold">$94.00</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <a class="btn btn-primary mt-2 f_13 px-3 py-2 rounded" data-dismiss="modal">close</a>
                  <a href="checkout.html" class="btn btn-primary mt-2 f_13 px-3 py-2 rounded">continue</a>
               </div>
            </div>
         </div>
      </div>
      <!-- cart_model -->
      <!-- eye-model -->
      <div class="modal fade" id="eye_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-sm-5 col-12">
                        <img src="assets/img/product/product_13.jpg" class="fst-image mx-auto d-block img-fluid border rounded" alt="product_13">
                     </div>
                     <div class="col-sm-7 col-12">
                        <h5 class="font-weight-bolder border-bottom me_name">Aliquam Top Erat Volutpat</h5>
                        <div class="font-weight-bolder border-bottom me_price">$19.12</div>
                        <div class="my-2 border-bottom me_des">Fashion has been creating well-designed collections since 2010. </div>
                        <div class="me_quan">
                           <div class="sp_counter ">
                              <div class="input-group">
                                 <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"><span class="minus">-</span></button>
                                 </span>
                                 <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                 <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"><span class="plus">+</span></button>
                                 </span>
                              </div>
                           </div>
                           <span>
                           <a href="cart.html" class="btn btn-primary primary mt-3">add to cart</a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- eye_model -->
      <!-- compare-model -->
      <div class="modal fade" id="compare_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center">
                   <p class="checked"></p>
                  <h5>Compare list updated!</h5>
                  <p class="text-muted font-weight-bold">Product successfully removed from the product comparison!</p>
                  <div class="text-danger font-weight-bold">Go to Compare</div>
               </div>
            </div>
         </div>
      </div>
      <!-- compare_model -->
      <!-- heart-model -->
      <div class="modal fade" id="heart_model" tabindex="-1"  aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body text-center">
                   <p class="checked"></p>
                  <p class="text-muted font-weight-bold">You must be logged in to manage your wishlist.</p>
                  <div class="text-danger font-weight-bold">Go to wishlist</div>
               </div>
            </div>
         </div>
      </div>
      <!-- heart_model -->
      <!-- shipping -->
      <div class="modal fade" id="shippingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content ">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <ul>
                     <li>Fashion has been creating well-designed collections since 2010. </li>
                     <li>The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. </li>
                     <li>The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. </li>
                     <li>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- shipping -->
      <!-- ask about product -->
      <div class="modal fade" id="question_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title " id="exampleModalLabel">shipping</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body que_form">
                  <h6>have a any question?</h6>
                  <form>
                     <div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <textarea class="form-control"  rows="3" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <input type="email" class="form-control" placeholder="Enter Your Mail">
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3 ">
                           <input type="tel" pattern=".{10}" class="form-control" id="other_number" oninput="check(this)" required placeholder="Enter Your Phone">
                        </div>
                        <div class="col-12 sp_form pl-0 pb-3">
                           <button type="submit" class="btn btn-primary">submit review</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- ask about product -->
      <!-- add to wishlist -->
      <div class="modal fade" id="wish_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-body">
                  Please login and you will add product to your wishlist
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                  <button type="submit" class="btn btn-primary">Register</button>
               </div>
            </div>
         </div>
      </div>
      <!-- add to wishlist -->
      <div class="preloader"></div>
      <!-- header area -->
       <!-- header area -->
     @include('header')
      <!-- header -->
      <!-- header area end -->
      <!-- vertical menu and slider -->
      <div id="home_vertical_menu">
         <div class="row ">
            <div class="col-lg-3 vertical_menu">
               <div class="v_menu bg-white rounded">
                  <div class="cat_menu bg-warning rounded-top"><a href="#" class="pe-auto text-uppercase d-md-none d-sm-none d-none d-lg-block font-weight-bold"><i class="fas fa-bars"></i>all categories</a></div>
                  <div class="navbar-header d-xl-none d-lg-none">
                     <button type="button" class="btn-navbar navbar-toggle" onclick="openNav()" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fas fa-bars"></i></button>
                  </div>
                  <div id="mySidenav" class="sidenav  ">
                     <div class="close-nav d-xl-none d-lg-none">
                        <span class="categories">Menu</span>
                        <a href="javascript:void(0)" class="closebtn pull-right" onclick="closeNav()"><i class="fas fa-times"></i></a>
                     </div>
                  <ul class="vertical_main_menu h_menu navbar navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="">
                           <a class="dropdown-toggle" href="shop-left-sidebar.html"  role="button" data-toggle="dropdown" aria-expanded="false">shop&nbsp;<span class="float-right"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">left sidebar</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="shop-right-sidebar.html">right sidebar</a></li>
                           </ul>
                        </li>
                        <li class="dropdown mega_menu m1_menu level-1 font-weight-bolderer">
                           <a class="dropdown-toggle" href="single-product.html"  role="button" data-toggle="dropdown" aria-expanded="false">portfolio&nbsp;<span class="float-right"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li>
                                 <ul class="row mx-0">
                                    <li class="mg_menu col-lg-6 col-md-12 ">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bolder border-bottom">portfolio grid 2</li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="portfolio-grid-2.html">portfolio grid 2</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="portfolio-grid-3.html">portfolio grid 3</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="portfolio-grid-4.html">portfolio grid 4</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="mesonary-grid-2.html">mesonary grid 2</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="mesonary-grid-3.html">mesonary grid 3</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="mesonary-grid-4.html">mesonary grid 4</a></li>
                                       </ul>
                                    </li>
                                    <li class="mg_menu col-lg-6 col-md-12">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bolder border-bottom">theme elements</li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="title.html">title</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="category-style.html">category</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="services.html">services</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="product-tab.html">product tab</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="multi-slider-product.html">multi slider product</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a class="dropdown-toggle" href="blog.html"  role="button" data-toggle="dropdown" aria-expanded="false">
                           blog&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item font-weight-bolderer" href="blog.html">blog</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="blog-left-sidebar.html">left sidebar</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="blog-right-sidebar.html">right sidebar</a></li>
                           </ul>
                        </li>
                        <li class="dropdown mega_menu level-1 font-weight-bolderer">
                           <a class="dropdown-toggle" href="single-product.html"  role="button" data-toggle="dropdown" aria-expanded="false">Category&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li>
                                 <ul class="row mx-0">
                                    <li class="mg_menu col-lg-4 col-md-12 ">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bolder border-bottom">Pot</li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Pigmyweeds</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Indoor Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">outdoor Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Flamingo plant</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Succulent Plant</a></li>
                                       </ul>
                                    </li>
                                    <li class="mg_menu col-lg-4 col-md-12">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bolder border-bottom">Plants</li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Nerve Plant</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Flowering Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Plant Seed</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Luck Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolderer" href="shop-left-sidebar.html">Plant House</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown level-1 font-weight-bolderer">
                           <a class="dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-expanded="false">pages&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item font-weight-bolderer" href="about-us.html">about us</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="login.html">login</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="registration.html">registration</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="single-product.html">single product</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="single-blog.html">single blog</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="cart.html">cart</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="compare.html">compare</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="wishlist.html">wishlist</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="checkout.html">check out</a></li>
                              <li><a class="dropdown-item font-weight-bolderer" href="forgot.html">forgot password</a></li>
                           </ul>
                        </li>
                        <li class="level-1 font-weight-bolderer"><a href="contact-us.html">contact-us</a></li
                           >
                     </ul>
                  </div>
               </div>
               <!-- v_menu bg-white rounded -->
            </div>
         </div>
         <!-- row -->
      </div>
      <!-- container  menu_slider mt-4 -->
      <!-- vertical menu and slider end -->
      <!-- shop page -->
      <div id="shop_page" class="shop-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul>
                        <li class="d-inline-block font-weight-bolder"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="#">shop</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <div class="row">
               <div class="col-lg-3 col-md-4">
                  <form action="#" id="shop_page-form" method="post" class="needs-validation" novalidate>
                     <div class="shop_sidebar border card-body rounded bg-white">
                        <h2 class="text-uppercase card-title  font-weight-bolder d-md-block d-none">filter by</h2>
                        <div class="s_filter mt-0">
                           <h6 class="text-uppercase  border-bottom font-weight-bold">Range<button class="toggle collapsed" data-toggle="collapse" data-target="#shop_range_collapse"></button></h6>
                           <div class="collapse " id="shop_range_collapse">
                              <div class="col-md-6 col-sm-12 pl-0 pr-md-2 pr-sm-0 pr-0">
                                 <label class="font-weight-bolder">min</label>
                                 <input type="number" class="form-control"  placeholder="$0">
                              </div>
                              <div class="col-md-6 col-sm-12 pr-0 pl-md-2 pl-sm-0 pl-0 ">
                                 <label class="font-weight-bolder">max</label>
                                 <input type="number" class="form-control"  placeholder="$0">
                              </div>
                           </div>
                        </div>
                        <div class="s_filter form">
                           <h6 class="text-uppercase  border-bottom font-weight-bold">color<button class="toggle collapsed" data-toggle="collapse" data-target="#shop_color_collapse"></button></h6>
                           <div class="collapse" id="shop_color_collapse">
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">pink</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input " type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">yellow</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">white</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">black</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                           </div>
                        </div>
                        <div class="s_filter">
                           <h6 class="text-uppercase border-bottom font-weight-bold">brand<button class="toggle collapsed" data-toggle="collapse" data-target="#shop_brand_collapse"></button></h6>
                           <div class="collapse" id="shop_brand_collapse">
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">brand1</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">brand1</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">another brand</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                           </div>
                        </div>
                        <div class="s_filter">
                           <h6 class="text-uppercase border-bottom font-weight-bold">size<button class="toggle collapsed" data-toggle="collapse" data-target="#shop_size_collapse"></button></h6>
                           <div class="collapse" id="shop_size_collapse">
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">s</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">m</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">l</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>
                              <label class="form-check">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-label font-weight-bolder">xl</span>
                              <span class="text-right float-right font-weight-bolder">(1)</span>
                              </label>

                               
                           </div>
                        </div>
                       <button id="clearButton" data-search-url="#" class="btn btn-primary clear_btn" type="reset">Clear all</button>
                     </div>
                  </form>
               </div>
               <div class="col-lg-9 col-md-8">
                  <div class="row shop_grid_list_row mb-5 bg-white p-2 p-md-1 mb-lg-3 mx-0">
                     <div class="col-xl-2 col-sm-2 col-4 pl-0">
                        <a href="#" id="grid" class="btn">
                        <span class="grid_icon  p-1"><i class="fas fa-th"></i></span>
                        </a>
                        <a href="#" id="list" class="btn">
                        <span class="list_icon  p-1"><i class="fas fa-list"></i></span>
                        </a>
                     </div>
                     <div class="col-xl-4 d-xl-inline-block d-lg-none d-sm-none d-none">
                        <div class="show-product pt-1"><a href="#"> There are 12 products. </a></div>
                     </div>
                     <div class="col-xl-6 col-sm-10 col-8 pr-0 sortpro">
                        <div class="sort-by text-right">
                           <div class="sort">
                              <select class="custom-select" id="inlineFormCustomSelect">
                                 <option selected>Relevance...</option>
                                 <option value="1">Relevance</option>
                                 <option value="2">Name, A to Z</option>
                                 <option value="3">Name, Z to A</option>
                                 <option value="3">Price, low to high</option>
                                 <option value="3">Price, high to low</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="products" class="row">
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_1.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_2.jpg" class="second-img mx-auto d-block img-fluid" alt="product_2"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">Set of Foliage & Bamboo Plants In White Pot</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>									
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_15.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_15"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_16.jpg" class="second-img mx-auto d-block img-fluid" alt="product_16"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">High mowing Vegetable Garden Seeds</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>										
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_3.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_3"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_4.jpg" class="second-img mx-auto d-block img-fluid" alt="product_4"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">Laudant Doloremque</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>										
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_5.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_5"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_6.jpg" class="second-img mx-auto d-block img-fluid" alt="product_6"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">Botanical Interests Tomato Seeds</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>										
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_7.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_7"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_8.jpg" class="second-img mx-auto d-block img-fluid" alt="product_8"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">similique suntin culpaqui</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>										
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_9.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_9"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_10.jpg" class="second-img mx-auto d-block img-fluid" alt="product_10"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">Grand 5 House Plant Set</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>										
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_11.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_11"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_12.jpg" class="second-img mx-auto d-block img-fluid" alt="product_12"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">Rolling Nature Good Luck Jade Plant</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>										
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                     <div class="item col-xl-3">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_13.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_13"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_14.jpg" class="second-img mx-auto d-block img-fluid"  alt="product_13"></a>
                           </div>
                           <div class="text-center main_text pt-3">
                              <div>
                                 <div class="star mb-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <h2 class="pro-heading  font-weight-bolder mb-1	"><a href="single-product.html">MorningVale Croton Mammy pot</a></h2>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <p class="description mt-1 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                 <div class="button-group">
                                    <a href="#"  class="symbol pro_heart ml-0" data-toggle="modal" data-target="#heart_model"></a>
                                    <a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
                                    <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
                                 </div>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>							
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- item -->
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <div class="row">
               <div class="col-12">
                  <nav class="float-right mt-5 mt-col-3">
                     <ul class="pagination">
                        <li class="page-item">
                           <a class="page-link" href="#">
                           <span aria-hidden="true">&laquo;</span>
                           </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                           <a class="page-link" href="#">
                           <span aria-hidden="true">&raquo;</span>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <!-- shop_page -->
      <!-- shop page -->
      <!-- footer -->
     @include('footer')
      <!-- footer -->
      <!-- footer end -->
      <!-- scroll -->
      <a href="#" id="scroll"></a>
      <!-- jquery-3.4.1 -->
      <script src="assets/js/jquery-3.4.1.min.js"></script>
      <!-- owl.carousel -->
      <script src="assets/js/owl.carousel.js"></script>
      <!-- bootstrap.min -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- popper.min -->
      <script src="assets/js/popper.min.js"></script>
      <!-- wow.js - v1.2.1 -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Font Awesome Free 5.15.1 -->
      <script src="assets/js/all.min.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>
   </body>
</html>

