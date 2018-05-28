<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Advantage;
use App\Models\Review;
use App\Models\Textblock;
use App\Models\Siteprice;
use App\Models\Metatag;

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
        $metadata = Metatag::where('url','/')->first();

        $text1 = Textblock::where('theme_id','1')->get();
        $text2 = Textblock::where('theme_id','2')->get();
        $text3 = Textblock::where('theme_id','3')->get();
        $text4 = Textblock::where('theme_id','4')->get();

    	return view('frontend.index', compact('advantages','reviews','siteprices','metadata','text1','text2','text3','text4'))->with([
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
        $metadata = Metatag::where('url','/about')->first();

        $text5 = Textblock::where('theme_id','5')->get();
        $text6 = Textblock::where('theme_id','6')->get();
        $text7 = Textblock::where('theme_id','7')->get();

        return view('frontend.about', compact('text5','text6','text7','reviews','metadata'))->with([
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
        $metadata = Metatag::where('url','/contacts')->first();

        return view('frontend.contacts',compact('text8','metadata'))->with([
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
        // Queries
        $metadata = Metatag::where('url','/order')->first();

        return view('frontend.order', compact('metadata'))->with([
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
        $metadata = Metatag::where('url','/portfolio')->first();

        return view('frontend.portfolio',compact('portfolio','metadata'))->with([
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
        $metadata = Metatag::where('url','/testimonials')->first();

        return view('frontend.review', compact('reviews','metadata'))->with([
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
        $metadata = Metatag::where('url','/services')->first();

        return view('frontend.services', compact('text9','text10','text11','siteprices','metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function seo() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/seo')->first();

        return view('frontend.seo', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function techSupport() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/tech-support')->first();

        return view('frontend.techSupport', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function devMobileApps() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/razrabotka-mobilnyh-prilozhenii')->first();
        
        return view('frontend.devMobileApps', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function devPO() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/razrabotka-po')->first();
        
        return view('frontend.devPO', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function devSites() {
        /*========= Add page's own style =========*/
        $cssFile = '<link rel="stylesheet" href="/css/submenu.css">';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/razrabotka-saitov')->first();
        
        return view('frontend.devSites', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function shymkent() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/shymkent')->first();
        
        return view('frontend.shymkent', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function almaty() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/almaty')->first();
        
        return view('frontend.almaty', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }   

    public function astana() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/astana')->first();
        
        return view('frontend.astana', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function onlineShop() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/internet-magazin')->first();
        
        return view('frontend.onlineshop', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function siteVizitka() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/site-vizitka')->first();
        
        return view('frontend.vizitka', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }   

    public function corpsite() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/business-site')->first();
        
        return view('frontend.corpsite', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }   

    public function lp() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/landing-page')->first();
        
        return view('frontend.lp', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function context() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/contextnoe-prodvizhenie')->first();
        
        return view('frontend.context', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function prodvizhenie() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/prodvizhenie-saita')->first();
        
        return view('frontend.prodvizhenie', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function optimization() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/optimizacia-saita')->first();
        
        return view('frontend.optimization', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function yandex() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/yandex-direct')->first();
        
        return view('frontend.yandex', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function adwords() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/google-adwords')->first();
        
        return view('frontend.adwords', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    }

    public function youtube() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/youtube')->first();
        
        return view('frontend.youtube', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function instagram() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/instagram')->first();
        
        return view('frontend.instagram', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function mission() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/mission')->first();
        
        return view('frontend.mission', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function team() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/team')->first();
        
        return view('frontend.team', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function logoDev() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/razrabotka-logotipa')->first();
        
        return view('frontend.logoDev', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 

    public function individualDes() {
        /*========= Add page's own style =========*/
        $cssFile = '';

        /*========= Add page's  javascript =========*/
        $script = '';
        // Queries
        $metadata = Metatag::where('url','/individual-designs')->first();
        
        return view('frontend.individualDes', compact('metadata'))->with([
            'cssFile'=> $cssFile, 
            'script' => $script
        ]);
    } 
}
