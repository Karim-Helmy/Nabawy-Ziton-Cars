<?php

namespace App\Http\Controllers\Web;

use DB;
use Lang;
use DateTime;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\App\CategoriesController;
use Illuminate\Contracts\Encryption\DecryptException;

class BrandsController extends Controller
{
    //

    public function index()
    {
        $results = array();
        $title = array('pageTitle' => Lang::get("labels.brands"));

        // Getting Main Categories
        $categories = DB::table('categories')
            ->leftJoin('categories_description', 'categories_description.categories_id', '=', 'categories.categories_id')
            ->where('categories_description.language_id', '=', '1')
            ->where('categories.parent_id', '=', '0')
            ->orderBy('categories_description.categories_name', 'ASC')
            ->get();

        $results['categories'] = $categories;

        return view(app('f').'.brands')
            ->with('results', $results)
            ->with('pageTitle', $title['pageTitle']);
    }



    public function single_brand($id)
    {
          // DECRYPTING URL HASH STARTS
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return view('errors.404');
        }
        // DECRYPTING URL HASH ENDS

        // Checking If Brand Id IS Valid Starts

        $brand = DB::select('select * from categories where categories_id = ? and parent_id = ?', [$id, '0']);

        if ( empty($brand) )
        {
            return redirect('/404');
        }

        // Getting Brand Name

        $brand_name = DB::select('select categories_name from categories_description where categories_id = ?', [$id]);

        foreach ($brand_name as $brand_name) {

        }

        $result = array();

        $results  = array();

        $results['model_name'] = $brand_name->categories_name;
        $results['model_id'] = $id;

        // Getting single brand data
        $single_brand_data = DB::table('products_to_categories')
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

        $result['single_brand_data'] = $single_brand_data;

        // return $result['single_brand_data'];
        // return $result;

        return view( app('f').".single-brand")
            ->with('results',$results)
            ->with('result', $result)
            ->with('pageTitle', $brand_name->categories_name);
    }


    public function single_product($brand_id, $product_id)
    {
     
       try {
            $brand_id = Crypt::decrypt($brand_id);
            $product_id = Crypt::decrypt($product_id);
        } catch (DecryptException $e) {
           return ('errors.404');
        }
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
    public function used()
    {
        $result = array();

        $results  = array();



        // Getting single brand data
        $single_brand_data = DB::table('products_to_categories')
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
            ->where('products.manufacturers_id', '=', 7)
            ->get();

        $result['single_brand_data'] = $single_brand_data;

        // return $result['single_brand_data'];
        // return $result;
        return view( app('f').".used-cars")

            ->with('result', $result)
            ->with('pageTitle', "سيارات مستعملة");
    }

}
