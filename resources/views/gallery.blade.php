<!DOCTYPE html>
<html class="" lang="en">
   <head>
      <title>Gallery | Plantly</title>
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
                  <p>
                     <svg width="30px" height="30px">
                        <use xlink:href="#checked"></use>
                     </svg>
                  </p>
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
                  <p>
                     <svg width="30px" height="30px">
                        <use xlink:href="#checked"></use>
                     </svg>
                  </p>
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
      <!-- portfolio page  -->
      <div id="portfolio_4_page" class="portfolio-4-page portfolio animate__animated animate__fadeInUp">
         <div class="sp_header bg-white p-3">
            <div class="container custom_container ">
               <div class="row ">
                  <div class="col-12 ">
                     <ul>
                        <li class="d-inline-block font-weight-bolder"><a href="index.html">home</a></li>
                        <li class="d-inline-block hr_ font-weight-bolder"><a href="#">portfolio</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container custom_container">
            <div class="row">
               <div class="col-12">
                  <div class="title_outer">
                     <h1 class="mb-3 d-inline-block pb-3 position-relative border-bottom h1_">portfolio</h1>
                  </div>
                  <!-- title_outer -->
               </div>
               <!-- col-12 -->
            </div>
            <!-- row -->
            <div class="row ">
               <div class="col-12 text-center mb-3">
                  <div id="myBtnContainer">
                     <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                     <button class="btn" onclick="filterSelection('fashion')"> fashion</button>
                     <button class="btn" onclick="filterSelection('nature')"> nature</button>
                     <button class="btn" onclick="filterSelection('student')"> student</button>
                  </div>
               </div>
            </div>
            <!-- Portfolio Gallery Grid -->
            <div class="row">
               <div class="column fashion">
                  <img src="assets/img/portfolio/portfolio_1.jpg" class="mx-auto d-block img-fluid" alt="portfolio_1">
               </div>
               <div class="column student">
                  <img src="assets/img/portfolio/portfolio_2.jpg" class="mx-auto d-block img-fluid"  alt="portfolio_2">
               </div>
               <div class="column student">
                  <img src="assets/img/portfolio/portfolio_3.jpg" class="mx-auto d-block img-fluid" alt="portfolio_3">
               </div>
               <div class="column student">
                  <img src="assets/img/portfolio/portfolio_4.jpg" class="mx-auto d-block img-fluid" alt="portfolio_4">
               </div>
               <div class="column student">
                  <img src="assets/img/portfolio/portfolio_5.jpg" class="mx-auto d-block img-fluid" alt="portfolio_5">
               </div>
               <div class="column nature">
                  <img src="assets/img/portfolio/portfolio_6.jpg" class="mx-auto d-block img-fluid" alt="portfolio_6">
               </div>
               <div class="column nature">
                  <img src="assets/img/portfolio/portfolio_7.jpg" class="mx-auto d-block img-fluid" alt="portfolio_7">
               </div>
               <div class="column fashion">
                  <img src="assets/img/portfolio/portfolio_8.jpg" class="mx-auto d-block img-fluid" alt="portfolio_8">
               </div>
               <div class="column fashion">
                  <img src="assets/img/portfolio/portfolio_9.jpg" class="mx-auto d-block img-fluid" alt="portfolio_9">
               </div>
               <!-- END GRID -->
            </div>
            <!-- END MAIN -->
         </div>
         <!-- container custom_container -->
      </div>
      <!-- portfolio_2_page -->
      <!-- portfolio page -->
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
      <script>
         filterSelection("all")
         function filterSelection(c) {
           var x, i;
           x = document.getElementsByClassName("column");
           if (c == "all") c = "";
           for (i = 0; i < x.length; i++) {
             w3RemoveClass(x[i], "show");
             if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
           }
         }
         function w3AddClass(element, name) {
           var i, arr1, arr2;
           arr1 = element.className.split(" ");
           arr2 = name.split(" ");
           for (i = 0; i < arr2.length; i++) {
             if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
           }
         }
         
         function w3RemoveClass(element, name) {
           var i, arr1, arr2;
           arr1 = element.className.split(" ");
           arr2 = name.split(" ");
           for (i = 0; i < arr2.length; i++) {
             while (arr1.indexOf(arr2[i]) > -1) {
               arr1.splice(arr1.indexOf(arr2[i]), 1);     
             }
           }
           element.className = arr1.join(" ");
         }
         // Add active class to the current button (highlight it)
         var btnContainer = document.getElementById("myBtnContainer");
         var btns = btnContainer.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
           btns[i].addEventListener("click", function(){
             var current = document.getElementsByClassName("active");
             current[0].className = current[0].className.replace(" active", "");
             this.className += " active";
           });
         }
         
      </script>
   </body>
</html>

