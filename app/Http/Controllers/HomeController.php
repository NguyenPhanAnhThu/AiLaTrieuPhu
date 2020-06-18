<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('Home');
    }

    public function profile(Request $request)
    {
        $email = $request->session()->get('email') ?? "PETER BISHOP";
        return view('Profile',  ["email" => $email]);
    }

    public function thi(Request $request)
    {
        $email = $request->session()->get('email');
        return view('Thi', ["email" => $email]);
    }

    public function login($email, Request $request)
    {
        $request->session()->put('email', $email);
        return redirect()->route('home');
    }

    public function tienThuong($money = 0) {
        return view('TienThuong', ["money" => $money]);
    }

}
