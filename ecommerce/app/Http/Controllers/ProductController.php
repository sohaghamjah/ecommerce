<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Product;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use PhpParser\Parser\Multiple;

class ProductController extends Controller
{
    /**
     * View add product page
     *
     * @return void
     */
    public function index(){
        $cat = Category::latest() -> get();
        $brand = Brand::latest() -> get();
        return view('admin.product.create', compact('cat', 'brand'));
    }

    /**
     * Get sub sub category
     */
    public function subSubCatAjax($id){
        $susubbcat = SubSubCategory::where('subcat_id', $id) -> orderBy('sub_sub_cat_name_en', 'ASC') -> get();
        return json_encode($susubbcat);
    }
    /**
     * Product Store
     */

    public function store(Request $request){
        $request -> validate([
            'brand_id'         => 'required',
            'cat_id'           => 'required',
            'subcat_id'        => 'required',
            'subsubcat_id'     => 'required',
            'product_name_en'  => 'required',
            'product_name_bn'  => 'required',
            'product_code'     => 'required',
            'product_qty'      => 'required',
            'product_tags_en'  => 'required',
            'product_tags_bn'  => 'required',
            'product_size_en'  => 'required',
            'product_size_bn'  => 'required',
            'product_color_en' => 'required',
            'product_color_bn' => 'required',
            'selling_price'    => 'required',
            'product_thumb'    => 'required',
            'multi_img'      => 'required',
            'short_desc_en'    => 'required',
            'short_desc_bn'    => 'required',
            'long_desc_en'     => 'required',
            'long_desc_bn'     => 'required',
        ],[
            'brand_id.required'         => 'Slect Brand Name',
            'cat_id.required'           => 'Select Category Name',
            'subcat_id.required'        => 'Select Sub Category Name',
            'subsubcat_id.required'     => 'Select Sub Sub Category Name',
            'product_name_en.required'  => 'Enter Product Name English',
            'product_name_bn.required'  => 'Enter Product Name Bangla',
            'product_code.required'     => 'Enter Product Code',
            'product_qty.required'      => 'Enter Product Quantity',
            'product_tags_en.required'  => 'Enter Product Tags English',
            'product_tags_bn.required'  => 'Enter Product Tags Bangla',
            'product_size_en.required'  => 'Enter Product Size English',
            'product_size_bn.required'  => 'Enter Product Size Bangla',
            'product_color_en.required' => 'Enter Product Color English',
            'product_color_bn.required' => 'Enter Product Color Bangla',
            'selling_price.required'    => 'Enter Product Price',
            'product_thumb.required'    => 'Enter Product Thumbnail',
            'multi_img.required'      => 'Enter Product Multi Image',
            'short_desc_en.required'    => 'Enter Product Short Description English',
            'short_desc_bn.required'    => 'Enter Product Short Description Bangla',
            'long_desc_en.required'     => 'Enter Product Long Description English',
            'long_desc_bn.required'     => 'Enter Product Long Description Bangla',
        ]);

        $photo = $request -> product_thumb;
        $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
        Image::make($photo)->resize(917, 1000) -> save('assets/media/backend/product/thumb/'.$photo_name);
        $save_url = 'assets/media/backend/product/thumb/'.$photo_name;

        $product_id = Product::insertGetId([
            'brand_id'         => $request -> brand_id,
            'cat_id'           => $request -> cat_id,
            'subcat_id'        => $request -> subcat_id,
            'subsubcat_id'     => $request -> subsubcat_id,
            'product_name_en'  => $request -> product_name_en,
            'product_name_bn'  => $request -> product_name_bn,
            'product_slug_en'  => Str::slug($request -> product_name_en),
            'product_slug_bn'  => str_replace(' ', '-', $request -> product_name_bn),
            'product_code'     => $request -> product_code,
            'product_qty'      => $request -> product_qty,
            'product_qty'      => $request -> product_qty,
            'product_tags_en'  => $request -> product_tags_en,
            'product_tags_bn'  => $request -> product_tags_bn,
            'product_size_en'  => $request -> product_size_en,
            'product_size_bn'  => $request -> product_size_bn,
            'product_color_en' => $request -> product_color_en,
            'product_color_bn' => $request -> product_color_bn,
            'selling_price'    => $request -> selling_price,
            'discount_price'   => $request -> discount_price,
            'shor_des_en'      => $request -> short_desc_en,
            'shor_des_bn'      => $request -> short_desc_bn,
            'long_des_en'      => $request -> long_desc_en,
            'long_des_bn'      => $request -> long_desc_bn,
            'product_thumb'    => $save_url,
            'hot_deals'        => $request -> hot_deals,
            'featured'         => $request -> featured,
            'special_offer'    => $request -> special_offer,
            'special_deals'    => $request -> special_deals,
            'status'           => 1,
        ]);

        // Multiple image upload
        $images = $request -> multi_img;
        foreach($images as $image){
            $image_name = md5(time().rand()).'.'.$image -> getClientOriginalExtension();
            Image::make($image)->resize(917, 1000) -> save('assets/media/backend/product/multi_img/'.$image_name);
            $save_url = 'assets/media/backend/product/multi_img/'.$image_name;
            MultiImage::create([
                'product_id'  => $product_id,
                'photo' => $save_url,
            ]);
        }

        return redirect()->back()->with('toast_success', 'Product has been uploaded successfull');
    }

