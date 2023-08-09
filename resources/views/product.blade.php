<!DOCTYPE html>
<html class="" lang="en">
   <head>
      <title>Single-Product | Plantly</title>
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
      <!--  magnific-popup -->
      <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
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
      <script></script>
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
                        <h6 class="font-weight-bold">Set of 3 Good Luck Plants</h6>
                        <div class="font-weight-bold pb-1">$19.12</div>
                        <span class="font-weight-bold f_13 pb-1">Size: S</span><br>
                        <span class="font-weight-bold f_13 pb-1">Color: White</span><br>
                        <span class="font-weight-bold f_13 pb-1">Qty: 2</span>
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
                        <h5 class="font-weight-bold border-bottom me_name">Aliquam Top Erat Volutpat</h5>
                        <div class="font-weight-bold border-bottom me_price">$19.12</div>
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
                   <div class="text-danger font-weight-bold"><a href="compare.html">Go to Compare</a></div>
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
                  <div class="text-danger font-weight-bold"><a href="wishlist.html">Go to wishlist</a></div>
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
                        <li class="dropdown mega_menu m1_menu level-1 font-weight-bolder">
                           <a class="dropdown-toggle" href="single-product.html"  role="button" data-toggle="dropdown" aria-expanded="false">portfolio&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li>
                                 <ul class="row mx-0">
                                    <li class="mg_menu col-lg-6 col-md-12 ">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bold border-bottom">portfolio grid 2</li>
                                          <li><a class="dropdown-item font-weight-bolder" href="portfolio-grid-2.html">portfolio grid 2</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="portfolio-grid-3.html">portfolio grid 3</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="portfolio-grid-4.html">portfolio grid 4</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="mesonary-grid-2.html">mesonary grid 2</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="mesonary-grid-3.html">mesonary grid 3</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="mesonary-grid-4.html">mesonary grid 4</a></li>
                                       </ul>
                                    </li>
                                    <li class="mg_menu col-lg-6 col-md-12">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bold border-bottom">theme elements</li>
                                          <li><a class="dropdown-item font-weight-bolder" href="title.html">title</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="category-style.html">category</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="services.html">services</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="product-tab.html">product tab</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="multi-slider-product.html">multi slider product</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown level-1 font-weight-bolder">
                           <a class="dropdown-toggle" href="blog.html"  role="button" data-toggle="dropdown" aria-expanded="false">
                           blog&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item font-weight-bolder" href="blog.html">blog</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="blog-left-sidebar.html">left sidebar</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="blog-right-sidebar.html">right sidebar</a></li>
                           </ul>
                        </li>
                        <li class="dropdown level-1 font-weight-bolder">
                           <a class="dropdown-toggle" href="shop-left-sidebar.html"  role="button" data-toggle="dropdown" aria-expanded="false">shop&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">left sidebar</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="shop-right-sidebar.html">right sidebar</a></li>
                           </ul>
                        </li>
                        <li class="dropdown mega_menu level-1 font-weight-bolder">
                           <a class="dropdown-toggle" href="single-product.html"  role="button" data-toggle="dropdown" aria-expanded="false">Category&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li>
                                 <ul class="row mx-0">
                                    <li class="mg_menu col-lg-4 col-md-12 ">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bold border-bottom">Pot</li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Pigmyweeds</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Indoor Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">outdoor Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Flamingo plant</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Succulent Plant</a></li>
                                       </ul>
                                    </li>
                                    <li class="mg_menu col-lg-4 col-md-12">
                                       <ul>
                                          <li class="h_title text-uppercase font-weight-bold border-bottom">Plants</li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Nerve Plant</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Flowering Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Plant Seed</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Luck Plants</a></li>
                                          <li><a class="dropdown-item font-weight-bolder" href="shop-left-sidebar.html">Plant House</a></li>
                                       </ul>
                                    </li>
                                    <li class="mg_menu col-lg-4 col-md-12">
                                       <ul>
                                          <li><a href="single-product.html"><img src="assets/img/product/m_menu.jpg" class="fst-image mx-auto d-block mb-1 img-fluid" alt="m_menu"></a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown level-1 font-weight-bolder">
                           <a class="dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-expanded="false">pages&nbsp;<span class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item font-weight-bolder" href="about-us.html">about us</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="login.html">login</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="registration.html">registration</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="single-product.html">single product</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="single-blog.html">single blog</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="cart.html">cart</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="compare.html">compare</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="wishlist.html">wishlist</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="checkout.html">check out</a></li>
                              <li><a class="dropdown-item font-weight-bolder" href="forgot.html">forgot password</a></li>
                           </ul>
                        </li>
                        <li class="level-1 font-weight-bolder"><a href="contact-us.html">contact-us</a></li
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
      <!-- single product header area -->
      <div id="single_product" class="single_product_page animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container">
               <div class="row">
                  <div class="col-12">
                     <ul>
                        <li class="d-inline-block font-weight-bolder"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="#">plant</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- single product header area -->
        <!-- single product img and detail -->

      <div class="container sp_pro_container pt-2">
         <div class="row sh_page bg-white rounded border py-2">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 sp_left_product px-2">
               <div id="content" class="page-content">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12 sp_zoom_pro mb-5">
                        <img id="zoom_03" src="assets/img/product/product_1.jpg" class="rounded img-fluid js-product-cover" data-zoom-image="assets/img/product/product_1.jpg"/>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12 sp_muti_pro">
                        <div id="gallery_02" class="row owl-carousel owl-theme">
                            <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_1.jpg" data-zoom-image="assets/img/product/product_1.jpg">
                              <img src="assets/img/product/product_1.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_12.jpg" data-zoom-image="assets/img/product/product_12.jpg">
                              <img src="assets/img/product/product_12.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_13.jpg" data-zoom-image="assets/img/product/product_13.jpg">
                              <img src="assets/img/product/product_13.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_19.jpg" data-zoom-image="assets/img/product/product_19.jpg">
                              <img src="assets/img/product/product_19.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_17.jpg" data-zoom-image="assets/img/product/product_17.jpg">
                              <img src="assets/img/product/product_17.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_15.jpg" data-zoom-image="assets/img/product/product_15.jpg">
                              <img src="assets/img/product/product_15.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                           <div class="col-12 px-1">
                              <a  href="#" class="elevatezoom-gallery" data-image="assets/img/product/product_1.jpg" data-zoom-image="assets/img/product/product_11.jpg">
                              <img src="assets/img/product/product_11.jpg" class="border rounded img-fluid" width="100"/></a>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-6 col-12 sp_right_product pl-lg-3 pl-2 pr-2">
               <div class="sp_ri_leftpart">
                     <div class="sp_product_detail">
                     <h1 class=""><a href="#">Ferry Morse Large Vegetable Garden Set</a></h1>
                     <span class="sp_price font-weight-bold">$500.00</span>
                     <div class="text-secondary sp_tax">Tax included.</div>
                     <div class="sp_add_info my-3">
                        <ul>
                           <li class="sku my-2">
                              <span class="text-uppercase font-weight-bolder tags-title">sku:</span>
                              <span>5010</span>
                           </li>
                           <li class="availability my-2">
                              <span class="font-weight-bolder tags-title">Availability:</span>
                              <span class="p_quantity">1</span>
                              <span>in stock</span>
                           </li>
                        </ul>
                     </div>
                     <div class="sp_text">
                        <ul>
                           <li class="my-2" style="color: #505050;">Fashion has been creating well-designed collections since 2010. </li>
                           <li class="my-2">Casual multifunctional sofabeds head elevation comfortable sofa at daytime ttransforms into changes to a very comfortable bed at night. </li>
                        </ul>
                     </div>
                     <div class="sp_rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                     </div>
                     <div id="clockdiv" class="sp_clockdiv">
                        <div class="main_box rounded">
                           <span class="days"></span>
                           <div class="smalltext">Day</div>
                        </div>
                        <div class="main_box rounded">
                           <span class="hours"></span>
                           <div class="smalltext">Hour</div>
                        </div>
                        <div class="main_box rounded">
                           <span class="minutes"></span>
                           <div class="smalltext">Min</div>
                        </div>
                        <div class="main_box rounded">
                           <span class="seconds"></span>
                           <div class="smalltext">Sec</div>
                        </div>
                     </div>
                     <div class="sp_color my-4">
                        <ul>
                           <li class="font-weight-bold text-uppercase my-2">color:</li>
                           <li class="btn-group btn-group-toggle my-2" data-toggle="buttons">
                              <label class="btn yellow rounded  active">
                              <input class="" type="radio" name="options"  >
                              </label>
                              <label class="btn black rounded">
                              <input class="" type="radio" name="options" > 
                              </label>
                           </li>
                        </ul>
                     </div>
                     <div class="sp_size">
                        <ul>
                           <li class="font-weight-bold text-uppercase my-2">size:</li>
                           <li class="btn-group btn-group-toggle my-2" data-toggle="buttons">
                              <label class="btn size_ rounded  active">
                              <input class="" type="radio" name="options"  >S
                              </label>
                              <label class="btn size_ rounded">
                              <input class="" type="radio" name="options" >M
                              </label>
                              <label class="btn size_ rounded">
                              <input class="" type="radio" name="options" >L
                              </label>
                           </li>
                        </ul>
                     </div>
                     <div class="sp_about my-3">
                        <span class="sp_comn1"><a href="#" class="font-weight-bolder" data-toggle="modal" data-target="#shippingModal"><i class="fas fa-box-open"></i>shipping</a></span>
                        <span class="sp_comn2"><a href="#" class="font-weight-bolder" data-toggle="modal" data-target="#question_Modal"><i class="far fa-envelope"></i>ask about this product</a></span>
                     </div>
                     <div class="sp_counter">
                        <div class="sp_c_count1">
                           <div class="number">
                              <!-- <span class="minus">-</span>
                                 <input type="text" value="1"/>
                                 <span class="plus">+</span> -->
                              <div class="sp_counter ">
                                 <div class="input-group">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number p-0" disabled="disabled" data-type="minus" data-field="quant[1]"><span class="minus">-</span></button>
                                    </span>
                                    <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number p-0" data-type="plus" data-field="quant[1]"><span class="plus">+</span></button>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <span class="sp_c_count2">
                        <a href="cart.html" class="btn btn-primary primary">add to cart</a>
                        </span>
                     </div>
                     <div class="form-check sp_check my-3">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">I agree with the terms and conditions </label>                
                     </div>
                     <div class="sp_buy">
                        <button type="button" class="btn btn-primary primary">buy it now</button>
                     </div>
                     <div class="sp_wish_com my-3">
                        <span class="sp_comp1"><a href="#" class="text-uppercase font-weight-bolder " data-toggle="modal" data-target="#wish_Modal"><i class="far fa-heart"></i>add TO WISHLIST</a></span>
                        <span class="sp_comp2"><a href="#" class="text-uppercase font-weight-bolder"><i class="fas fa-tasks"></i>ADD TO COMPARE</a></span>
                     </div>
                     <div class="sp_ad_info">
                        <ul>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">vendor:</span><span><a href="#" class="text-muted pl-2">levis</a></span>
                           </li>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">product type:</span><span class="text-muted pl-2">Plant</span>
                           </li>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">barcode:</span><span class="text-muted pl-2">1234321</span>
                           </li>
                           <li class="my-2">
                              <span class="font-weight-bolder tags-title">tags:</span><span><a href="#" class="text-muted px-2">summer ,</a></span><span><a href="#" class="text-muted ">winter</a></span>
                           </li>
                        </ul>
                     </div>
                     <div class="sp_collapse_block my-4">
                        <div class="accordion" id="collapse_block">
                           <div class="card">
                              <div class="card-header" id="heading_One">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left tags-title" type="button" data-toggle="collapse" data-target="#collapse_One" aria-expanded="true" aria-controls="collapse_One">
                                    DESCRIPTION<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapse_One" class="collapse show" aria-labelledby="heading_One" data-parent="#collapse_block">
                                 <div class="card-body">
                                    <p class="mb-2">Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                    <p class="mb-2"> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>
                                    <p class="mb-2"> Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="heading_Two">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse_Two" aria-expanded="false" aria-controls="collapse_Two">
                                    ADDITIONAL INFORMATION<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapse_Two" class="collapse" aria-labelledby="heading_Two" data-parent="#collapse_block">
                                 <div class="card-body">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td class="pr-5">color:</td>
                                             <td>pink</td>
                                          </tr>
                                          <tr>
                                             <td>size:</td>
                                             <td>large</td>
                                          </tr>
                                          <tr>
                                             <td>material:</td>
                                             <td>faberics</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header" id="heading_Three">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed " type="button" data-toggle="collapse" data-target="#collapse_Three" aria-expanded="false" aria-controls="collapse_Three">
                                    REVIEW<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapse_Three" class="collapse" aria-labelledby="heading_Three" data-parent="#collapse_block">
                                 <div class="card-body">
                                    <form>
                                       <div class="">
                                          <div class="col-12 sp_form pl-0">
                                             <label class="font-weight-bolder">name:</label>
                                             <input type="text" class="form-control" placeholder="First name">
                                          </div>
                                          <div class="col-12 sp_form pl-0">
                                             <label class="font-weight-bolder">email:</label>
                                             <input type="email" class="form-control" placeholder="Enter Your Mail">
                                          </div>
                                          <div class="col-12 sp_form pl-0">
                                             <label class="font-weight-bolder">title:</label>
                                             <input type="text" class="form-control" placeholder="Review Title">
                                          </div>
                                          <div class="col-12 sp_form pl-0">
                                             <label class="font-weight-bolder">review:</label>
                                             <textarea class="form-control sp_text_area" id="exampleFormControlTextarea1" rows="3" placeholder="Your Review"></textarea>
                                          </div>
                                          <div class="col-12 sp_form pl-0">
                                             <button type="submit" class="btn btn-primary font-weight-bolder">submit review</button>
                                          </div>
                                       </div>
                                    </form>
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


