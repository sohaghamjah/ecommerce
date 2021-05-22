<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * User Index
     *
     * @return void
     */
    public function index(){
        return view('user.home');
    }

    /**
     * Update Profile
     *
     * @return void
     */
    public function updateProfile(Request $request){
        $this -> validate($request, [
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
        ],[
            'name.required'  => 'Name must not be empty!',
            'email.required' => 'Email must not be empty!',
            'phone.required' => 'Phone must not be empty!',
        ]);

        User::find(Auth::id()) -> update([
            'name'       => $request -> name,
            'email'      => $request -> email,
            'phone'      => $request -> phone,
            'updated_at' => Carbon::now(),
        ]);

        return redirect() -> back() -> with('toast_success', 'Brand Data has been Updated');
    }

    /**
     * User Photo Page
     *
     * @return void
     */
    public function showPhoto(){
        return view('user.userPhoto');
    }

    /**
     * Update Profile photo
     */

    public function updatePhoto(Request $request){
        $old_photo = $request -> old_photo;

        if(User::find(Auth::id())->photo == 'assets/media/frontend/avatar.jpg'){
            $photo = $request -> photo;
            $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
            Image::make($photo)->resize(300, 300) -> save('assets/media/frontend/users/'.$photo_name);
            $save_url = 'assets/media/frontend/users/'.$photo_name;
            User::find(Auth::id())->update([
                'photo' => $save_url,
            ]);
            return redirect() -> back() -> with('toast_success', 'User profile photo has been Updated');
        }else{
            unlink($old_photo);
            $photo = $request -> photo;
            $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
            Image::make($photo)->resize(300, 300) -> save('assets/media/frontend/users/'.$photo_name);
            $save_url = 'assets/media/frontend/users/'.$photo_name;
            User::find(Auth::id())->update([
                'photo' => $save_url,
            ]);
            return redirect() -> back() -> with('toast_success', 'User profile photo has been Updated');
        }
    }

    /**
     * show Password page
     *
     * @return void
     */
    public function showPassword(){
        return view('user.userPassword');
    }

    public function updatePassword(Request $request){
        $this -> validate($request, [
            'old_password'          => 'required',
            'new_password'          => 'required',
            'password_confirmation' => 'required',
        ], [
            'old_password.required'          => 'Old Password field must not be empty!',
            'new_password.required'          => 'New Password field must not be empty!',
            'password_confirmation.required' => 'Confirm Password field must not be empty!',
        ]);

        $db_pass = Auth::user()->password;
        $c_pass = $request -> old_password;
        $n_pass = $request -> new_password;
        $r_pass = $request -> password_confirmation;

        if(Hash::check($c_pass, $db_pass)){
            if($n_pass == $r_pass){
                User::find(Auth::id()) -> update([
                    'password' => Hash::make($n_pass),
                ]);
                Auth::logout();

                return redirect() -> route('login') -> with('toast_success', 'Password change successfull. Now login with new password!');
            }else{
                $notification = array(
                    'message' => 'Password dose not matched!',
                    'alert-type' => 'error'
                );
                return redirect() -> back() -> with('toast_success', 'Password dose not matched!');
            }
        }else{
            return redirect() -> back() -> with('toast_success', 'Old password dose not match');
        }
    }
}
