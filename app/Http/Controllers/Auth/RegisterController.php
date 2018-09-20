<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'role' => 'required',
           # 'avatar' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /* $request = request();

        $profileImage = $request->file('profile_picture');
        $profileImageSaveAsName = time() . \Auth::id() . "-profile." . 
                                  $profileImage->getClientOriginalExtension();

        $upload_path = 'profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName); */
        #dd($profileImageSaveAsName);
        /* $file = request()->file('profile_picture');
        #dd($file);
        
        $ext = $file->extension();

      $avater =  $file->storeAs('profile_images', \Auth::id() ."profile.{$ext}"); */
      $fileName = 'null';
      if (Input::file('profile_picture')->isValid()) {
          $destinationPath = public_path('uploads/files');
          $extension = Input::file('profile_picture')->getClientOriginalExtension();
          $fileName = uniqid().'.'.$extension;
  
          Input::file('profile_picture')->move($destinationPath, $fileName);
      }
     

        return User::create([
            'avatar' => $fileName,
            'name' => $data['name'],
            'role_id' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]); 

         
    }
}
