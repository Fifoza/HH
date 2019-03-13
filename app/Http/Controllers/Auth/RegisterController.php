<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'agree' => ['accepted'],
        ], [
            'name.required' => 'Моля, въведете име или псевдоним!',
            'name.string' => 'Името трябва да съдържа букви!',
            'name.min' => 'Името трябва да е поне 2 символа!',
            'name.max' => 'Името не може да бъде по-дълго от 255 символа!',
            'email.required' => 'Моля, въведете имейл!',
            'email.string' => 'Имейла трябва да съдържа букви!',
            'email.email' => 'Моля, въведете валиден имейл!',
            'email.max' => 'Имейла не може да бъде по-дълъг от 255 символа!',
            'email.unique' => 'Съжаляваме, имейла е вече зает!',
            'password.required' => 'Моля, въведете парола',
            'password.string' => 'Паролата трябва да съдържа поне един символ!',
            'password.min' => 'Паролата трябва да бъде поне 8 символа!',
            'password.confirmed' => 'Моля повторете паролата!',
            'agree.accepted' => 'За да се регистрирате, трябва да прочетете и да се съгласите с общите условия на сайта ни!',
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
