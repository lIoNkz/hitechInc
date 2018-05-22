<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Advantage;

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

    

        
    	return view('frontend.index', compact('advantages'))->with(['cssFile'=> $cssFile, 'script' => $script]);
    }

    public function about() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/aboutPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '<script  src="/js/slick.min.js"></script>';

        return view('frontend.about')->with(['cssFile'=> $cssFile, 'script' => $script]);
    }

    public function contacts() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/contactsPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.contacts')->with(['cssFile'=> $cssFile, 'script' => $script]);
    }

    public function order() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/orderPage.css">';

        /*========= Add page's  javascript =========*/
        $script = ' <script  src="/js/jquery.tooltip.js"></script>
                    <script  src="/js/selectbox.js"></script>';
                    
        return view('frontend.order')->with(['cssFile'=> $cssFile, 'script' => $script]);
    }

    public function portfolio() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/portfolioPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
                    
        return view('frontend.portfolio')->with(['cssFile'=> $cssFile, 'script' => $script]);
    }
}
