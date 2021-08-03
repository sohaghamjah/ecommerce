<div class='col-md-3 sidebar'>
    <div class="sidebar-module-container">
       <div class="home-banner outer-top-n">
          <img src="{{  asset('assets/')  }}/frontend/images/banners/LHS-banner.jpg" alt="Image">
       </div>

    <!-- ============================================== HOT DEALS ============================================== -->
    <br>
    @php
        $hot_deals = App\Models\Product::where('status',1) -> where('hot_deals',1) -> orderBy('id', 'DESC') -> take(3) -> get();
    @endphp
    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
        <h3 class="section-title">hot deals</h3>
        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            @forelse ($hot_deals as $product)
                 <div class="item">
                     <div class="products">
                     <div class="hot-deal-wrapper">
                         <div class="image">
                             @if (session() -> get('language') == 'bangla')
                             <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_bn) }}"><img  src="{{ asset($product -> product_thumb) }}" alt=""></a>
                             @else
                             <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_en) }}"><img  src="{{ asset($product -> product_thumb) }}" alt=""></a>
                             @endif
                         </div>

                     @php
                         $ammount = $product -> selling_price - $product -> discount_price;
                         $discount = ($ammount / $product -> selling_price) * 100;
                       @endphp
                         @if ($product -> discount_price == NULL)
                         <div class="sale-offer-tag">
                             @if (session() -> get('language') == 'bangla')
                                     <span>নতুন</span>
                             @else
                                     <span>NEW</span>
                             @endif
                         </div>
                         @else
                         <div class="sale-offer-tag">
                             @if (session() -> get('language') == 'bangla')
                             <span>{{ bn_price(round($discount)) }}% <br>off</span>
                             @else
                             <span> {{ round($discount) }}% <br>off</span>
                             @endif
                         </div>
                         @endif


                     </div>
                     <!-- /.hot-deal-wrapper -->
                     <div class="product-info text-left m-t-20">
                         @if (session() -> get('language') == 'bangla')
                           <h3 class="name"><a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_bn) }}">
                           @if (session() -> get('language')  == 'bangla')
                             {{ $product -> product_name_bn }}
                           @else
                             {{ $product -> product_name_en }}
                           @endif</a></h3>
                       @else
                           <h3 class="name"><a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_en) }}">
                           @if (session() -> get('language')  == 'bangla')
                             {{ $product -> product_name_bn }}
                           @else
                             {{ $product -> product_name_en }}
                           @endif</a></h3>
                       @endif

                         <div class="rating rateit-small"></div>
                         @if (session() -> get('language') == 'bangla')
                           <div class="product-price">
                               @if ($product -> discount_price == NULL)
                               <span class="price">৳ {{ bn_price($product -> selling_price) }}</span>
                               @else
                               <span class="price">৳ {{ bn_price($product -> discount_price) }}</span>
                               <span class="price-before-discount">৳ {{ $product ->  selling_price }}</span>
                               @endif
                           </div>
                         @else
                           <div class="product-price">
                               @if ($product -> discount_price == NULL)
                               <span class="price">TK {{ $product -> selling_price }}</span>
                               @else
                               <span class="price">TK {{ $product ->  discount_price }}</span>
                               <span class="price-before-discount">TK {{ $product -> selling_price }}</span>
                               @endif
                           </div>
                         @endif
                         <!-- /.product-price -->
                     </div>
                     <!-- /.product-info -->
                     <div class="cart clearfix animate-effect">
                         <div class="action">
                             <div class="add-cart-button btn-group">
                                 <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                 <i class="fa fa-shopping-cart"></i>
                                 </button>
                                 <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                             </div>
                         </div>
                         <!-- /.action -->
                     </div>
                     <!-- /.cart -->
                     </div>
                 </div>
            @empty
             <h5 class="text-danger">No Product Found</h5>
            @endforelse

        </div>
        <!-- /.sidebar-widget -->
     </div>
     <!-- ============================================== HOT DEALS: END ============================================== -->

    <!-- ============================================== PRODUCT TAGS ============================================== -->
    <br><br>
    @php
        $tags_en = App\Models\Product::groupBy('product_tags_en') -> select('product_tags_en') -> get();
        $tags_bn = App\Models\Product::groupBy('product_tags_bn') -> select('product_tags_bn') -> get();
    @endphp
    <div class="sidebar-widget product-tag wow fadeInUp">
    <h3 class="section-title">Product tags</h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="tag-list">
            @if (session() -> get('language') == 'bangla')
                @foreach ($tags_bn as $tag_bn)
                <a class="item" title="Phone" href="{{ url('product/tags/search/'. $tag_bn -> product_tags_bn) }}">{{ $tag_bn -> product_tags_bn }}</a>
                @endforeach
            @else
                @foreach ($tags_en as $tag_en)
                    <a class="item" title="Phone" href="{{ url('product/tags/search/'. $tag_en -> product_tags_en) }}">{{ $tag_en -> product_tags_en }}</a>
                @endforeach
            @endif
        </div>
        <!-- /.tag-list -->
    </div>
    <!-- /.sidebar-widget-body -->
    </div>

       <!-- ==============================================
          <!-- ============================================== NEWSLETTER ============================================== -->
       <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
          <h3 class="section-title">Newsletters</h3>
          <div class="sidebar-widget-body outer-top-xs">
             <p>Sign Up for Our Newsletter!</p>
             <form role="form">
                <div class="form-group">
                   <label class="sr-only" for="exampleInputEmail1">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
                </div>
                <button class="btn btn-primary">Subscribe</button>
             </form>
          </div>
          <!-- /.sidebar-widget-body -->
       </div>
       <!-- /.sidebar-widget -->
       <!-- ============================================== NEWSLETTER: END ============================================== -->
       <!-- ============================================== Testimonials============================================== -->
       <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
          <div id="advertisement" class="advertisement">
             <div class="item">
                <div class="avatar"><img src="{{  asset('assets/')  }}/frontend/images/testimonials/member1.png" alt="Image"></div>
                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                <div class="clients_author">John Doe	<span>Abc Company</span>	</div>
                <!-- /.container-fluid -->
             </div>
             <!-- /.item -->
             <div class="item">
                <div class="avatar"><img src="{{  asset('assets/')  }}/frontend/images/testimonials/member3.png" alt="Image"></div>
                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                <div class="clients_author">Stephen Doe	<span>Xperia Designs</span>	</div>
             </div>
             <!-- /.item -->
             <div class="item">
                <div class="avatar"><img src="{{  asset('assets/')  }}/frontend/images/testimonials/member2.png" alt="Image"></div>
                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                <div class="clients_author">Saraha Smith	<span>Datsun &amp; Co</span>	</div>
                <!-- /.container-fluid -->
             </div>
             <!-- /.item -->
          </div>
          <!-- /.owl-carousel -->
       </div>
       <!-- ============================================== Testimonials: END ============================================== -->
    </div>
 </div>
