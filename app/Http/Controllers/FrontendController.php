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
        /*========= Queries =========*/
        $advantages = Advantage::with('photos')->get();
        $reviews = Review::take(10)->get();
        $siteprices = Siteprice::all();
        $metadata = Metatag::where('url','/')->first();

        $text1 = Textblock::where('theme_id','1')->get();
        $text2 = Textblock::where('theme_id','2')->get();
        $text3 = Textblock::where('theme_id','3')->get();
        $text4 = Textblock::where('theme_id','4')->get();

    	return view('frontend.index', compact('advantages','reviews','siteprices','metadata','text1','text2','text3','text4'));
    }

    public function about() {
        /*========= Queries =========*/
        $reviews = Review::all();
        $metadata = Metatag::where('url','/about')->first();

        $text5 = Textblock::where('theme_id','5')->get();
        $text6 = Textblock::where('theme_id','6')->get();
        $text7 = Textblock::where('theme_id','7')->get();

        return view('frontend.about', compact('text5','text6','text7','reviews','metadata'));
    }

    public function contacts() {
        /*========= Queries =========*/
        $text8 = Textblock::where('theme_id','8')->get();
        $metadata = Metatag::where('url','/contacts')->first();

        return view('frontend.contacts',compact('text8','metadata'));
    }

    public function order() {
        // Queries
        $metadata = Metatag::where('url','/order')->first();

        return view('frontend.order', compact('metadata'));
    }

    public function portfolio() {
        /*========= Queries =========*/
        $portfolio = DB::table('photos')->where('photoable_type','App\Models\Portfolio')->paginate(6);   
        $metadata = Metatag::where('url','/portfolio')->first();

        return view('frontend.portfolio',compact('portfolio','metadata'));
    }

    public function review() {
        /*========= Queries =========*/
        $reviews = DB::table('reviews')->paginate(2);
        $metadata = Metatag::where('url','/testimonials')->first();

        return view('frontend.review', compact('reviews','metadata'));
    }

    public function services() {
        /*========= Queries =========*/
        $text9 = Textblock::where('theme_id','9')->get();
        $text10 = Textblock::where('theme_id','10')->get();
        $text11 = Textblock::where('theme_id','11')->get();
        $siteprices = Siteprice::all();
        $metadata = Metatag::where('url','/services')->first();

        return view('frontend.services', compact('text9','text10','text11','siteprices','metadata'));
    }

    public function seo() {
        // Queries
        $metadata = Metatag::where('url','/seo')->first();

        return view('frontend.seo', compact('metadata'));
    }

    public function techSupport() {

        // Queries
        $metadata = Metatag::where('url','/tech-support')->first();

        return view('frontend.techSupport', compact('metadata'));
    }

    public function devMobileApps() {

        // Queries
        $metadata = Metatag::where('url','/razrabotka-mobilnyh-prilozhenii')->first();
        
        return view('frontend.devMobileApps', compact('metadata'));
    }

    public function devPO() {

        // Queries
        $metadata = Metatag::where('url','/razrabotka-po')->first();
        
        return view('frontend.devPO', compact('metadata'));
    }

    public function devSites() {
        // Queries
        $metadata = Metatag::where('url','/razrabotka-saitov')->first();
        
        return view('frontend.devSites', compact('metadata'));
    }

    public function shymkent() {
        // Queries
        $metadata = Metatag::where('url','/shymkent')->first();
        
        return view('frontend.shymkent', compact('metadata'));
    }

    public function almaty() {
        // Queries
        $metadata = Metatag::where('url','/almaty')->first();
        
        return view('frontend.almaty', compact('metadata'));
    }   

    public function astana() {
        // Queries
        $metadata = Metatag::where('url','/astana')->first();
        
        return view('frontend.astana', compact('metadata'));
    }

    public function onlineShop() {
        // Queries
        $metadata = Metatag::where('url','/internet-magazin')->first();
        
        return view('frontend.onlineshop', compact('metadata'));
    }

    public function siteVizitka() {
        // Queries
        $metadata = Metatag::where('url','/site-vizitka')->first();
        
        return view('frontend.vizitka', compact('metadata'));
    }   

    public function corpsite() {
        // Queries
        $metadata = Metatag::where('url','/business-site')->first();
        
        return view('frontend.corpsite', compact('metadata'));
    }   

    public function lp() {
        // Queries
        $metadata = Metatag::where('url','/landing-page')->first();
        
        return view('frontend.lp', compact('metadata'));
    }

    public function context() {
        // Queries
        $metadata = Metatag::where('url','/contextnoe-prodvizhenie')->first();
        
        return view('frontend.context', compact('metadata'));
    } 

    public function prodvizhenie() {
        // Queries
        $metadata = Metatag::where('url','/prodvizhenie-saita')->first();
        
        return view('frontend.prodvizhenie', compact('metadata'));
    } 

    public function optimization() {
        // Queries
        $metadata = Metatag::where('url','/optimizacia-saita')->first();
        
        return view('frontend.optimization', compact('metadata'));
    } 

    public function yandex() {
        // Queries
        $metadata = Metatag::where('url','/yandex-direct')->first();
        
        return view('frontend.yandex', compact('metadata'));
    } 

    public function adwords() {
        // Queries
        $metadata = Metatag::where('url','/google-adwords')->first();
        
        return view('frontend.adwords', compact('metadata'));
    }

    public function youtube() {
        // Queries
        $metadata = Metatag::where('url','/youtube')->first();
        
        return view('frontend.youtube', compact('metadata'));
    } 

    public function instagram() {
        // Queries
        $metadata = Metatag::where('url','/instagram')->first();
        
        return view('frontend.instagram', compact('metadata'));
    } 

    public function mission() {
        // Queries
        $metadata = Metatag::where('url','/mission')->first();
        
        return view('frontend.mission', compact('metadata'));
    } 

    public function team() {
        // Queries
        $metadata = Metatag::where('url','/team')->first();
        
        return view('frontend.team', compact('metadata'));
    } 

    public function logoDev() {
        // Queries
        $metadata = Metatag::where('url','/razrabotka-logotipa')->first();
        
        return view('frontend.logoDev', compact('metadata'));
    } 

    public function individualDes() {
        // Queries
        $metadata = Metatag::where('url','/individual-designs')->first();
        
        return view('frontend.individualDes', compact('metadata'));
    } 

    public function siteCatalog() {
        // Queries
        $metadata = Metatag::where('url','/razrabotka-logotipa')->first(); // TODO I should change url
         
        return view('frontend.siteCatalog', compact('metadata'));
    } 
}
