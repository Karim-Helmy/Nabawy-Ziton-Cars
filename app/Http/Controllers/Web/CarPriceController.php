<?php

namespace App\Http\Controllers\Web;

use DB;
use Lang;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\App\CategoriesController;
use Illuminate\Contracts\Encryption\DecryptException;

class CarPriceController extends Controller
{
    //

    public function index()
    {

        $title = array('pageTitle' => Lang::get("labels.cars-prices"));

		//$language_id            				=   $request->language_id;
		$language_id            				=   '1';			
        $results								= array();
             
            
            $categories = DB::table('categories')
           ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'categories.categories_id')
            ->where('categories.parent_id', '=', 0)
            ->select('categories_description.categories_name', 'categories_description.categories_id')
            ->orderBy('categories_description.categories_name', 'ASC')
            ->get();

            // return $categories;
            $products = DB::table('products_to_categories')
            ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
            ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
            ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
            ->leftJoin('products_description','products_description.products_id','=','products.products_id')
            ->select('categories_description.categories_name','categories.categories_image', 'products.products_price', 'products.products_image', 'products.products_last_modified','products_description.products_name')
            ->where('products_description.language_id','=', 1)
            ->where('categories_description.language_id','=', 1)
            ->orderBy('products.products_id', 'DESC')
            ->paginate(25);

            // return $products;
            
        return view(app('f').".carsprice")
        ->with('pageTitle', $title['pageTitle'])
        ->with('categories', $categories)
        ->with('products', $products);
    }

    public function single_brand_cars ( Request $request ) {
        
        try {
            $category__ID = Crypt::decrypt($request->category_id);    
        } catch (DecryptException $e) {
            return view('errors.404');
        }

        // return $category__ID;

            $products_by_ajax = DB::table('products_to_categories')
            ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
            ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
            ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
            ->leftJoin('products_description','products_description.products_id','=','products.products_id')
            ->select('categories_description.categories_name','categories.categories_image', 'products.products_price', 'products.products_image', 'products.products_last_modified','products_description.products_name')
            ->where('products_description.language_id','=', 1)
            ->where('categories_description.language_id','=', 1)
            ->where('categories.parent_id', '=', $category__ID)
            ->orderBy('products.products_id', 'DESC')
            ->get();

        
            return $products_by_ajax;
    }
    
}
