<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    /**
     * Slider Index Page Show
     *
     * @return void
     */
    public function index(){
        $slider = Slider::latest() -> get();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Slider store
     */

    public function store(Request $request){
        $request -> validate([
            'photo' => 'required',
        ], [
            'photo.required' => 'Chose a slider photo !',
        ]);

        $photo = $request -> photo;
        $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
        Image::make($photo)->resize(870, 370) -> save('assets/media/backend/slider/'.$photo_name);
        $save_url = 'assets/media/backend/slider/'.$photo_name;
        Slider::create([
            'top_en' => $request -> top_en,
            'top_bn' => $request -> top_bn,
            'title_en' => $request -> slider_title_en,
            'title_bn' => $request -> slider_title_bn,
            'des_en' => $request -> slider_des_en,
            'des_bn' => $request -> slider_des_bn,
            'photo'   => $save_url,
        ]);
        return redirect() -> back() -> with('toast_success', 'Slider Added Successfully!');
    }
    /**
     * Slider edit
     */

    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Slider Update
     */

    public function update(Request $request){
        $id = $request -> id;
        $old_photo = $request -> old_photo;
        if($request -> photo){
            unlink($old_photo);
            $photo = $request -> photo;
            $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
            Image::make($photo)->resize(870, 370) -> save('assets/media/backend/slider/'.$photo_name);
            $save_url = 'assets/media/backend/slider/'.$photo_name;
            Slider::find($id) -> update([
                'top_en' => $request -> top_en,
                'top_bn' => $request -> top_bn,
                'title_en' => $request -> title_en,
                'title_bn' => $request -> title_bn,
                'des_en' => $request -> des_en,
                'des_bn' => $request -> des_bn,
                'photo'   => $save_url,
            ]);
        }else{
            Slider::find($id) -> update([
                'top_en' => $request -> top_en,
                'top_bn' => $request -> top_bn,
                'title_en' => $request -> title_en,
                'title_bn' => $request -> title_bn,
                'des_en' => $request -> des_en,
                'des_bn' => $request -> des_bn,
            ]);
        }
        return redirect() -> back() -> with('toast_success', 'Slider Updated Successfully!');
    }

    /**
     * Slider Destroy
     */

     public function destroy($id){
        $slider = Slider::find($id);
        $slider_img = $slider -> photo;
        unlink($slider_img);
        $slider -> delete();

        return redirect() -> back() -> with('toast_success', 'Slider Deleted Successfully!');
     }

         //---------------slider status--------------------
         public function sliderInactive($id){
            Slider::find($id) -> update([
                'status' => 0,
            ]);
            return redirect()-> back() ->with('toast_success', 'Slider Inactivate successfull !');
         }
         public function sliderActive($id){
            Slider::find($id) -> update([
                'status' => 1,
            ]);
            return redirect()-> back() ->with('toast_success', 'Slider activate successfull !');
         }



}
