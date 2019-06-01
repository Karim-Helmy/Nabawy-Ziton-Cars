<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\App\CategoriesController;
use DB;
use Lang;
class HomeController extends Controller
{

    public function index()
    {
        $result = array();
        $title = array('pageTitle' => Lang::get("labels.HomePage"));
        //banner
        $banner1 = DB::table('banners')->where('banners_id' , 2)->get();
        $banner2 = DB::table('banners')->where('banners_id', 3)->get();
        $car1 = DB::table('banners')->where('banners_id', 4)->get();
        $car2 = DB::table('banners')->where('banners_id', 5)->get();
        $result['banner1'] = $banner1;
        $result['banner2'] = $banner2;
        $result['car1'] = $car1;
        $result['car2'] = $car2;

        //latest products
        $products = DB::table('products_to_categories')
            ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
            ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
            ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
            ->leftJoin('products_description','products_description.products_id','=','products.products_id')
            ->leftJoin('manufacturers','manufacturers.manufacturers_id','=','products.manufacturers_id')
            ->leftJoin('manufacturers_info','manufacturers.manufacturers_id','=','manufacturers_info.manufacturers_id')
            //->leftJoin('specials','specials.products_id','=','products.products_id')
            ->LeftJoin('specials', function ($join) {
                $join->on('specials.products_id', '=', 'products.products_id')->where('status', '=', '1');
            })
            ->select('products_to_categories.*', 'categories_description.categories_name','categories.*', 'products.*','products_description.*','manufacturers.*','manufacturers_info.manufacturers_url', 'specials.specials_id', 'specials.products_id as special_products_id', 'specials.specials_new_products_price as specials_products_price', 'specials.specials_date_added as specials_date_added', 'specials.specials_last_modified as specials_last_modified', 'specials.expires_date')
            ->where('products_description.language_id','=', 1)
            //->where('manufacturers_info.languages_id','=', $language_id)
            ->where('categories_description.language_id','=', 1)
            ->orderBy('products.products_id', 'DESC')
            ->get();
        $result['products'] = $products;
        //featured news
        $news = DB::table('news_to_news_categories')
            ->leftJoin('news_categories', 'news_categories.categories_id', '=', 'news_to_news_categories.categories_id')
            ->leftJoin('news', 'news.news_id', '=', 'news_to_news_categories.news_id')
            ->leftJoin('news_description','news_description.news_id','=','news.news_id')
            ->leftJoin('news_categories_description','news_categories_description.categories_id','=','news_to_news_categories.categories_id')

            ->select('news_to_news_categories.*', 'news_categories_description.categories_name','news_categories.*', 'news.*','news_description.*')
            ->where('news_description.language_id','=', 1)
            ->where('news.news_status','=', 1)

            ->where('news.is_feature','=', 1)
            ->where('news_categories_description.language_id','=', 1)
            ->orderBy('news.news_id', 'ASC')
            ->take(4)->get();
        $result['news'] = $news;
        //section about us
        $about = DB::table('pages')
            ->leftJoin('pages_description', 'pages_description.page_id', '=', 'pages.page_id')
            ->select('pages.*','pages_description.description','pages_description.language_id','pages_description.name' ,'pages_description.page_description_id')
            ->where('pages.page_id','=', 10)
            ->first();

        $result['about'] = $about;


        /**
         * ======================================
         * Quick View Section Starts
         * ======================================
         */

         // ============================== 
         // Latest Products
         // ============================== 
        $latest_products = DB::table('products')
        ->Join('products_description', 'products_description.products_id', '=', 'products.products_id')
        ->Join('products_to_categories', 'products_to_categories.products_id', '=', 'products.products_id')
        ->Join('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
        ->Join('specials', 'specials.products_id', '=', 'products.products_id')
        ->Join('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        ->select('products.*', 'products_description.*', 'specials.*', 'categories.*')
        ->orderBy('products.products_id', 'ASC')
        ->take(5)
        ->get();

        $result['latest_products'] = $latest_products;

        // ============================================================ 
        
         // ============================== 
         // Most Popular
         // ============================== 
        
         $most_popular =  DB::table('products')
         ->Join('products_description', 'products_description.products_id', '=', 'products.products_id')
         ->Join('products_to_categories', 'products_to_categories.products_id', '=', 'products.products_id')
         ->Join('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
         ->Join('specials', 'specials.products_id', '=', 'products.products_id')
         ->Join('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
         ->select('products.*', 'products_description.*', 'specials.*', 'categories.*')
         ->orderBy('products_description.products_viewed', 'DES')
         ->take(5)
         ->get();

         $result['most_popular'] = $most_popular;

        // ============================================================

        // ==============================
        // 
        // ==============================
         
        /**
         * ======================================
         * Quick View Section Ends
         * ======================================
         */
        return view(app('f').'.home',$title)->with('result', $result);
    }

    public function contact()
    {
        $title = array('pageTitle' => Lang::get("labels.Contact"));
        return view(app('f').'.contact',$title);
    }
}
