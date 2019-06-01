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


class CalculateInstallment extends Controller
{
    //
    public function index()
    {

        // Geting All Categories Starts
            $categories = DB::table('categories')
            ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'categories.categories_id')
            ->where('categories.parent_id', '=', 0)
            ->select('categories_description.categories_name', 'categories_description.categories_id')
            ->orderBy('categories_description.categories_name', 'ASC')
            ->get();
        // Geting All Categories Ends

        return view(app('f').".calculate-installment")
        ->with('categories', $categories)
        ->with('pageTitle', "أحسب قسطك")
        ;
    }


    public function SubCategories( Request $request )
    {
        try {
            $category__ID = Crypt::decrypt($request->category__ID);
        } catch (DecryptException $e) {
            return view('errors.404');
        }

        $language_id = 1;

        // $products_by_ajax = DB::table('products_to_categories')
        //     ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        //     ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
        //     ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
        //     ->leftJoin('products_description','products_description.products_id','=','products.products_id')
        //     ->select('categories_description.categories_name','categories.categories_image', 'products.products_price', 'products.products_image', 'products.products_last_modified','products_description.products_name', 'categories_description.categories_id', 'products.products_id')
        //     ->where('products_description.language_id','=', 1)
        //     ->where('categories_description.language_id','=', 1)
        //     ->where('categories.parent_id', '=', $category__ID)
        //     ->orderBy('products.products_id', 'DESC')
        //     ->get();
            

        $products_by_ajax = DB::table('categories')
		->leftJoin('categories_description','categories_description.categories_id', '=', 'categories.categories_id')
		->select('categories.categories_id as id', 'categories.categories_image as image',  'categories.date_added as date_added', 'categories.last_modified as last_modified', 'categories_description.categories_name as name')
		->where('parent_id', '=', $category__ID)
		->where('categories_description.language_id', $language_id)
        ->get();
        
        return $products_by_ajax;
    }

    public function Products_IN_SubCategory( Request $request ) 
    {
        $SubCategoriesId = $request->id;    

        $_products = DB::table('products_to_categories')
        ->where('products_to_categories.categories_id', '=', $SubCategoriesId)
        ->Join('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        ->Join('products_description', 'products_description.products_id', '=', 'products_to_categories.products_id')
        ->Join('categories_description', 'categories_description.categories_id', '=', 'categories.categories_id')
        ->join('products', 'products.products_id', '=', 'products_to_categories.products_id')
        // ->select('products.products_model', 'products.products_image', 'products.products_price', 'products_description.products_name', 'products_description.products_description', 'products_description.products_id', 'products_description.products_viewed', 'categories_description.categories_name', 'categories.parent_id') 
        ->get(); 
        
        return $_products;
    }

}
