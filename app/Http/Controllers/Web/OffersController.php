<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OffersController extends Controller
{   
    public function index()
    {
        $pageTitle = "أخر العروض";

        /**
         * 
         * Selecing Project which have Special Offers
         *  
         */
        $offered_projects = DB::table('specials')
        ->Join('products', 'products.products_id', '=', 'specials.products_id')
        ->Join('products_description', 'products_description.products_id', '=', 'specials.products_id')
        ->Join('products_to_categories', 'products_to_categories.products_id', '=', 'specials.products_id')
        ->Leftjoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        ->select('products.products_id', 'categories.parent_id', 'products_description.products_name', 'products.products_price', 'specials.*', 'products.products_image', 'products.products_model')
        ->paginate(15);
        // ->get();
        
        // return $offered_projects;

        return view(app('f').".offers", compact([
            'pageTitle' ,
            'offered_projects' , 
        ]));
        
    }
}
