<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
     public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));

    

         return redirect('/login');
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
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
             'username' => 'required|string|max:25',
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
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'profil_picture' => $data['profil_picture'],
            'password' => Hash::make($data['password']),
        ]);
    }

     public function store(CreateBannerRequest $request)
    {

        $input = $request->all();
        //get original file name
        if($request->photo == NULL)
        {
            Flash::error('Image must be filled');
            return back();
        }
        $filename = Input::file('profil_picture')->getClientOriginalName();
        $input['profil_picture'] =  $filename;
         $banner = $this->BannerRepository->create($input);
        //upload file
        Input::file('profil_picture')->move($this->path, $filename); 

         Flash::success('Banner saved successfully.');

         if (empty($banner)) {
            Flash::error('No image available');

            return redirect(route('banner.index'));
        }

         return redirect(route('banner.index'));
    }


    public function uploadPhoto(Request $request)
    {
        $this->validate($request, [
            'profil_picture' => 'mimes:jpg |max:4096',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
     // Now save your file to the storage and file details at database.
    }
}
