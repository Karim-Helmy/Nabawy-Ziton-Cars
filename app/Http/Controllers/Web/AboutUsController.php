<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\App\CategoriesController;
use DB;
use Lang;


class AboutUsController extends Controller
{
    public function index()
    {
    
        $title = array('pageTitle' => Lang::get("labels.about-us"));
        
        $results = array();
        $language_id = '1';	
        $page_id = '4' ;	
        
        $about = DB::select('select status from pages where page_id = ? LIMIT 1', [$page_id]);

        foreach ($about as $about) {
            $page_status =  $about->status;
        }

        if ( $page_status != 1 ){
            $title = array('pageTitle' => Lang::get("labels.404_error"));
            return view(app('err').".404")->with($title);
        }

        $about = DB::table('pages_description')
        ->select('pages_description.name','pages_description.description')  
        ->where('pages_description.page_id','=', $page_id)
        ->where('pages_description.language_id', '=', $language_id)        
        ->get();

        $products_numbers = DB::table('products')->count();
        
        $results['about'] = $about;

        $about_section = DB::table('pages')
            ->leftJoin('pages_description', 'pages_description.page_id', '=', 'pages.page_id')
            ->select('pages.*','pages_description.description','pages_description.language_id','pages_description.name' ,'pages_description.page_description_id')
            ->where('pages.page_id','=', 10)
            ->first();
        

        return view(app('f').".about-us")
        ->with($title)
        ->with('results' ,$results['about'])
        ->with('products_numbers', $products_numbers)
        ->with('about_section', $about_section);
    }
}