<!-- single product img and detail -->
         <!-- related product -->
         <div class="container custom_container t_pro_container fadeInUp">
            <div class="row">
               <div class="col-12">
                  <div class="title_outer">
                     <h5 class="font-weight-bolder mb-4 d-inline-block">related products</h5>
                  </div>
                  <!-- title_outer -->
               </div>
               <!-- col-12 -->
            </div>
            <!-- row -->
            <div class="row">
               <div id="related_product_carousel" class="srelated_product_carousel owl-carousel owl-theme pro_thumb">
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_1.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_2.jpg" class="second-img mx-auto d-block img-fluid" alt="product_2"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">Set of 3 Good Luck Plants</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_5.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_5"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_6.jpg" class="second-img mx-auto d-block img-fluid" alt="product_6"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">2 Layer Bamboo Plant With FNP Sleeve</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_9.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_9"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_10.jpg" class="second-img mx-auto d-block img-fluid" alt="product_10"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">amboo Plant Live Indoor Yellow Plastic Pot</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_27.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_27"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_28.jpg" class="second-img mx-auto d-block img-fluid" alt="product_28"></a>
                           </div>
                           <div class="text-center">
                             <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">Ferns 'N' Petals 2 Layer Bamboo Plant </a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_17.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_17"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_18.jpg" class="second-img mx-auto d-block img-fluid" alt="product_18"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">VishNature Two Layer Lucky Bamboo Plant</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_21.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_21"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_22.jpg" class="second-img mx-auto d-block img-fluid" alt="product_22"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder"> Bougainvillea FLOWER</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
               </div>
               <!-- product_carousel2 -->
            </div>
         </div>
         <!-- related product end -->
         <!-- custom product -->
         <div class="container custom_container t_pro_container">
            <div class="row">
               <div class="col-12">
                  <div class="title_outer">
                     <h5 class="font-weight-bolder mb-4 d-inline-block">custom products</h5>
                  </div>
                  <!-- title_outer -->
               </div>
               <!-- col-12 -->
            </div>
            <!-- row -->
            <div class="row">
               <div id="custom_product_carousel" class="owl-carousel owl-theme pro_thumb">
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_21.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_21"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_22.jpg" class="second-img mx-auto d-block img-fluid" alt="product_22"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">Set of 3 Good Luck Plants</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_5.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_5"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_1.jpg" class="second-img mx-auto d-block img-fluid" alt="product_1"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">2 Layer Bamboo Plant With FNP Sleeve</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_5.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_5"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_16.jpg" class="second-img mx-auto d-block img-fluid" alt="product_16"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">amboo Plant Live Indoor Yellow Plastic Pot</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_1.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_1"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_6.jpg" class="second-img mx-auto d-block img-fluid" alt="product_6"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">VishNature Two Layer Lucky Bamboo Plant</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_22.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_22"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_21.jpg" class="second-img mx-auto d-block img-fluid" alt="product_21"></a>
                           </div>
                           <div class="text-center">
                            <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder"> Bamboo Plant For Happy Birthday</a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                                 <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                 + ADD TO CART
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
                  <div class="item">
                     <div class="col-12">
                        <div class="product_thumb bg-white rounded">
                           <div class="pro_image">
                              <a href="single-product.html"><img src="assets/img/product/product_9.jpg" class="fst-image mx-auto d-block img-fluid" alt="product_9"></a>
                              <a href="single-product.html"><img src="assets/img/product/product_11.jpg" class="second-img mx-auto d-block img-fluid" alt="product_11"></a>
                           </div>
                           <div class="text-center">
                             <div class="button-group">
											<a href="#"  class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
											<a href="#" class="symbol pro_eye"  data-toggle="modal" data-target="#eye_model"></a>
											<a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>	
										</div>
										
                              <div class="main_text">
                                 <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolder">Ferns 'N' Petals 2 Layer Bamboo Plant </a></h2>
                                 <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                 </div>
                                 <span class="text-center prices"><span class="font-weight-bolder price">$69.00 </span> <del class="text-muted">$100.00</del></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- item --> 
               </div>
               <!-- product_carousel2 -->
            </div>
         </div>
      </div>
      <!-- single_product_page -->
      <!-- custom product end -->
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
      <!-- jquery.magnific-popup -->
      <script src="assets/js/jquery.magnific-popup.js"></script>
      <!-- wow.js - v1.2.1 -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Font Awesome Free 5.15.1 -->
      <script src="assets/js/all.min.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>



      <script src="assets/js/jquery.magnific-popup.js"></script>
      <script src="assets/js/all.min.js"></script>
      <script src="assets/js/jquery.elevatezoom.js"></script>
      <script src="assets/js/slick.js"></script>
      <script>	



