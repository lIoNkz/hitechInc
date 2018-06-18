<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Advantage;
use App\Models\Review;
use App\Models\Textblock;
use App\Models\Siteprice;
use App\Models\Metatag;
use App\Models\Breadcrumb;
use App\Models\Article;
use App\Models\Work;
use App\Models\Url;
use App\Mail\OrderFromSite;
use App\Mail\TextToUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{


    public function dynamic($slug) {
        if($slug == "admin") {
            $this->middleware('auth');
            return self::dynamic_2($slug,'');
        }
        else {
            $slug2 = Url::where('slug',$slug)->first()->method;
            return self::$slug2();
        }
    }

    public function dynamic_2($slug, $category) {
        if($slug == "admin") {
            $this->middleware('auth');
            return view('home');   
        } else {
            $category2 = Url::where('slug',$category)->first()->method;
            return self::$category2();
        }

    }

    public function index() {
        /*========= Queries =========*/
        $advantages = Advantage::with('photos')->get();
        $reviews = Review::take(10)->get();
        $siteprices = Siteprice::all();
        $metadata = Metatag::where('url','/')->first();
        $breads = Breadcrumb::where('url','/')->first();
        $urls = Url::all();

        $text1 = Textblock::where('theme_id','1')->get();
        $text2 = Textblock::where('theme_id','2')->get();
        $text3 = Textblock::where('theme_id','3')->get();
        $text4 = Textblock::where('theme_id','4')->get();

    	return view('frontend.index', compact('advantages','reviews','siteprices','metadata','text1','text2','text3','text4','breads','urls'));
    }

    public function about() {
        /*========= Queries =========*/
        $reviews = Review::all();
        $metadata = Metatag::where('url','/about')->first();
        $breads = Breadcrumb::where('url','/about')->first();
        $urls = Url::all();
        $text5 = Textblock::where('theme_id','5')->get();
        $text6 = Textblock::where('theme_id','6')->get();
        $text7 = Textblock::where('theme_id','7')->get();

        return view('frontend.about', compact('text5','text6','text7','reviews','metadata','breads','urls'));
    }

    public function contacts() {
        /*========= Queries =========*/
        $text8 = Textblock::where('theme_id','8')->get();
        $metadata = Metatag::where('url','/contacts')->first();
        $breads = Breadcrumb::where('url','/contacts')->first();
        $urls = Url::all();

        return view('frontend.contacts',compact('text8','metadata','breads','urls'));
    }

    public function order() {
        // Queries
        $metadata = Metatag::where('url','/order')->first();
        $breads = Breadcrumb::where('url','/order')->first();
        $urls = Url::all();

        return view('frontend.order', compact('metadata','breads','urls'));
    }

    public function portfolio() {
        /*========= Queries =========*/
        $portfolio = Work::with('photos')->paginate(6);   
        $metadata = Metatag::where('url','/portfolio')->first();
        $breads = Breadcrumb::where('url','/portfolio')->first();
        $urls = Url::all();

        return view('frontend.portfolio',compact('portfolio','metadata','breads','urls'));
    }

    public function review() {
        /*========= Queries =========*/
        //$reviews = DB::table('reviews')->paginate(2);
        $reviews = Review::with('photos')->paginate(2);
        $metadata = Metatag::where('url','/testimonials')->first();
        $breads = Breadcrumb::where('url','/testimonials')->first();
        $urls = Url::all();

        return view('frontend.review', compact('reviews','metadata','breads','urls'));
    }

    public function services() {
        /*========= Queries =========*/
        $text9 = Textblock::where('theme_id','9')->get();
        $text10 = Textblock::where('theme_id','10')->get();
        $text11 = Textblock::where('theme_id','11')->get();
        $siteprices = Siteprice::all();
        $metadata = Metatag::where('url','/services')->first();
        $breads = Breadcrumb::where('url','/services')->first();
        $urls = Url::all();

        return view('frontend.services', compact('text9','text10','text11','siteprices','metadata','breads','urls'));
    }

    public function blog() {
        /*========= Queries =========*/
        $metadata = Metatag::where('url','/blog')->first(); 
        $breads = Breadcrumb::where('url','/blog')->first(); 
        $posts = Article::with('photos')->get();
        $urls = Url::all();

        return view('frontend.blog', compact('metadata','breads','posts','urls'));
    }

    public function blog_post($slug) {
        /*========= Queries =========*/
        $metadata = Metatag::where('url','/blog')->first(); 
        $breads = Breadcrumb::where('url','/blog')->first(); 
        $post = Article::where('slug',$slug)->with('photos')->first();
        $urls = Url::all();

        return view('frontend.blogPost', compact('metadata','breads','post','urls'));
    }

    public function seo() {
        // Queries
        $metadata = Metatag::where('url','/seo')->first();
        $breads = Breadcrumb::where('url','/seo')->first();
        $urls = Url::all();

        return view('frontend.seo', compact('metadata','breads','urls'));
    }

    public function techSupport() {

        // Queries
        $metadata = Metatag::where('url','/tech-support')->first();
        $breads = Breadcrumb::where('url','/tech-support')->first();
        $urls = Url::all();

        return view('frontend.techSupport', compact('metadata','breads','urls'));
    }

    public function devMobileApps() {

        // Queries
        $metadata = Metatag::where('url','/razrabotka-mobilnyh-prilozhenii')->first();
        $breads = Breadcrumb::where('url','/razrabotka-mobilnyh-prilozhenii')->first();
        $urls = Url::all();

        return view('frontend.devMobileApps', compact('metadata','breads','urls'));
    }

    public function devPO() {

        // Queries
        $metadata = Metatag::where('url','/razrabotka-po')->first();
        $breads = Breadcrumb::where('url','/razrabotka-po')->first();
        $urls = Url::all();

        return view('frontend.devPO', compact('metadata','breads','urls'));
    }

    public function devSites() {
        // Queries
        $metadata = Metatag::where('url','/razrabotka-saitov')->first();
        $breads = Breadcrumb::where('url','/razrabotka-saitov')->first();
        $urls = Url::all();

        return view('frontend.devSites', compact('metadata','breads','urls'));
    }

    public function shymkent() {
        // Queries
        $metadata = Metatag::where('url','/shymkent')->first();
        $breads = Breadcrumb::where('url','/shymkent')->first();
        $urls = Url::all();

        return view('frontend.shymkent', compact('metadata','breads','urls'));
    }

    public function almaty() {
        // Queries
        $metadata = Metatag::where('url','/almaty')->first();
        $breads = Breadcrumb::where('url','/almaty')->first();
        $urls = Url::all();

        return view('frontend.almaty', compact('metadata','breads','urls'));
    }   

    public function astana() {
        // Queries
        $metadata = Metatag::where('url','/astana')->first();
        $breads = Breadcrumb::where('url','/astana')->first();
        $urls = Url::all();

        return view('frontend.astana', compact('metadata','breads','urls'));
    }

    public function onlineShop() {
        // Queries
        $metadata = Metatag::where('url','/internet-magazin')->first();
         $breads = Breadcrumb::where('url','/internet-magazin')->first();
        $urls = Url::all();

        return view('frontend.onlineshop', compact('metadata','breads','urls'));
    }

    public function siteVizitka() {
        // Queries
        $metadata = Metatag::where('url','/site-vizitka')->first();
        $urls = Url::all();
        $breads = Breadcrumb::where('url','/site-vizitka')->first();       

        return view('frontend.vizitka', compact('metadata','breads','urls'));
    }   

    public function corpsite() {
        // Queries
        $metadata = Metatag::where('url','/business-site')->first();
        $breads = Breadcrumb::where('url','/business-site')->first();   
        $urls = Url::all();

        return view('frontend.corpsite', compact('metadata','breads','urls'));
    }   

    public function lp() {
        // Queries
        $metadata = Metatag::where('url','/landing-page')->first();
        $breads = Breadcrumb::where('url','/landing-page')->first();   
        $urls = Url::all();

        return view('frontend.lp', compact('metadata','breads','urls'));
    }

    public function context() {
        // Queries
        $metadata = Metatag::where('url','/contextnoe-prodvizhenie')->first();
        $breads = Breadcrumb::where('url','/contextnoe-prodvizhenie')->first();  
        $urls = Url::all();

        return view('frontend.context', compact('metadata','breads','urls'));
    } 

    public function prodvizhenie() {
        // Queries
        $metadata = Metatag::where('url','/prodvizhenie-saita')->first();
        $breads = Breadcrumb::where('url','/prodvizhenie-saita')->first();        
        $urls = Url::all();

        return view('frontend.prodvizhenie', compact('metadata','breads','urls'));
    } 

    public function optimization() {
        // Queries
        $metadata = Metatag::where('url','/optimizacia-saita')->first();
        $breads = Breadcrumb::where('url','/optimizacia-saita')->first();        
        $urls = Url::all();

        return view('frontend.optimization', compact('metadata','breads','urls'));
    } 

    public function yandex() {
        // Queries
        $metadata = Metatag::where('url','/yandex-direct')->first();
        $breads = Breadcrumb::where('url','/yandex-direct')->first();
        $urls = Url::all();

        return view('frontend.yandex', compact('metadata','breads','urls'));
    } 

    public function adwords() {
        // Queries
        $metadata = Metatag::where('url','/google-adwords')->first();
        $breads = Breadcrumb::where('url','/google-adwords')->first();        
        $urls = Url::all();

        return view('frontend.adwords', compact('metadata','breads','urls'));
    }

    public function youtube() {
        // Queries
        $metadata = Metatag::where('url','/youtube')->first();
        $breads = Breadcrumb::where('url','/youtube')->first();      
        $urls = Url::all();

        return view('frontend.youtube', compact('metadata','breads','urls'));
    } 

    public function instagram() {
        // Queries
        $metadata = Metatag::where('url','/instagram')->first();
        $breads = Breadcrumb::where('url','/instagram')->first(); 
        $urls = Url::all();

        return view('frontend.instagram', compact('metadata','breads','urls'));
    } 

    public function mission() {
        // Queries
        $metadata = Metatag::where('url','/mission')->first();
        $breads = Breadcrumb::where('url','/mission')->first();       
        $urls = Url::all();

        return view('frontend.mission', compact('metadata','breads','urls'));
    } 

    public function team() {
        // Queries
        $metadata = Metatag::where('url','/team')->first();
        $breads = Breadcrumb::where('url','/team')->first();       
        $urls = Url::all();

        return view('frontend.team', compact('metadata','breads','urls'));
    } 

    public function logoDev() {
        // Queries
        $metadata = Metatag::where('url','/razrabotka-logotipa')->first();
        $breads = Breadcrumb::where('url','/razrabotka-logotipa')->first(); 
        $urls = Url::all();

        return view('frontend.logoDev', compact('metadata','breads','urls'));
    } 

    public function individualDes() {
        // Queries
        $metadata = Metatag::where('url','/individual-design')->first();
        $breads = Breadcrumb::where('url','/individual-design')->first();       
        $urls = Url::all();

        return view('frontend.individualDes', compact('metadata','breads','urls'));
    } 

    public function siteCatalog() {
        // Queries
        $metadata = Metatag::where('url','/razrabotka-logotipa')->first(); // TODO I should change url
        $breads = Breadcrumb::where('url','/site-catalog')->first();         
        $urls = Url::all();

        return view('frontend.siteCatalog', compact('metadata','breads','urls'));
    }

    public function socialAdv() {
        // Queries
        $metadata = Metatag::where('url','/reklama-v-socsetyah')->first(); // TODO I should change url
        $breads = Breadcrumb::where('url','/reklama-v-socsetyah')->first();     
        $urls = Url::all();

        return view('frontend.socialAdv', compact('metadata','breads','urls'));
    }

    public function mail_order(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service_type' => $request->service_type
        ];

        Mail::to(env('MAIL_TO'))->send(new OrderFromSite($data));
        return redirect('order')->with('status','Ваша заявка отправлена!');
    }

    public function mail_textToUs(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'text' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'text' => $request->text
        ];

        Mail::to(env('MAIL_TO'))->send(new TextToUs($data));
        return redirect('contacts')->with('status2','Ваше сообщение отправлено!');

    }
}
