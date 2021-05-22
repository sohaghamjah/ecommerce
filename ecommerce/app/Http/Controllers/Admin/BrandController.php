<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BrandController extends Controller
{
    /**
     * Brand Page show
     */
    public function index(){
        $brand = Brand::latest() -> get();
        return view('admin.brands.index', compact('brand'));
    }

    /**
     * Add New Store
     *
     * @return void
     */
    public function store(Request $request){
        $request -> validate([
            'brand_name_en' => 'required',
            'brand_name_bn' => 'required',
            'brand_photo'   => 'required',
        ], [
            'brand_name_en.required' => 'The field must not be empty !',
            'brand_name_bn.required' => 'The field must not be empty !',
            'brand_photo.required'   => 'The field must not be empty !',
        ]);

        $photo = $request -> brand_photo;
        $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
        Image::make($photo)->resize(166, 110) -> save('assets/media/backend/brand/'.$photo_name);
        $save_url = 'assets/media/backend/brand/'.$photo_name;
        Brand::create([
            'brand_name_en' => $request -> brand_name_en,
            'brand_slug_en' => Str::slug($request -> brand_name_en),
            'brand_name_bn' => $request -> brand_name_bn,
            'brand_slug_bn' => str_replace(' ','_', $request -> brand_name_bn),
            'brand_photo'   => $save_url,
        ]);
        return redirect() -> back() -> with('toast_success', 'Brand Added Successfully!');
    }

    /**
     * Brand Edit
     *
     * @return void
     */
    public function edit($id){
        $brand = Brand::find($id);
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update Brand
     *
     * @return void
     */
    public function update(Request $request){
        $id = $request -> brand_id;
        $old_photo = $request -> old_photo;

        $request -> validate([
            'brand_name_en' => 'required',
            'brand_name_bn' => 'required',
        ], [
            'brand_name_en.required' => 'The field must not be empty !',
            'brand_name_bn.required' => 'The field must not be empty !',
        ]);

        if($request -> brand_photo){
            unlink($old_photo);
            $photo = $request -> brand_photo;
            $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
            Image::make($photo)->resize(166, 110) -> save('assets/media/backend/brand/'.$photo_name);
            $save_url = 'assets/media/backend/brand/'.$photo_name;
            Brand::find($id)->update([
                'brand_name_en' => $request -> brand_name_en,
                'brand_slug_en' => Str::slug($request -> brand_name_en),
                'brand_name_bn' => $request -> brand_name_bn,
                'brand_slug_bn' => str_replace(' ','_', $request -> brand_name_bn),
                'brand_photo'   => $save_url,
            ]);
            return redirect() -> route('admin.brands') ->  with('toast_success', 'Brand Updated Successfully!');
        }else{
            Brand::find($id)->update([
                'brand_name_en' => $request -> brand_name_en,
                'brand_slug_en' => Str::slug($request -> brand_name_en),
                'brand_name_bn' => $request -> brand_name_bn,
                'brand_slug_bn' => str_replace(' ','_', $request -> brand_name_bn),
            ]);
            return redirect() -> route('admin.brands') -> with('toast_success', 'Brand Updated Successfully!');
        }
    }
    /**
     * Brand delete
     */

    public function destroy($id){
        $brand = Brand::find($id);
        $brand_image = $brand -> brand_photo;
        unlink($brand_image);
        $brand -> delete();
        return redirect()->back()->with('toast_success', 'Brand Data has been deleted');
    }
}
