<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // Using Closure based composers...
		$result = array();
        $orders = DB::table('orders')
				->leftJoin('customers','customers.customers_id','=','orders.customers_id')
				->where('orders.is_seen','=', 0)
				->orderBy('orders_id','desc')
				->get();
				
		$index = 0;	
		foreach($orders as $orders_data){
			
			array_push($result,$orders_data);			
			$orders_products = DB::table('orders_products')
				//->select('final_price', DB::raw('SUM(final_price) as total_price'))
				->where('orders_id', '=' ,$orders_data->orders_id)
				->get();
			
			$result[$index]->price = $orders_products;
			$result[$index]->total_products = count($orders_products);
			$index++;
		}
		
		//new customers
		$newCustomers = DB::table('customers')
				->where('is_seen','=', 0)
				->orderBy('customers_id','desc')
				->get();
				
		//products low in quantity
		$lowInQunatity = DB::table('products')
			->LeftJoin('products_description', 'products_description.products_id', '=', 'products.products_id')
			->whereColumn('products.products_quantity', '<=', 'products.low_limit')
			->where('products_description.language_id', '=', '1')
			->where('products.low_limit', '>', 0)
			//->get();
			->paginate(10);
        //featured news
        $newss = DB::table('news_to_news_categories')
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
            ->take(3)->get();
        //section about us
        $about = DB::table('pages')
            ->leftJoin('pages_description', 'pages_description.page_id', '=', 'pages.page_id')
            ->select('pages.*','pages_description.description','pages_description.language_id','pages_description.name' ,'pages_description.page_description_id')
            ->where('pages.page_id','=', 10)
            ->first();



        /**
         * ======================================================
         * Getting Pages Ids , Pages Data
         * This is for Dynamic Pages Module 
         * ======================= Starts =======================
        */
        $pages = DB::select('select * from pages where status = ?', [1]);
        $pages_slugs = array();
        $pages_names = array();
    
        foreach ($pages as $page) {
    
            array_push($pages_slugs, $page->slug);
            
            $select_names = DB::select('select name from pages_description where page_id = ? and language_id = ?', [$page->page_id, 1]); 
    
    
            foreach ($select_names as $selected_name) {
    
                array_push($pages_names, $selected_name->name);
                
            }
        }
        
        /**
         * ======================= Ends =======================
         */


        /**
         * ===================================================
         * Products And Latest Added Products 
         * This is for Sidebar Widget At different Pages
         * ======================= Starts =======================
         */

        $sidebar_results = array();
        
        // Products Starts
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
        ->take(4)
        ->get();

        $sidebar_results['products'] = $products;

        // Products Ends

        // Categories Starts
        $myVar = DB::table('categories')
            ->leftJoin('categories_description','categories_description.categories_id', '=', 'categories.categories_id')
            ->select('categories.categories_id as id', 'categories.categories_image as image',  'categories.date_added as date_added', 'categories.last_modified as last_modified', 'categories_description.categories_name as name')
            ->where('categories_description.language_id','=', 1 )
            ->where('parent_id', '0')
            ->take(9)
            ->get();
        
        $sidebar_results['categories']=$myVar;

        // Categories Ends


        /**
         * ======================= Ends =======================
         */


         // test
        $select = DB::select('select categories_id, categories_name from categories_description');

        foreach( $select as $value)
            {
                $categoris_ids[] = $value->categories_id;
                $categoris_names[] = $value->categories_name;
            }

            $data_combined = array_combine($categoris_ids, $categoris_names);
         // test
        //get categories from CategoriesController controller
        $brands = DB::table('categories')
            ->leftJoin('categories_description','categories_description.categories_id', '=', 'categories.categories_id')
            ->select('categories.categories_id as id', 'categories.categories_image as image',  'categories.date_added as date_added', 'categories.last_modified as last_modified', 'categories_description.categories_name as name')
            ->where('categories_description.language_id','=', 1 )->where('parent_id', '0')
            ->orderBy('name', 'ASC')->get();

        $setting = DB::table('setting')->first();
        $benefit = $setting->new_product_duration;

        $pages_banner = DB::table('banners')->where('banners_id', 6)->first();
        
        view()->share('pages_banner', $pages_banner);
        view()->share('benefit', $benefit);
        view()->share('brands', $brands);
        view()->share('about', $about);
        view()->share('newss', $newss);
        view()->share('unseenOrders', $result);
        view()->share('newCustomers', $newCustomers);
        view()->share('lowInQunatity', $lowInQunatity);
        view()->share('pages_names', $pages_names);
        view()->share('pages_slugs', $pages_slugs);
        view()->share('sidebar_results', $sidebar_results);
        view()->share('categories_data', $data_combined);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
