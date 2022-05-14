<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Place;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index()
    {
        $sliderdata=Place::limit(4)->get();
        $placelist1=Place::limit(6)->get();
        $data= Setting::first();

        return view('home.index',[
            'setting' => $data,
            'sliderdata' => $sliderdata,
            'placelist1' => $placelist1
        ]);
    }

    public function place($id)
    {
        $data= Place::find($id);
        $images=DB::table('images')->where('place_id',$id)->get();
        return view('home.place',[
            'data' => $data,
            'images' => $images
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