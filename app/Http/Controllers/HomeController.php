<?php

namespace App\Http\Controllers;

use App\Models\problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $zayavki = problem::where('user_id', $id)->get();
        return view('home', compact('zayavki'));
    }
    public function form()
    {
        return view('form');
    }
}
