<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">
        @if (session() -> get('language') == 'bangla')
            {{ $skip_brand_0 -> brand_name_bn }}
        @else
             {{ $skip_brand_0 -> brand_name_en }}
        @endif
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


        @forelse ($skip_brand_product_0 as $product)
        <div class="item item-carousel">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image">
                          @if (session() -> get('language') == 'bangla')
                              <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_bn) }}"><img  src="{{ $product -> product_thumb }}" alt=""></a>
                          @else
                             <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_en) }}"><img  src="{{ $product -> product_thumb }}" alt=""></a>
                          @endif

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
                        <div class="description"></div>
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
 </section>
