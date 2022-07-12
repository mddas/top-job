<?php

namespace App\Http\Controllers;
use App\Models\Navigation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('parent_page_id',0);
       // $top_first_news = Navigation::all()->where('nav_category','Home')->where('nav_name','Top Three News')->last();
        // $homenews = Navigation::query()
        //         ->where('nav_category','Home')
        //         ->where('page_type','Normal')
        //         ->where('nav_name', 'LIKE', "%news%") 
        //         ->latest()
        //         ->get();
        $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
        $About = Navigation::all()->where('parent_page_id',$about_id)->last();
        $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;

        $banners = Navigation::all()->where('parent_page_id',$banner_id);
       
        return view("website.index")->with(['banners'=>$banners,'about'=>$About,'menus'=>$menus]);
    }
    public function category($slug){
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('parent_page_id',0);
        $id = Navigation::all()->where('nav_name',$slug)->first()->id;        
        $jobs = Navigation::query()->where('parent_page_id',$id->id)->where('page_type','Normal')->orderBy('created_at', 'desc')->get();
        return $news;
       // return view("website.category")->with(['news'=>$news,'menus'=>$menus,'homenews'=>$homenews,'top_first_news'=>$top_first_news]);
    }
    public function singlePage($slug){
       
        $menus = Navigation::all()->where('nav_category','Main')->where('parent_page_id',0);
        $top_first_news = Navigation::all()->where('nav_category','Home')->where('nav_name','Top Three News')->last();
        $homenews = Navigation::query()
                ->where('nav_category','Home')
                ->where('page_type','Normal')
                ->where('nav_name', 'LIKE', "%news%") 
                ->latest()
                ->get();
        
        $singleNews =  Navigation::all()->where('nav_name',$slug)->first();
        return view("website.single")->with(['singlenews'=>$singleNews,'menus'=>$menus,'homenews'=>$homenews,'top_first_news'=>$top_first_news]);
    }
}
