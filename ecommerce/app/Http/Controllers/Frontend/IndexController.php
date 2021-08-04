<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cat = Category::orderBy('cat_name_en','ASC') -> get();
        $slider = Slider::where('status',1) -> orderBy('id', 'DESC') -> take(5)-> get();
        $product = Product::where('status',1) -> orderBy('id', 'DESC') -> get();
        $featured_product = Product::where('status',1) -> where('featured',1) -> orderBy('id', 'DESC') -> get();
        $hot_deals = Product::where('status',1) -> where('hot_deals',1) -> orderBy('id', 'DESC') -> take(3) -> get();
        $special_offers = Product::where('status',1) -> where('special_offer',1) -> orderBy('id', 'DESC') -> take(3) -> get();
        $special_deals = Product::where('status',1) -> where('special_deals',1) -> orderBy('id', 'DESC') -> take(3) -> get();
        // Skip category wise product view
        $skip_cat_0 = Category::skip(0) -> first();
        $skip_product_0 = Product::where('status', 1) -> where('cat_id', $skip_cat_0 -> id) -> orderBy('id', 'DESC') -> get();
        // Skip brand wise product view
        $skip_brand_0 = Brand::skip(2) -> first();
        $skip_brand_product_0 = Product::where('status', 1) -> where('brand_id', $skip_brand_0 -> id) -> orderBy('id', 'DESC') -> get();


        return view('frontend.home', [
            'cat' => $cat,
            'slider' => $slider,
            'product' => $product,
            'featureds' => $featured_product,
            'hot_deals' => $hot_deals,
            'special_offers' => $special_offers,
            'special_deals' => $special_deals,
            'skip_cat_0' => $skip_cat_0,
            'skip_product_0' => $skip_product_0,
            'skip_brand_0' => $skip_brand_0,
            'skip_brand_product_0' => $skip_brand_product_0,
        ]);
    }

    // Single page view
    public function singleProduct($id,$slug){
        $single_product = Product::find($id);
        // product color
        $product_color_en = explode(',', $single_product -> product_color_en);
        $product_color_bn = explode(',', $single_product -> product_color_bn);
        // product size
        $product_size_en = explode(',', $single_product -> product_size_en);
        $product_size_bn = explode(',', $single_product -> product_size_bn);

        $multi_img = MultiImage::where('product_id', $id) -> get();
        $cat_id = $single_product -> cat_id;
        $reletedProduct = Product::where('cat_id', $cat_id) -> where('id','!=', $id) -> orderBy('id', 'DESC') -> get();

        return view('frontend.single-product',[
            'product' => $single_product,
            'multi_img' => $multi_img,
            'product_color_en' => $product_color_en,
            'product_color_bn' => $product_color_bn,
            'product_size_en' => $product_size_en,
            'product_size_bn' => $product_size_bn,
            'reletedProduct' => $reletedProduct,
        ]);
    }

    // Tag wise product view
    public function tagWiseProduct($tag){
        $products = Product::where('status', 1) -> where('product_tags_en', $tag) -> orWhere('product_tags_bn', $tag) -> orderBy('id', 'DESC') -> paginate(12);
        return view('frontend.tag-productView', compact('products'));
    }
    // Sub sub category wise product view
    public function subsubcatWiseProduct($id, $slug){
        $products = Product::where('status', 1) -> where('subsubcat_id', $id) -> orderBy('id', 'DESC') -> paginate(12);
        return view('frontend.subsubcat-productView', compact('products'));
    }
    // category wise product view
    public function catWiseProduct($id, $slug){
        $products = Product::where('status', 1) -> where('cat_id', $id) -> orderBy('id', 'DESC') -> paginate(12);
        return view('frontend.cat-productView', compact('products'));
    }

    // Product view with cart modal ajax

    public function productViewCartModal($id){
        $product = Product::with('cat','brand')->find($id);
        // product color
        $product_color = explode(',', $product -> product_color_en);
        // product size
        $product_size = explode(',', $product -> product_size_en);

        return response() -> json(array(
            'product' => $product,
            'product_color' => $product_color,
            'product_size' => $product_size,
        ));

    }
}
