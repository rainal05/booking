<?php

namespace App\Http\Controllers;

use App\Rumah;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $book = Rumah::where('qty', '0')->get()
            ->count();
        $teer = Rumah::where('qty', '1')->get()
            ->count();
        $all = Rumah::get()
            ->count();
        return view('home', compact('book', 'teer', 'all'));
    }
}
