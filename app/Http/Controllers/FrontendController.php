<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Advantage;
use App\Models\Review;
use App\Models\Textblock;
use App\Models\Siteprice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/indexPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '<script  src="/js/slick.min.js"></script>';

        /*========= Queries =========*/
        $advantages = Advantage::with('photos')->get();
        $reviews = Review::take(10)->get();
        $siteprices = Siteprice::all();
        // foreach ($advantages as $key => $advantage) {
        //     dd($advantage->photos->first()->path);
        // }

        $text1 = Textblock::where('theme_id','1')->get();
        $text2 = Textblock::where('theme_id','2')->get();
        $text3 = Textblock::where('theme_id','3')->get();
        $text4 = Textblock::where('theme_id','4')->get();

    	return view('frontend.index', compact('advantages','reviews','siteprices','text1','text2','text3','text4'))->with([
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
        $reviews = Review::all();

        $text5 = Textblock::where('theme_id','5')->get();
        $text6 = Textblock::where('theme_id','6')->get();
        $text7 = Textblock::where('theme_id','7')->get();

        return view('frontend.about', compact('text5','text6','text7','reviews'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function contacts() {
    	/*========= Add page's own style =========*/
    	$cssFile = '<link rel="stylesheet" href="/css/contactsPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        /*========= Queries =========*/
        $text8 = Textblock::where('theme_id','8')->get();

        return view('frontend.contacts',compact('text8'))->with([
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
        
        /*========= Queries =========*/
        $portfolio = DB::table('photos')->where('photoable_type','App\Models\Portfolio')->paginate(6);   


        return view('frontend.portfolio',compact('portfolio'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function review() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/reviewPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        /*========= Queries =========*/
        $reviews = DB::table('reviews')->paginate(2);

        return view('frontend.review', compact('reviews'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function services() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/servicesPage.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        /*========= Queries =========*/
        $text9 = Textblock::where('theme_id','9')->get();
        $text10 = Textblock::where('theme_id','10')->get();
        $text11 = Textblock::where('theme_id','11')->get();
        $siteprices = Siteprice::all();

        return view('frontend.services', compact('text9','text10','text11','siteprices'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function seo() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.seo')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function techSupport() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.techSupport')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function devMobileApps() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.devMobileApps')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function devPO() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.devPO')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function devSites() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.devSites')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function shymkent() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.shymkent')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function almaty() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.almaty')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }   

    public function astana() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.astana')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function onlineShop() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.onlineshop')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function siteVizitka() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.vizitka')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }   

    public function corpsite() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.corpsite')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }   

    public function lp() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.lp')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function context() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.context')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function prodvizhenie() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.prodvizhenie')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function optimization() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.optimization')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function yandex() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.yandex')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function adwords() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.adwords')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function youtube() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.youtube')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function instagram() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.instagram')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function mission() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.mission')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function team() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.team')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function logoDev() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.logoDev')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function individualDes() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';

        return view('frontend.individualDes')->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 
}
