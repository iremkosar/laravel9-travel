<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Place;

class HomeController extends Controller
{
    public function index()
    {
        $sliderdata=Place::limit(4)->get();
        return view('home.index',[
            'sliderdata' => $sliderdata
        ]);
    }

    public function login(){
         return view(view:'home.login');
    }

    public function about(){
        return view(view:'home.about');
    }

    public function loginCheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email','password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('home');
            }

            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}