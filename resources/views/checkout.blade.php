<!DOCTYPE html>
<html class="" lang="en">
   <head>
      <title>Checkout | Plantly</title>
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
      <!-- daterangepicker --> 
      <link rel="stylesheet" type="text/css" href="assets/css/daterangepicker.css" />
      <!-- fancybox -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
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
                  <div class="modal-title f_13 font-weight-bolder">Product successfully added to your shopping cart</div>
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
                        <h6 class="font-weight-bolder">Hummingbird printed t-shirt</h6>
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
                              <p class="font-weight-bolderer">show details</p>
                              <div>
                                 <span class="font-weight-bolder">subtotal</span>
                                 <span class="float-right font-weight-bolder">$94.00</span>
                              </div>
                              <div>
                                 <span class="font-weight-bolder">shipping</span>
                                 <span class="float-right font-weight-bolder">$9.00</span>
                              </div>
                           </div>
                           <div class="card-body ">
                              <div>
                                 <span class="font-weight-bolder">total(tax excl.)</span>
                                 <span class="float-right font-weight-bolder">$94.00</span>
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
                  <p>
                     <svg width="30px" height="30px">
                        <use xlink:href="#checked"></use>
                     </svg>
                  </p>
                  <h5>Compare list updated!</h5>
                  <p class="text-muted font-weight-bolder">Product successfully removed from the product comparison!</p>
                  <div class="text-danger font-weight-bolder">Go to Compare</div>
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
                  <p>
                     <svg width="30px" height="30px">
                        <use xlink:href="#checked"></use>
                     </svg>
                  </p>
                  <p class="text-muted font-weight-bolder">You must be logged in to manage your wishlist.</p>
                  <div class="text-danger font-weight-bolder">Go to wishlist</div>
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
 <!-- header area -->
    @include('header')
      <!-- header -->
      <!-- header area end -->
      <!-- vertical menu and slider -->
      <div id="home_vertical_menu">
         <div class="row ">
            <div class="col-lg-3 vertical_menu">
               <div class="v_menu bg-white rounded">
                  <div class="cat_menu bg-warning rounded-top"><a href="#" class="pe-auto text-uppercase d-md-none d-sm-none d-none d-lg-block font-weight-bolder"><i class="fas fa-bars"></i>all categories</a></div>
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
      <!-- checkout page -->
      <div id="checkout_page" class="checkout-page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3 ">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul>
                        <li class="d-inline-block font-weight-bolderer"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolderer"><a href="#">checkout</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <div class="row">
               <div class="col-lg-8 col-12">
                  <div class="accordion" id="check_out_toggle">
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_info">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_info" aria-expanded="true" aria-controls="check_info">
                              Personal information<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_info" class="collapse show" aria-labelledby="checkout_info" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <ul class="nav nav-tabs " role="tablist" >
                                 <li class="nav-item" >
                                    <a class="nav-link p-0 font-weight-bolder active" id="order_guest_tab" data-toggle="tab" href="#order_guest" role="tab" aria-controls="order_guest" aria-selected="true">order as a guest</a>
                                 </li>
                                 <li class="hr_"></li>
                                 <li class="nav-item" >
                                    <a class="nav-link p-0 font-weight-bolder" id="sign_in_tab" data-toggle="tab" href="#sign_in" role="tab" aria-controls="sign_in" aria-selected="false">sign in</a>
                                 </li>
                              </ul>
                              <div class="tab-content" >
                                 <div class="tab-pane fade show active" id="order_guest"  aria-labelledby="order_guest">
                                    <div id="Registration" class="page-content mt-4 mb-0">
                                       <form  class="needs-validation " method="post" novalidate>
                                          <div class="form-group text-left">
                                             <label class="font-weight-bolder">Social title</label><br>
                                             <span class="form-check">
                                             <input class="form-check-input" type="radio" name="gridRadios" id="gender_mr" checked>
                                             <label class="form-check-label" for="gender_mr">
                                             mr.
                                             </label>
                                             </span>
                                             <span class="form-check">
                                             <input class="form-check-input" type="radio" name="gridRadios" id="gender_mrs">
                                             <label class="form-check-label" for="gender_mrs">
                                             mrs.
                                             </label>
                                             </span>
                                          </div>
                                          <div class="form-group">
                                             <label for="f_name" class="font-weight-bolder">First name</label>
                                             <input type="text" class="form-control" id="f_name" placeholder="First name"  required>
                                             <div class="invalid-feedback">Please enter your name.</div>
                                          </div>
                                          <div class="form-group" >
                                             <label for="l_name" class="font-weight-bolder">Last name</label>
                                             <input type="text" class="form-control" id="l_name" placeholder="Last Name" required>
                                             <div class="invalid-feedback">Please enter your name.</div>
                                          </div>
                                          <div class="form-group">
                                             <label for="r_email" class="font-weight-bolder">Email address</label>
                                             <input type="email" class="form-control" id="r_email" aria-describedby="emailHelp" placeholder="Email" required>
                                             <div class="invalid-feedback">Please enter your account name.</div>
                                          </div>
                                          <div class="form-group font-weight-bolder">
                                             <label for="r_password" class="font-weight-bolder">Password</label>
                                             <input type="password" class="form-control" id="r_password" placeholder="password" required>
                                             <div class="invalid-feedback">Please enter your password.</div>
                                          </div>
                                          <div class="form-group">
                                             <label class="font-weight-bolder">birth date</label>
                                             <input class="form-control"  type="date" required/>
                                             <div class="invalid-feedback">Please enter your birthdate.</div>
                                          </div>
                                          <div class="form-group form-check d-block">
                                             <input type="checkbox" class="form-check-input" >
                                             <label class="form-check-label" for="user_check">Sign up for our newsletter</label>
                                          </div>
                                          <div class="form-group form-check d-block">
                                             <input type="checkbox" class="form-check-input" >
                                             <label class="form-check-label" for="user_check">I agree to the terms and conditions and the privacy policy</label>
                                          </div>
                                          <div><input type="submit" name="submit" class="btn btn-primary mt-3" value="Save"></div>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="sign_in"  aria-labelledby="sign_in_tab">
                                    <div id="login" class="page-content  mt-4 ">
                                       <form class="needs-validation " method="post" novalidate>
                                          <div class="form-group">
                                             <label for="user_email" class="font-weight-bolder">Email address</label>
                                             <input type="email" class="form-control" id="user_email" aria-describedby="emailHelp" required>
                                             <div class="invalid-feedback">Please enter account name.</div>
                                             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                          </div>
                                          <div class="form-group font-weight-bolder" >
                                             <label for="user_password" class="font-weight-bolder">Password</label>
                                             <input type="password" class="form-control" id="user_password" required>
                                             <div class="invalid-feedback">Please enter your Password.</div>
                                          </div>
                                          <div class="form-group form-check">
                                             <input type="checkbox" class="form-check-input" id="user_check" >
                                             <label class="form-check-label" for="user_check">Check me out</label>
                                          </div>
                                          <input type="submit" name="submit" class="btn btn-primary mb-3 d-inline-block" value="submit">
                                          <div class="pass_acc d-inline-block float-right pt-3">
                                             <span class="forgot_password font-weight-bolderer"><a href="forgot.html">Forgot your password? </a></span>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- card -->
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="chechout_add">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_add" aria-expanded="false" aria-controls="check_add">
                              Address<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_add" class="collapse" aria-labelledby="chechout_add" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <div id="c_address" class="page-content">
                                 <form class="needs-validation " method="post" novalidate>
                                    <div class="form-group" >
                                       <label for="f_name" class="font-weight-bolder">line 1</label>
                                       <input type="text" class="form-control"  placeholder="Address Line 1"  required>
                                       <div class="invalid-feedback">Please Enter your address.</div>
                                    </div>
                                    <div class="form-group" >
                                       <label for="l_name" class="font-weight-bolder">line 2</label>
                                       <input type="text" class="form-control"  placeholder="Address Line 2"  required>
                                       <div class="invalid-feedback">Please Enter your address.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_email" class="font-weight-bolder">city</label>
                                       <input type="text" class="form-control"  placeholder="City"  required>
                                       <div class="invalid-feedback">Please Enter your city.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_password" class="font-weight-bolder">state</label>
                                       <input type="text" class="form-control"  placeholder="State"  required>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_password" class="font-weight-bolder">post code</label>
                                       <input type="text" class="form-control"  placeholder="Post Code"  required>
                                       <div class="invalid-feedback">Please Enter your post code.</div>
                                    </div>
                                    <div class="form-group">
                                       <label for="r_password" class="font-weight-bolder">country</label>
                                       <input type="text" class="form-control"  placeholder="Country"  required>
                                       <div class="invalid-feedback">Please Enter your country.</div>
                                    </div>
                                    <div><button id="clearButton" type="reset" class=" f_13 btn btn-primary rese mt-3">reset</button><input type="submit" name="submit" class="f_13 btn btn-primary mt-3 float-right" value="save"></div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- card -->
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_shipping">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_ship" aria-expanded="false" aria-controls="check_ship">
                              Shipping Method<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_ship" class="collapse" aria-labelledby="checkout_shipping" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <div id="ship_check" class="page-content">
                                 <form>
                                    <div class="form-group text-left">
                                       <label class="font-weight-bolder">Shipping Method</label><br>
                                       <span class="form-check d-inline-block">
                                       <input class="form-check-input" type="radio" name="gridRadios" id="free_ship" checked>
                                       <label class="form-check-label" for="free_ship">
                                       Free shipping
                                       </label>
                                       </span>
                                       <span class="form-check d-inline-block ml-2">
                                       <input class="form-check-input" type="radio" name="gridRadios" id="with_ship">
                                       <label class="form-check-label" for="with_ship">
                                       shipping
                                       </label>
                                       </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- card -->
                     <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_payment">
                           <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bolder" type="button" data-toggle="collapse" data-target="#check_payment" aria-expanded="false" aria-controls="check_payment">
                              Payment<span class="float-right"><i class="fas fa-angle-down"></i></span>
                              </button>
                           </h2>
                        </div>
                        <div id="check_payment" class="collapse" aria-labelledby="checkout_payment" data-parent="#check_out_toggle">
                           <div class="card-body">
                              <div id="pay_check" class="page-content">
                                 <form >
                                    <div class="form-group text-left">
                                       <label class="font-weight-bolder">payment Method</label><br>
                                       <span class="form-check d-inline-block">
                                       <input class="form-check-input" type="radio" name="gridRadios" id="pay_by_check" checked>
                                       <label class="form-check-label" for="pay_by_check">
                                       pay by check
                                       </label>
                                       </span>
                                       <span class="form-check d-inline-block ml-2">
                                       <input class="form-check-input" type="radio" name="gridRadios" id="pay_by_bank">
                                       <label class="form-check-label" for="pay_by_bank">
                                       pay by bank 
                                       </label>
                                       </span>
                                    </div>
                                    <div class="form-group form-check">
                                       <input type="checkbox" class="form-check-input" id="user_pay_check" >
                                       <label class="form-check-label" for="user_pay_check">I accept the Terms of Use & Privacy Policy</label>
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" class="btn btn-primary f_13">
                                       Order with an obligation to pay
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- card -->
                  </div>
               </div>
               <div class="col-lg-4 col-12 ">
                  <div class="border rounded bg-white final_payment">
                     <div class="card-body  border-bottom">
                        <p class="text-muted">5 items</p>
                        <p class="font-weight-bolderer">show details</p>
                        <div>
                           <span class="font-weight-bolder">subtotal</span>
                           <span class="float-right font-weight-bolder">$94.00</span>
                        </div>
                        <div>
                           <span class="font-weight-bolder">shipping</span>
                           <span class="float-right font-weight-bolder">$9.00</span>
                        </div>
                     </div>
                     <div class="card-body ">
                        <div>
                           <span class="font-weight-bolder">total(tax excl.)</span>
                           <span class="float-right font-weight-bolder">$94.00</span>
                        </div>
                        <div>
                           <span class="font-weight-bolder">taxes</span>
                           <span class="float-right font-weight-bolder">$9.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- checkout page -->
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
      <!-- slick -->
      <script  src="assets/js/slick.min.js"></script>
      <!-- popper.min -->
      <script src="assets/js/popper.min.js"></script>
      <!-- moment js -->
      <script src="assets/js/moment.min.js"></script>
      <!-- daterangepicker js -->
      <script src="assets/js/daterangepicker.min.js"></script>
      <!-- wow.js - v1.2.1 -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Font Awesome Free 5.15.1 -->
      <script src="assets/js/all.min.js"></script>
      <!--   fancybox -->
      <script  src="assets/js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>
      <script>
         // Disable form submissions if there are invalid fields
         (function() {
           'use strict';
           window.addEventListener('load', function() {
             // Get the forms we want to add validation styles to
             var forms = document.getElementsByClassName('needs-validation');
             // Loop over them and prevent submission
             var validation = Array.prototype.filter.call(forms, function(form) {
               form.addEventListener('submit', function(event) {
                 if (form.checkValidity() === false) {
                   event.preventDefault();
                   event.stopPropagation();
                 }
                 form.classList.add('was-validated');
               }, false);
             });
           }, false);
         })();
      </script>
   </body>
</html>

