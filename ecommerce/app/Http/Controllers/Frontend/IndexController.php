<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cat = Category::orderBy('cat_name_en','ASC') -> get();
        $slider = Slider::where('status',1) -> orderBy('id', 'DESC') -> take(5)-> get();
        $product = Product::where('status',1) -> orderBy('id', 'DESC') -> get();
        return view('frontend.home', [
            'cat' => $cat,
            'slider' => $slider,
            'product' => $product,
        ]);
    }
}
