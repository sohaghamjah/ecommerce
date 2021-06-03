@extends('frontend.layouts.app')
@section('title', 'eCommerce System')
@section('content')
<div class="row">
@php
    function bn_price($str){
    $en = array(0,1,2,3,4,5,6,7,8,9);
    $bn = array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
    $str = str_replace($en, $bn, $str);
    return $str;
    }
@endphp
    <!-- ============================================== SIDEBAR ============================================== -->
    @include('frontend.layouts.component.home.sidebar')
    <!-- /.sidemenu-holder -->
    <!-- ============================================== SIDEBAR : END ============================================== -->
    <!-- ============================================== CONTENT ============================================== -->
    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
       <!-- ========================================== SECTION – HERO ========================================= -->
        @include('frontend.layouts.component.home.slider')
       <!-- ============================================== INFO BOXES : END ============================================== -->
       <!-- ============================================== SCROLL TABS ============================================== -->
        @include('frontend.layouts.component.home.newProduct')
       <!-- /.scroll-tabs -->
       <!-- ============================================== SCROLL TABS : END ============================================== -->
       <!-- ============================================== WIDE PRODUCTS ============================================== -->
       <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
             <div class="col-md-7 col-sm-7">
                <div class="wide-banner cnt-strip">
                   <div class="image">
                      <img class="img-responsive" src="assets/frontend/images/banners/home-banner1.jpg" alt="">
                   </div>
                </div>
                <!-- /.wide-banner -->
             </div>
             <!-- /.col -->
             <div class="col-md-5 col-sm-5">
                <div class="wide-banner cnt-strip">
                   <div class="image">
                      <img class="img-responsive" src="assets/frontend/images/banners/home-banner2.jpg" alt="">
                   </div>
                </div>
                <!-- /.wide-banner -->
             </div>
             <!-- /.col -->
          </div>
          <!-- /.row -->
       </div>
       <!-- /.wide-banners -->
       <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
       <!-- ============================================== FEATURED PRODUCTS ============================================== -->
       <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Featured products</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p5.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag hot"><span>hot</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p6.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/blank.gif" data-echo="assets/frontend/images/products/p7.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p8.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag hot"><span>hot</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p9.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p10.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->
       </section>
       <!-- /.section -->
       <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
       <!-- ============================================== WIDE PRODUCTS ============================================== -->
       <div class="wide-banners wow fadeInUp outer-bottom-xs">
          <div class="row">
             <div class="col-md-12">
                <div class="wide-banner cnt-strip">
                   <div class="image">
                      <img class="img-responsive" src="assets/frontend/images/banners/home-banner.jpg" alt="">
                   </div>
                   <div class="strip strip-text">
                      <div class="strip-inner">
                         <h2 class="text-right">New Mens Fashion<br>
                            <span class="shopping-needs">Save up to 40% off</span>
                         </h2>
                      </div>
                   </div>
                   <div class="new-label">
                      <div class="text">NEW</div>
                   </div>
                   <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
             </div>
             <!-- /.col -->
          </div>
          <!-- /.row -->
       </div>
       <!-- /.wide-banners -->
       <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
       <!-- ============================================== BEST SELLER ============================================== -->
       <div class="best-deal wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">Best seller</h3>
          <div class="sidebar-widget-body outer-top-xs">
             <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                <div class="item">
                   <div class="products best-product">
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p20.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p21.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="products best-product">
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p22.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p23.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="products best-product">
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p24.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p25.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="products best-product">
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p26.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                      <div class="product">
                         <div class="product-micro">
                            <div class="row product-micro-row">
                               <div class="col col-xs-5">
                                  <div class="product-image">
                                     <div class="image">
                                        <a href="#">
                                        <img src="assets/frontend/images/products/p27.jpg" alt="">
                                        </a>
                                     </div>
                                     <!-- /.image -->
                                  </div>
                                  <!-- /.product-image -->
                               </div>
                               <!-- /.col -->
                               <div class="col2 col-xs-7">
                                  <div class="product-info">
                                     <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                     <div class="rating rateit-small"></div>
                                     <div class="product-price">
                                        <span class="price">
                                        $450.99				</span>
                                     </div>
                                     <!-- /.product-price -->
                                  </div>
                               </div>
                               <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                         </div>
                         <!-- /.product-micro -->
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- /.sidebar-widget-body -->
       </div>
       <!-- /.sidebar-widget -->
       <!-- ============================================== BEST SELLER : END ============================================== -->
       <!-- ============================================== BLOG SLIDER ============================================== -->
       <section class="section latest-blog outer-bottom-vs wow fadeInUp">
          <h3 class="section-title">latest form blog</h3>
          <div class="blog-slider-container outer-top-xs">
             <div class="owl-carousel blog-slider custom-carousel">
                <div class="item">
                   <div class="blog-post">
                      <div class="blog-post-image">
                         <div class="image">
                            <a href="blog.html"><img src="assets/frontend/images/blog-post/post1.jpg" alt=""></a>
                         </div>
                      </div>
                      <!-- /.blog-post-image -->
                      <div class="blog-post-info text-left">
                         <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                         <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                         <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                         <a href="#" class="lnk btn btn-primary">Read more</a>
                      </div>
                      <!-- /.blog-post-info -->
                   </div>
                   <!-- /.blog-post -->
                </div>
                <!-- /.item -->
                <div class="item">
                   <div class="blog-post">
                      <div class="blog-post-image">
                         <div class="image">
                            <a href="blog.html"><img src="assets/frontend/images/blog-post/post2.jpg" alt=""></a>
                         </div>
                      </div>
                      <!-- /.blog-post-image -->
                      <div class="blog-post-info text-left">
                         <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                         <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                         <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                         <a href="#" class="lnk btn btn-primary">Read more</a>
                      </div>
                      <!-- /.blog-post-info -->
                   </div>
                   <!-- /.blog-post -->
                </div>
                <!-- /.item -->
                <!-- /.item -->
                <div class="item">
                   <div class="blog-post">
                      <div class="blog-post-image">
                         <div class="image">
                            <a href="blog.html"><img src="assets/frontend/images/blog-post/post1.jpg" alt=""></a>
                         </div>
                      </div>
                      <!-- /.blog-post-image -->
                      <div class="blog-post-info text-left">
                         <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                         <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                         <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                         <a href="#" class="lnk btn btn-primary">Read more</a>
                      </div>
                      <!-- /.blog-post-info -->
                   </div>
                   <!-- /.blog-post -->
                </div>
                <!-- /.item -->
                <div class="item">
                   <div class="blog-post">
                      <div class="blog-post-image">
                         <div class="image">
                            <a href="blog.html"><img src="assets/frontend/images/blog-post/post2.jpg" alt=""></a>
                         </div>
                      </div>
                      <!-- /.blog-post-image -->
                      <div class="blog-post-info text-left">
                         <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                         <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                         <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                         <a href="#" class="lnk btn btn-primary">Read more</a>
                      </div>
                      <!-- /.blog-post-info -->
                   </div>
                   <!-- /.blog-post -->
                </div>
                <!-- /.item -->
                <div class="item">
                   <div class="blog-post">
                      <div class="blog-post-image">
                         <div class="image">
                            <a href="blog.html"><img src="assets/frontend/images/blog-post/post1.jpg" alt=""></a>
                         </div>
                      </div>
                      <!-- /.blog-post-image -->
                      <div class="blog-post-info text-left">
                         <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                         <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                         <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                         <a href="#" class="lnk btn btn-primary">Read more</a>
                      </div>
                      <!-- /.blog-post-info -->
                   </div>
                   <!-- /.blog-post -->
                </div>
                <!-- /.item -->
             </div>
             <!-- /.owl-carousel -->
          </div>
          <!-- /.blog-slider-container -->
       </section>
       <!-- /.section -->
       <!-- ============================================== BLOG SLIDER : END ============================================== -->
       <!-- ============================================== FEATURED PRODUCTS ============================================== -->
       <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">New Arrivals</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p19.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p28.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p30.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag hot"><span>hot</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p1.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag hot"><span>hot</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p2.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
             <div class="item item-carousel">
                <div class="products">
                   <div class="product">
                      <div class="product-image">
                         <div class="image">
                            <a href="detail.html"><img  src="assets/frontend/images/products/p3.jpg" alt=""></a>
                         </div>
                         <!-- /.image -->
                         <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                         <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                         <div class="rating rateit-small"></div>
                         <div class="description"></div>
                         <div class="product-price">
                            <span class="price">
                            $450.99				</span>
                            <span class="price-before-discount">$ 800</span>
                         </div>
                         <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                         <div class="action">
                            <ul class="list-unstyled">
                               <li class="add-cart-button btn-group">
                                  <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                  </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                               </li>
                               <li class="lnk wishlist">
                                  <a class="add-to-cart" href="detail.html" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                  </a>
                               </li>
                               <li class="lnk">
                                  <a class="add-to-cart" href="detail.html" title="Compare">
                                  <i class="fa fa-signal" aria-hidden="true"></i>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                   </div>
                   <!-- /.product -->
                </div>
                <!-- /.products -->
             </div>
             <!-- /.item -->
          </div>
          <!-- /.home-owl-carousel -->
       </section>
       <!-- /.section -->
       <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
    </div>
    <!-- /.homebanner-holder -->
    <!-- ============================================== CONTENT : END ============================================== -->
 </div>
@endsection
