<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Advantage;
use App\Models\Review;
use App\Models\Textblock;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/indexPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '<script  src="/js/slick.min.js"></script>';

        /*========= Queries =========*/
        $advantages = Advantage::with('photos')->get();
        $reviews = Review::all();
        // foreach ($advantages as $key => $advantage) {
        //     dd($advantage->photos->first()->path);
        // }

        $text1 = Textblock::where('theme_id','1')->get();
        $text2 = Textblock::where('theme_id','2')->get();
        $text3 = Textblock::where('theme_id','3')->get();
        $text4 = Textblock::where('theme_id','4')->get();

    	return view('frontend.index', compact('advantages','reviews','text1','text2','text3','text4'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function about() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/aboutPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '<script  src="/js/slick.min.js"></script>';

        /*========= Queries =========*/
        $text5 = Textblock::where('theme_id','5')->get();

        return view('frontend.about', compact('text5'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function contacts() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/contactsPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.contacts')->with([
            'cssFile'=> $cssFile,
            'script' => $script
        ]);
    }

    public function order() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/orderPage.css">';

        /*========= Add page's  javascript =========*/
        $script = ' <script  src="/js/jquery.tooltip.js"></script>
                    <script  src="/js/selectbox.js"></script>';
                    
        return view('frontend.order')->with([
            'cssFile'=> $cssFile,
            'script' => $script
        ]);
    }

    public function portfolio() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/portfolioPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
                    
        return view('frontend.portfolio')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }
}
