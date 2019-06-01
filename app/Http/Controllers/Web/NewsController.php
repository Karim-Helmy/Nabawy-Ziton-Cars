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
use App\Http\Controllers\Admin\AdminSiteSettingController;
use App\Http\Controllers\Admin\AdminNewsCategoriesController;

class NewsController extends Controller
{
    //

    public function index()
    {
        $title = array('pageTitle' => 'الاخبار');
        $language_id            				=   '1';

        $news = DB::table('news_to_news_categories')
            ->leftJoin('news_categories', 'news_categories.categories_id', '=', 'news_to_news_categories.categories_id')
            ->leftJoin('news', 'news.news_id', '=', 'news_to_news_categories.news_id')
            ->leftJoin('news_description','news_description.news_id','=','news.news_id')
            ->leftJoin('news_categories_description','news_categories_description.categories_id','=','news_to_news_categories.categories_id')

            ->select('news_to_news_categories.*', 'news_categories_description.categories_name','news_categories.*', 'news.*','news_description.*')
            ->where('news_description.language_id','=', $language_id)
            ->where('news_categories_description.language_id','=', $language_id)
            ->orderBy('news.news_id', 'ASC')
            ->paginate(20);

        $currentTime =  array('currentTime'=>time());
        return view(app('f').".news",$title)->with('news', $news);
    }

    //single blog
    public function single(Request $request){
        $title = array('pageTitle' => 'Edit News');
        $language_id      =   '1';
        try {
            $news_id = Crypt::decrypt ($request->id);
        } catch (DecryptException $e) {
            return view('errors.404');
        }
        $category_id	  =	  '0';

        $result = array();

        //get categories from other controller
        $myVar = new AdminNewsCategoriesController();
        $result['categories'] = $myVar->getNewsCategories($language_id);

        //get function from other controller
        $myVar = new AdminSiteSettingController();
        $result['languages'] = $myVar->getLanguages();


        $news = DB::table('news')
            ->leftJoin('news_description','news_description.news_id','=','news.news_id')

            ->select('news.*','news_description.*')
            //->where('news_description.language_id','=', $language_id)
            ->where('news.news_id','=', $news_id)
            ->get();

        $result['news'] = $news;


        //get new sub category id
        $newsCategory = DB::table('news_to_news_categories')->where('news_id','=', $news_id)->get();
        $result['categoryId'] = $newsCategory;


        $categories = DB::table('news_categories')
            ->leftJoin('news_categories_description','news_categories_description.categories_id', '=', 'news_categories.categories_id')
            ->select('news_categories.categories_id as id', 'news_categories_description.categories_name as name', 'news_categories.categories_id', 'news_categories_description.categories_description_id' )
            ->where('news_categories.categories_id','=', $result['categoryId'][0]->categories_id)->get();

        $result['editCategory'] = $categories;

        //print_r($result);
        return view(app('f').".singlepost", $title)->with('result', $result);
    }
}
