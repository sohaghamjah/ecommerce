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
        Image::make($photo)->resize(166, 110) -> save('assets/media/backend/slider/'.$photo_name);
        $save_url = 'assets/media/backend/slider/'.$photo_name;
        Slider::create([
            'slider_title' => $request -> slider_title,
            'slider_description' => $request -> slider_description,
            'photo'   => $save_url,
        ]);
        return redirect() -> back() -> with('toast_success', 'Slider Added Successfully!');
    }
}
