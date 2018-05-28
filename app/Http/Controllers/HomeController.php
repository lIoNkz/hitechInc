<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatag;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function search()
    {
        $url = request()->url;
        $metatags = Metatag::where('url',$url)->get();
        return view('metatags.index')
            ->with('metatags', $metatags);
    }
}
