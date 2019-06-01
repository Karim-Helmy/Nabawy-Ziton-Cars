<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Encryption\DecryptException;

class SearchController extends Controller
{
    //
    public function advanced()
    {   
        $pageTitle = 'بحث متقدم';

        $search_resulsts = array();
        
        $status = '';
        $searchBy = '';
        $value = '';


        if ( isset( $_GET['status'] ) ) { $status = $_GET['status']; }

        if ( isset( $_GET['searchBy'] ) ) { $searchBy = $_GET['searchBy']; } 

        if ( isset( $_GET['value'] ) ) { $value = $_GET['value']; } 

        $products = DB::table('products_to_categories')
        ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
        ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
        ->leftJoin('products_description','products_description.products_id','=','products.products_id')
        ->leftJoin('manufacturers','manufacturers.manufacturers_id','=','products.manufacturers_id')
        ->leftJoin('manufacturers_info','manufacturers.manufacturers_id','=','manufacturers_info.manufacturers_id')
        ->LeftJoin('specials', function ($join) {
            $join->on('specials.products_id', '=', 'products.products_id')->where('status', '=', '1');
        })
        ->select('products_to_categories.*', 'categories_description.categories_name','categories.*', 'products.*','products_description.*','manufacturers.*','manufacturers_info.manufacturers_url', 'specials.specials_id', 'specials.products_id as special_products_id', 'specials.specials_new_products_price as specials_products_price', 'specials.specials_date_added as specials_date_added', 'specials.specials_last_modified as specials_last_modified', 'specials.expires_date')
        ->where('products_description.language_id','=', 1)
        ->where('categories_description.language_id','=', 1)
        ->where( function($q) use ( $status ) {

            if ( isset($status) ) {
                if ( $status == 'used' ) {
                    $q->where('manufacturers.manufacturers_id', '=', 7);
                } elseif ( $status == 'new' ){
                    $q->where('manufacturers.manufacturers_id', '=', 6);
                } else {
                    $q;
                }

            }

        })->where(function($q) use ($searchBy, $value){

            if( $searchBy == 'brands' && $value != '') {
                try {
                    $value = Crypt::decrypt($value);
                } catch (DecryptException $e) {
                    return view('errors.404');
                }
                $q->where('categories_description.categories_id', '=', $value);
            } elseif ( $searchBy == 'price' && $value != '' )  {
                switch ($value) {
                    case 'less_than_500_k':
                        $q->where('products.products_price', '<', 500000);
                        break;

                    case '_1kk_500k' :
                        $q->whereBetween('products.products_price',[500000, 1000000]);
                        break;
                        
                    case 'more_than_1_kk' :
                        $q->where('products.products_price', '>', 1000000);
                        break;
                }
            } else {
                $q;
            }
        })->paginate(8);

        // return $products;

        return view (app('f').".advacned_search")
        ->with('pageTitle', $pageTitle)
        ->with('products', $products);
    }

    public function getCategories(Request $r)
    {
        $id = $r->id;

        $products = DB::table('products_to_categories')
        ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
        ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
        ->leftJoin('products_description','products_description.products_id','=','products.products_id')
        ->leftJoin('manufacturers','manufacturers.manufacturers_id','=','products.manufacturers_id')
        ->leftJoin('manufacturers_info','manufacturers.manufacturers_id','=','manufacturers_info.manufacturers_id')
        ->LeftJoin('specials', function ($join) {
            $join->on('specials.products_id', '=', 'products.products_id')->where('status', '=', '1');
        })
        ->select('products_to_categories.*', 'categories_description.categories_name','categories.*', 'products.*','products_description.*','manufacturers.*','manufacturers_info.manufacturers_url', 'specials.specials_id', 'specials.products_id as special_products_id', 'specials.specials_new_products_price as specials_products_price', 'specials.specials_date_added as specials_date_added', 'specials.specials_last_modified as specials_last_modified', 'specials.expires_date')
        ->where('products_description.language_id','=', 1)
        ->where('categories_description.language_id','=', 1)
        ->where('categories.parent_id', '=', $id)
        ->get();

        return $products;
    }

    public function getProducts_AJAX(Request $r)
    {
        $brand_id  = $r->
        $product_id = $r->

        $results = array();

        $language_id = '1';

        $select_product = DB::table('products_to_categories')
        ->leftJoin('categories', 'categories.categories_id', '=', 'products_to_categories.categories_id')
        ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'products_to_categories.categories_id')
        ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
        ->leftJoin('products_description','products_description.products_id','=','products.products_id')
        ->LeftJoin('manufacturers', function ($join) {
        $join->on('manufacturers.manufacturers_id', '=', 'products.manufacturers_id');
        })
        ->LeftJoin('specials', function ($join) {
            $join->on('specials.products_id', '=', 'products.products_id')->where('status', '=', '1');
         })
        ->select('products_to_categories.*', 'categories_description.categories_name','categories.*', 'products.*','products_description.*', 'specials.specials_id', 'manufacturers.*', 'specials.products_id as special_products_id', 'specials.specials_new_products_price as specials_products_price', 'specials.specials_date_added as specials_date_added', 'specials.specials_last_modified as specials_last_modified', 'specials.expires_date')
        ->where('products_description.language_id','=', $language_id)
        ->where('categories_description.language_id','=', $language_id)
        ->where('products.products_id', '=', $product_id)
        ->get()
        ;
        foreach ($select_product as $single_product) {}
        $results['product'] = $single_product;
        
        $_images = DB::select('select image from products_images where products_id = ?', [$product_id]);
        
        $results['product_images'] = $_images;
        
        $pageTitle = $single_product->products_name;
        
        // increasing the Views number starts
        
        $views = $single_product->products_viewed + 1 ;
        $inserting = DB::update('update products_description set products_viewed = ? where products_id = ?', [
            $views , $product_id
        ]);
        
        // increasing the Views number Ends

        // Getting The Product's Attributes Starts 
            
        $getting_attributes = DB::table('products_attributes')
        ->leftJoin('products_options', 'products_options.products_options_id', '=', 'products_attributes.options_id')
        ->leftJoin('products_options_values', 'products_options_values.products_options_values_id', '=', 'products_attributes.options_values_id')
        ->where('products_attributes.products_id', '=', $product_id)
        ->get();

        $results['attributtes'] = $getting_attributes;
        
        // Getting The Product's Attributes Ends

        // Getting Cars From Similar Brand Starts           

        $products_to_categories = DB::table('categories')
        ->leftJoin('products_to_categories', 'products_to_categories.categories_id', '=', 'categories.categories_id')
        ->leftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
        ->leftJoin('products_description', 'products_description.products_id', '=', 'products_to_categories.products_id')
        ->where('categories.parent_id', '=', $brand_id)
        ->where('products.products_id', '!=', null)
        ->take(5)
        ->get();

        $results['products_in_categories'] = $products_to_categories;

        // Getting Cars From Similar Brand Ends

        $results['brand_id'] = Crypt::encrypt($brand_id);

        // Specials Offers Starts
        if ( $results['product']->expires_date != null ) :
            $today = new DateTime();
            $today = $today->getTimestamp();
            $date_to_expire = $results['product']->expires_date - $today;
            $remaining_time =  date('d-m-y', strtotime($date_to_expire));
            $results['remaining_to_expire'] = $remaining_time;
        endif;
        // Specials Offers Ends

        return view(app('f').".single-product")
        ->with('results', $results)
        ->with('encrypted_brand_id', $results['brand_id'])
        ->with('pageTitle', $pageTitle);
    }
}
