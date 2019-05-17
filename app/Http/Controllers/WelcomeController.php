<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creativity;
use URL;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $lastCreativities = Creativity::latest()->limit(3)->get();

        $topRatedCreativities = Creativity::orderByDesc('rate')->limit(3)->with('user')->get();

        $randomCreativities = Creativity::inRandomOrder()->limit(12)->with('user')->get();
        
        return view('welcome')->withTopRatedCreativities($topRatedCreativities)->withRandomCreativities($randomCreativities)->withLastCreativities($lastCreativities);
    }

    public function conditions(Request $request)
    {
        $registerButton = (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'register');

        return view('conditions')->withRegisterButton($registerButton);
    }
}
