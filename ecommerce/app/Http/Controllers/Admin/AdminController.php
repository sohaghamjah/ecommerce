<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Admin dashboard
     *
     * @return void
     */
    public function index(){
        return view('admin.home');
    }
    /**
     * Admin profile data
     *
     * @return void
     */
    public function profile(){
        return view('Admin.profile.index');
    }

    /**
     * Admin profile data update
     */

    public function profileData(Request $request){
        $this -> validate($request, [
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
        ],[
            'name.required'  => 'Name field must not be empty!',
            'email.required' => 'Email field must not be empty!',
            'phone.required' => 'Phone field must not be empty!',
        ]);

        User::find(Auth::id()) -> update([
            'name'       => $request -> name,
            'email'      => $request -> email,
            'phone'      => $request -> phone,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Admin Updated Successfull!',
            'alert-type' => 'success'
        );

        return redirect() -> back() -> with($notification);
    }

    /**
     * Update admin profile photo
     */

    public function showPhoto(){
        return view('admin.profile.adminPhoto');
    }

    public function updatePhoto(Request $request){
        $old_photo = $request -> old_photo;

        if(User::find(Auth::id())->photo == 'assets/media/frontend/avatar.jpg'){
            $photo = $request -> photo;
            $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
            Image::make($photo)->resize(300, 300) -> save('assets/media/backend/admin/'.$photo_name);
            $save_url = 'assets/media/backend/admin/'.$photo_name;
            User::find(Auth::id())->update([
                'photo' => $save_url,
            ]);
            $notification = array(
                'message' => 'Admin Photo Uploaded Successfull!',
                'alert-type' => 'success'
            );
            return redirect() -> back() -> with($notification);
        }else{
            unlink($old_photo);
            $photo = $request -> photo;
            $photo_name = md5(time().rand()).'.'.$photo -> getClientOriginalExtension();
            Image::make($photo)->resize(300, 300) -> save('assets/media/backend/admin/'.$photo_name);
            $save_url = 'assets/media/backend/admin/'.$photo_name;
            User::find(Auth::id())->update([
                'photo' => $save_url,
            ]);
            $notification = array(
                'message' => 'Admin Photo Uploaded Successfull!',
                'alert-type' => 'success'
            );
            return redirect() -> back() -> with($notification);
        }
    }
    /**
     * Admin profile password update
     *
     * @return void
     */
    public function showPassword(){
        return view('admin.profile.adminPassword');
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

                $notification = array(
                    'message' => 'Password change successfull. Now login with new password!',
                    'alert-type' => 'success'
                );
                return redirect() -> route('login') -> with($notification);
            }else{
                $notification = array(
                    'message' => 'Password dose not matched!',
                    'alert-type' => 'error'
                );
                return redirect() -> back() -> with($notification);
            }
        }else{
            $notification = array(
                'message' => 'Old password dose not match!',
                'alert-type' => 'error'
            );
            return redirect() -> back() -> with($notification);
        }
    }
}
