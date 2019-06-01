<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\App\CategoriesController;
use DB;
use Lang;

class PrivacyPolicyController extends Controller
{
    //

    public function index()
    {
        $title = array('pageTitle' => Lang::get("labels.privacy-policy"));
        
        $results = array();
        $language_id = '1';	
        $page_id = '1' ;	
        
        $about = DB::select('select status from pages where page_id = ? LIMIT 1', [$page_id]);

        foreach ($about as $about) {
            $page_status =  $about->status;
        }

        if ( $page_status != 1 ){
            $title = array('pageTitle' => Lang::get("labels.404_error"));
            return view(app('err').".404")->with($title);
        }

        $privacy_policy = DB::table('pages_description')
        ->select('pages_description.name','pages_description.description')  
        ->where('pages_description.page_id','=', $page_id)
        ->where('pages_description.language_id', '=', $language_id)        
        ->get();

        $results['privacy'] = $privacy_policy;

        return view(app('f').".privacy-policy")
        ->with($title)
        ->with('results' ,$results['privacy'])
        ;
    }
}
