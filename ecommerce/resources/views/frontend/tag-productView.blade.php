@extends('frontend.layouts.app')
@section('title')
    Dokan - Tags search result
@endsection
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
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
   <div class="container">
      <div class="breadcrumb-inner">
         <ul class="list-inline list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Clothing</a></li>
            <li class='active'>Floral Print Buttoned</li>
         </ul>
      </div>
      <!-- /.breadcrumb-inner -->
   </div>
   <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
   <div class='container'>
      <div class='row single-product'>
         @include('frontend/layouts/component/singlePageSidebar/sidebar')
         <!-- /.sidebar -->
         <div class='col-md-9'>
            <div class="clearfix filters-container m-t-10">
                <div class="row">
                   <div class="col col-sm-6 col-md-2">
                      <div class="filter-tabs">
                         <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                            <li class="active">
                               <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a>
                            </li>
                            <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                         </ul>
                      </div>
                      <!-- /.filter-tabs -->
                   </div>
                   <!-- /.col -->
                   <div class="col col-sm-12 col-md-6">
                      <div class="col col-sm-3 col-md-6 no-padding">
                         <div class="lbl-cnt">
                            <span class="lbl">Sort by</span>
                            <div class="fld inline">
                               <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                  <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                  Position <span class="caret"></span>
                                  </button>
                                  <ul role="menu" class="dropdown-menu">
                                     <li role="presentation"><a href="#">position</a></li>
                                     <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                     <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                     <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                  </ul>
                               </div>
                            </div>
                            <!-- /.fld -->
                         </div>
                         <!-- /.lbl-cnt -->
                      </div>
                      <!-- /.col -->
                      <div class="col col-sm-3 col-md-6 no-padding">
                         <div class="lbl-cnt">
                            <span class="lbl">Show</span>
                            <div class="fld inline">
                               <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                  <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                  1 <span class="caret"></span>
                                  </button>
                                  <ul role="menu" class="dropdown-menu">
                                     <li role="presentation"><a href="#">1</a></li>
                                     <li role="presentation"><a href="#">2</a></li>
                                     <li role="presentation"><a href="#">3</a></li>
                                     <li role="presentation"><a href="#">4</a></li>
                                     <li role="presentation"><a href="#">5</a></li>
                                     <li role="presentation"><a href="#">6</a></li>
                                     <li role="presentation"><a href="#">7</a></li>
                                     <li role="presentation"><a href="#">8</a></li>
                                     <li role="presentation"><a href="#">9</a></li>
                                     <li role="presentation"><a href="#">10</a></li>
                                  </ul>
                               </div>
                            </div>
                            <!-- /.fld -->
                         </div>
                         <!-- /.lbl-cnt -->
                      </div>
                      <!-- /.col -->
                   </div>
                   <!-- /.col -->
                   <!-- /.col -->
                </div>
                <!-- /.row -->
             </div>
             <div class="search-result-container ">
                <div id="myTabContent" class="tab-content category-list">
                   <div class="tab-pane active " id="grid-container">
                      <div class="category-product">
                         <div class="row">
                            @foreach ($products as $product)
                                <div class="col-sm-6 col-md-4 wow fadeInUp">
                                    <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                @if (session() -> get('language') == 'bangla')
                                                    <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_bn) }}"><img  src="{{ asset($product -> product_thumb) }}" alt=""></a>
                                                @else
                                                    <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_en) }}"><img  src="{{ asset($product -> product_thumb) }}" alt=""></a>
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
                                                    <i class="fa fa-signal"></i>
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
                            @endforeach
                         </div>
                         <!-- /.row -->
                      </div>
                      <!-- /.category-product -->
                   </div>
                   <!-- /.tab-pane -->
                   <div class="tab-pane "  id="list-container">
                      <div class="category-product">
                        @foreach ($products as $product)
                            <div class="category-product-inner wow fadeInUp">
                                <div class="products">
                                <div class="product-list product">
                                    <div class="row product-list-row">
                                        <div class="col col-sm-4 col-lg-4">
                                            <div class="product-image">
                                            <div class="image">
                                                @if (session() -> get('language') == 'bangla')
                                                    <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_bn) }}"><img  src="{{ asset($product -> product_thumb) }}" alt=""></a>
                                                @else
                                                    <a href="{{ url('product/single/'. $product -> id.'/'.$product -> product_slug_en) }}"><img  src="{{ asset($product -> product_thumb) }}" alt=""></a>
                                                @endif
                                            </div>
                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col col-sm-8 col-lg-8">
                                            <div class="product-info">
                                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price">
                                                <span class="price">
                                                $450.99					</span>
                                                <span class="price-before-discount">$ 800</span>
                                            </div>
                                            <!-- /.product-price -->
                                            <div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
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
                                                        <i class="fa fa-signal"></i>
                                                        </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                            </div>
                                            <!-- /.product-info -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-list-row -->
                                    <div class="tag new"><span>new</span></div>
                                </div>
                                <!-- /.product-list -->
                                </div>
                                <!-- /.products -->
                            </div>
                        @endforeach
                         <!-- /.category-product-inner -->
                      </div>
                      <!-- /.category-product -->
                   </div>
                   <!-- /.tab-pane #list-container -->
                </div>
                <!-- /.tab-content -->
                <div class="clearfix filters-container">
                   <div class="text-right">
                      <div class="pagination-container">
                         <ul class="list-inline list-unstyled">
                            {{ $products -> links() }}
                         </ul>
                         <!-- /.list-inline -->
                      </div>
                      <!-- /.pagination-container -->
                   </div>
                   <!-- /.text-right -->
                </div>
                <!-- /.filters-container -->
             </div>
             <!-- /.search-result-container -->
         </div>
         <!-- /.col -->
         <div class="clearfix"></div>
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</div>
<!-- /.body-content -->
@endsection
