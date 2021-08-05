<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    // Add to cart
    public function addToCart(Request $request, $id){

        $product = Product::find($id);

        if($product -> discount_price == NULL){
            Cart::add([
                'id' => $id,
                'name' => $request -> name,
                'qty' => $request -> qty,
                'price' => $product -> selling_price,
                'weight' => 1,
                'options' => [
                    'color' => $request -> color,
                    'size' => $request -> size,
                    'image' => $product -> product_thumb,
                ],
            ]);

            return response() -> json('success');
        }else{
            Cart::add([
                'id' => $id,
                'name' => $request -> name,
                'qty' => $request -> qty,
                'price' => $product -> discount_price,
                'weight' => 1,
                'options' => [
                    'color' => $request -> color,
                    'size' => $request -> size,
                    'image' => $product -> product_thumb,
                ],
            ]);

            return response() -> json('success');
        }
    }

    // Mini cart show

    public function miniCartShow(){
        $cart = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response() -> json(array(
            'carts' => $cart,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,
        ));
    }
}
