<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
       <h3 class="new-product-title pull-left">
       @if (session() -> get('language') == 'bangla')
            নতুন পন্যসমূহ
       @else
          New Products
       @endif</h3>
       <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
          <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">
            @if (session() -> get('language') == 'bangla')
             সকল
            @else
                All
            @endif
        </a></li>
        @php
            $category = App\Models\Category::orderBy('cat_name_en','ASC') -> take(5) -> get();
        @endphp
          @foreach ($category as $cat)
              @if (session() -> get('language')  == 'bangla')
                  <li><a data-transition-type="backSlide" href="#category{{ $cat -> id }}" data-toggle="tab">{{ $cat -> cat_name_bn }}</a></li>
              @else
                  <li><a data-transition-type="backSlide" href="#category{{ $cat -> id }}" data-toggle="tab">{{ $cat -> cat_name_en }}</a></li>
              @endif
          @endforeach
       </ul>
       <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">
       <div class="tab-pane in active" id="all">
          <div class="product-slider">
             <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
               @forelse ($product as $product)
                  <div class="item item-carousel">
                      <div class="products">
                          <div class="product">
                              <div class="product-image">
                                  <div class="image">
                                      <a href="{{ url('product/single/'. $product -> id) }}"><img  src="{{ $product -> product_thumb }}" alt=""></a>
                                  </div>
                                  <!-- /.image -->
                                  @php
                                    $ammount = $product -> selling_price - $product -> discount_price;
                                    $discount = ($ammount / $product -> selling_price) * 100;
                                  @endphp
                                @if ($product -> discount_price == NULL)
                                  <div class="tag new">
                                       @if (session() -> get('language') == 'bangla')
                                            <span>নতুন</span>
                                       @else
                                            <span>NEW</span>
                                       @endif
                                 </div>
                                 @else
                                 <div class="tag sale">
                                    @if (session() -> get('language') == 'bangla')
                                    <span>{{ bn_price(round($discount)) }}%</span>
                                    @else
                                    <span>{{ round($discount) }}%</span>
                                    @endif
                                </div>
                                 @endif
                              </div>
                              <!-- /.product-image -->
                              <div class="product-info text-left">
                                  <h3 class="name"><a href="{{ url('product/single/'. $product -> id) }}">
                                  @if (session() -> get('language')  == 'bangla')
                                    {{ $product -> product_name_bn }}
                                  @else
                                    {{ $product -> product_name_en }}
                                  @endif</a></h3>
                                  <div class="rating rateit-small"></div>
                                  <div class="description"></div>
                                  @if (session() -> get('language') == 'bangla')
                                    <div class="product-price">
                                        @if ($product -> discount_price == NULL)
                                        <span class="price">৳ {{ bn_price($product -> selling_price) }}</span>
                                        @else
                                        <span class="price">৳ {{ bn_price($product -> selling_price) }}</span>
                                        <span class="price-before-discount">৳ {{ $product -> discount_price }}</span>
                                        @endif
                                    </div>
                                  @else
                                    <div class="product-price">
                                        @if ($product -> discount_price == NULL)
                                        <span class="price">TK {{ $product -> selling_price }}</span>
                                        @else
                                        <span class="price">TK {{ $product -> selling_price }}</span>
                                        <span class="price-before-discount">TK {{ $product -> discount_price }}</span>
                                        @endif
                                    </div>
                                  @endif
                                  <!-- /.product-price -->
                              </div>
                              <!-- /.product-info -->
                              <div class="cart clearfix animate-effect">
                                  <div class="action">
                                      <ul class="list-unstyled">
                                      <li class="add-cart-button btn-group">
                                          <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
                                          <i class="fa fa-shopping-cart"></i>
                                          </button>
                                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                      </li>
                                      <li class="lnk wishlist">
                                          <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist">
                                          <i class="icon fa fa-heart"></i>
                                          </a>
                                      </li>
                                      <li class="lnk">
                                          <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
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
                    @empty
                    <h5 class="text-danger">No Product Found</h5>
               @endforelse
             </div>
             <!-- /.home-owl-carousel -->
          </div>
          <!-- /.product-slider -->
       </div>
       <!-- /.tab-pane -->
        @php
            $category = App\Models\Category::orderBy('cat_name_en','ASC') -> take(5) -> get();
        @endphp
       @foreach ($category as $cat)
        <div class="tab-pane" id="category{{ $cat -> id }}">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    @php
                        $product = App\Models\Product::where('status',1) -> where('cat_id', $cat -> id) ->  orderBy('id', 'DESC') -> get();
                    @endphp
                    @forelse ($product as $product)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{ url('product/single/'. $product -> id) }}"><img  src="{{ $product -> product_thumb }}" alt=""></a>
                                        </div>
                                        <!-- /.image -->
                                    @php
                                        $ammount = $product -> selling_price - $product -> discount_price;
                                        $discount = ($ammount / $product -> selling_price) * 100;
                                    @endphp
                                    @if ($product -> discount_price == NULL)
                                      <div class="tag new">
                                           @if (session() -> get('language') == 'bangla')
                                                <span>নতুন</span>
                                           @else
                                                <span>NEW</span>
                                           @endif
                                     </div>
                                     @else
                                     <div class="tag sale">
                                        @if (session() -> get('language') == 'bangla')
                                        <span>{{ bn_price(round($discount)) }}%</span>
                                        @else
                                        <span>{{ round($discount) }}%</span>
                                        @endif
                                    </div>
                                     @endif
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{ url('product/single/'. $product -> id) }}">
                                            @if (session() -> get('language')  == 'bangla')
                                                {{ $product -> product_name_bn }}
                                            @else
                                                {{ $product -> product_name_en }}
                                            @endif
                                        </a></h3>
                                        </a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        @if (session() -> get('language') == 'bangla')
                                        <div class="product-price">
                                            @if ($product -> discount_price == NULL)
                                            <span class="price">৳ {{ bn_price($product -> selling_price) }}</span>
                                            @else
                                            <span class="price">৳ {{ bn_price($product -> selling_price) }}</span>
                                            <span class="price-before-discount">৳ {{ $product -> discount_price }}</span>
                                            @endif
                                        </div>
                                      @else
                                        <div class="product-price">
                                            @if ($product -> discount_price == NULL)
                                            <span class="price">TK {{ $product -> selling_price }}</span>
                                            @else
                                            <span class="price">TK {{ $product -> selling_price }}</span>
                                            <span class="price-before-discount">TK {{ $product -> discount_price }}</span>
                                            @endif
                                        </div>
                                      @endif
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </li>
                                            <li class="lnk wishlist">
                                                <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist">
                                                <i class="icon fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="lnk">
                                                <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
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
                @empty
                        @if (session() -> get('language') == 'bangla')
                            <h5 class="text-danger">পন্য পাওয়া যায়নি</h5>
                        @else
                            <h5 class="text-danger">No Product Found</h5>
                        @endif
                @endforelse
                    <!-- /.item -->
                </div>
            <!-- /.home-owl-carousel -->
            </div>
            <!-- /.product-slider -->
        </div>
       @endforeach
       <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
 </div>