    // ********************** Product Management *********************

    /**
     * Product Management page show
     *
     * @return void
     */
    public function manageProduct(){
        $product = Product::latest() -> get();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Product Edit
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id){
        $cat = Category::latest() -> get();
        $brand = Brand::latest() -> get();
        $product = Product::find($id);
        $multiImg = MultiImage::where('product_id', $id) -> latest() -> get();
        return view('admin.product.edit', compact('product', 'cat', 'brand', 'multiImg'));
    }

    /**
     * Product update
     *
     * @param [type] $id
     * @return void
     */
    public function update(Request $request){
        $id = $request -> id;
        $update = Product::find($id);

        $request -> validate([
            'brand_id'         => 'required',
            'cat_id'           => 'required',
            'subcat_id'        => 'required',
            'subsubcat_id'     => 'required',
            'product_name_en'  => 'required',
            'product_name_bn'  => 'required',
            'product_code'     => 'required',
            'product_qty'      => 'required',
            'product_tags_en'  => 'required',
            'product_tags_bn'  => 'required',
            'product_size_en'  => 'required',
            'product_size_bn'  => 'required',
            'product_color_en' => 'required',
            'product_color_bn' => 'required',
            'selling_price'    => 'required',
            'short_desc_en'    => 'required',
            'short_desc_bn'    => 'required',
            'long_desc_en'     => 'required',
            'long_desc_bn'     => 'required',
        ],[
            'brand_id.required'         => 'Slect Brand Name',
            'cat_id.required'           => 'Select Category Name',
            'subcat_id.required'        => 'Select Sub Category Name',
            'subsubcat_id.required'     => 'Select Sub Sub Category Name',
            'product_name_en.required'  => 'Enter Product Name English',
            'product_name_bn.required'  => 'Enter Product Name Bangla',
            'product_code.required'     => 'Enter Product Code',
            'product_qty.required'      => 'Enter Product Quantity',
            'product_tags_en.required'  => 'Enter Product Tags English',
            'product_tags_bn.required'  => 'Enter Product Tags Bangla',
            'product_size_en.required'  => 'Enter Product Size English',
            'product_size_bn.required'  => 'Enter Product Size Bangla',
            'product_color_en.required' => 'Enter Product Color English',
            'product_color_bn.required' => 'Enter Product Color Bangla',
            'selling_price.required'    => 'Enter Product Price',
            'short_desc_en.required'    => 'Enter Product Short Description English',
            'short_desc_bn.required'    => 'Enter Product Short Description Bangla',
            'long_desc_en.required'     => 'Enter Product Long Description English',
            'long_desc_bn.required'     => 'Enter Product Long Description Bangla',
        ]);

        $update -> update([
            'brand_id'         => $request -> brand_id,
            'cat_id'           => $request -> cat_id,
            'subcat_id'        => $request -> subcat_id,
            'subsubcat_id'     => $request -> subsubcat_id,
            'product_name_en'  => $request -> product_name_en,
            'product_name_bn'  => $request -> product_name_bn,
            'product_slug_en'  => Str::slug($request -> product_name_en),
            'product_slug_bn'  => str_replace(' ', '-', $request -> product_name_bn),
            'product_code'     => $request -> product_code,
            'product_qty'      => $request -> product_qty,
            'product_qty'      => $request -> product_qty,
            'product_tags_en'  => $request -> product_tags_en,
            'product_tags_bn'  => $request -> product_tags_bn,
            'product_size_en'  => $request -> product_size_en,
            'product_size_bn'  => $request -> product_size_bn,
            'product_color_en' => $request -> product_color_en,
            'product_color_bn' => $request -> product_color_bn,
            'selling_price'    => $request -> selling_price,
            'discount_price'   => $request -> discount_price,
            'shor_des_en'      => $request -> short_desc_en,
            'shor_des_bn'      => $request -> short_desc_bn,
            'long_des_en'      => $request -> long_desc_en,
            'long_des_bn'      => $request -> long_desc_bn,
            'hot_deals'        => $request -> hot_deals,
            'featured'         => $request -> featured,
            'special_offer'    => $request -> special_offer,
            'special_deals'    => $request -> special_deals,
            'status'           => 1,
        ]);

        return redirect()->route('admin.manage-product')->with('toast_success', 'Product has been updated successfull');
    }