//gallery  sm-product
$(document).ready(function() {
  $("#gallery_02").owlCarousel({
  itemsCustom : [
    [0, 3],
    [375,2],
    [600, 5],
    [768,5],
    [1199,4],
    [1599,5]
    ],
    autoPlay: 4000,
    loop: true,
    navigationText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    navigation : false,
    pagination:false
  });
});

if (jQuery(window).width() >= 992){
         $(document).ready(function () {
            $("#zoom_03").elevateZoom({
              gallery:'gallery_02',
              cursor: 'pointer',
              easing : true,
              galleryActiveClass: 'active',
              imageCrossfade: true,
              loadingIcon: 'https://www.elevateweb.co.uk/spinner.gif'
            });
            //pass the images to Fancybox
            $("#zoom_03").bind("click", function(e) {
              var ez = $('#zoom_03').data('elevateZoom');
              $.fancybox(ez.getGalleryList());
              return false;
            });
         });
      };
      if (jQuery(window).width() <= 991){
         $(document).ready(function () {
            $('#gallery_02 img').click(function () {
             var src = $(this).attr('src');
             ($(this).closest(".sp_pro_container .page-content").find('.js-product-cover').attr('src',src));
            });
         });
      };




      		//getTimeRemaining	
         function getTimeRemaining(endtime) {
           var t = Date.parse(endtime) - Date.now();
           var seconds = Math.floor((t / 1000) % 60);
           var minutes = Math.floor((t / 1000 / 60) % 60);
           var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
           var days = Math.floor(t / (1000 * 60 * 60 * 24));
           return {
             'total': t,
             'days': days,
             'hours': hours,
             'minutes': minutes,
             'seconds': seconds
           };
         }
         
         function initializeClock(id, endtime) {
           var clock = document.getElementById(id);
           var daysSpan = clock.querySelector('.days');
           var hoursSpan = clock.querySelector('.hours');
           var minutesSpan = clock.querySelector('.minutes');
           var secondsSpan = clock.querySelector('.seconds');
         
           function updateClock() {
             var t = getTimeRemaining(endtime);
         
             if (t.total <= 0) {
               document.getElementById("clockdiv").className = "hidden-div";
               document.getElementById("timeIsNow").className = "visible-div";
               clearInterval(timeinterval);
               return true;
             }
         
             daysSpan.innerHTML = t.days;
             hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
             minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
             secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
         
           }
         
           updateClock();
           var timeinterval = setInterval(updateClock, 1000);
         }
         
         
         var deadline = '2022-12-14T20:14:00+02:00';
         
         initializeClock('clockdiv', deadline);
         
         
         
         
         window.onload = function(){
         // load thumbnails
         photo       = document.querySelectorAll('.photo-item');
         photoLength = photo.length;
         for(i=0; i<photoLength; i++){
         photoW = photo[i].naturalWidth;
         photoH = photo[i].naturalHeight;
         if(photoW >= photoH){
         photo[i].style.height = '100px';
         }
         else{
         photo[i].style.width = '100px';
         }
         }
         conentW = photoLength * 115;
         document.getElementById('photo-container').style.width = conentW+'';
         
         // load first photo
         firstPhoto    = document.querySelectorAll('.photo-item');
         firstPhoto    = firstPhoto[0];
         firstPhotoUrl = firstPhoto.src;
         firstPhotoAlt = firstPhoto.alt;
         document.getElementById('photo-display').innerHTML = '<a href="'+firstPhotoUrl+'" id="selected-photo"><img src="'+firstPhotoUrl+'" id="selected-photo" alt=""></a>';
         }
         
         
         marginL = 0;
         function leftRight(obj){
         spaceLeft   = document.getElementById('photo-container').style.marginLeft;
         spaceLeft   = spaceLeft.replace('px', null);
         spaceLeft   = parseInt(spaceLeft);
         step        = 300;
         totalLength = document.querySelectorAll('.photo-item').length;
         totalLength *= -115;
         objId = obj.id;
         if(objId == 'left'){
         if(spaceLeft >= -step){
         marginL = 0;
         }
         else{
         marginL += step;
         }
         }
         if(objId == 'right'){
         if(spaceLeft <= totalLength + 500 + step){
         marginL = totalLength  + 500;
         }
         else{
         marginL -= step;
         }
         }
         document.getElementById('photo-container').style.marginLeft = marginL+'px';
         }
         function viewPhoto(obj){
         objUrl = obj.src;
         objAlt = obj.alt;
         document.getElementById('photo-display').innerHTML = '<a href="'+objUrl+'" id="selected-photo"><img src="'+objUrl+'" id="selected-photo" alt=""></a>';
         }
         
      </script>
   </body>
</html>