    /**
     * Multi image update
     */

     public function multiImageUpdate(Request $request){
        $imgs = $request -> multiimage;
        $img = $request -> singleimage;
        if($imgs){
            foreach ($imgs as $id => $img) {
                $del_image =  MultiImage::find($id);
                unlink($del_image -> photo);
                $image_name = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
                Image::make($img)->resize(917, 1000) -> save('assets/media/backend/product/multi_img/'.$image_name);
                $save_url = 'assets/media/backend/product/multi_img/'.$image_name;
                MultiImage::where('id',$id) -> update([
                    'photo' => $save_url,
                ]);
            }
        }
        if($img){
            $image_name = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
            Image::make($img)->resize(917, 1000) -> save('assets/media/backend/product/multi_img/'.$image_name);
            $save_url = 'assets/media/backend/product/multi_img/'.$image_name;
            MultiImage::create([
                'product_id'  => $request -> id,
                'photo' => $save_url,
            ]);
        }

        return redirect()-> back() ->with('toast_success', 'Product multiimage has been updated successfull');
     }

     public function mainThumbUpdate(Request $request){
        $id = $request -> id;
        $img = $request -> thumb;
        if($img){
            $del_image =  Product::find($id);
            unlink($del_image -> product_thumb);
            $image_name = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
            Image::make($img)->resize(917, 1000) -> save('assets/media/backend/product/thumb/'.$image_name);
            $save_url = 'assets/media/backend/product/thumb/'.$image_name;
            Product::where('id',$id) -> update([
                'product_thumb' => $save_url,
            ]);
        }

        return redirect()-> back() ->with('toast_success', 'Product thumbnail, has been updated successfull');
     }

     /**
      * Multi image delete
      *
      * @param [type] $id
      * @return void
      */
     public function multiImageDelete($id){
        $old_img = MultiImage::find($id);
        unlink($old_img -> photo);
        $old_img -> delete();
        return redirect()-> back() ->with('toast_success', 'Product multiple image, has been updated successfull');
     }
    //---------------product status--------------------
     public function productInactive($id){
        Product::find($id) -> update([
            'status' => 0,
        ]);
        return redirect()-> back() ->with('toast_success', 'Product Inactivate successfull !');
     }
     public function productActive($id){
        Product::find($id) -> update([
            'status' => 1,
        ]);
        return redirect()-> back() ->with('toast_success', 'Product activate successfull !');
     }

     public function showProduct($id){
        $product = Product::find($id);
        $multiImg = MultiImage::where('product_id' ,$id) -> latest() -> get();
        return view('admin.product.show',[
            'product' => $product,
            'multi' => $multiImg,
        ]);
     }

}
