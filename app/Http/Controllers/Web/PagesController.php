<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\App\CategoriesController;
use DB;
use Lang;


class PagesController extends Controller
{
    //
    public function page(Request $request ,$page_name)
    {

        $language_id = '1';
        $results = array();

        if ( $this->check_page($page_name) && $this->is_active($page_name) )
        {
            
            $page_path = $request->decodedPath();   

            // Get_Page_ID_Starts

            $page_data = DB::select('select * from pages where slug = ?', [$page_path]);
            
            foreach ($page_data as $data) {

                $page_id = $data->page_id;

            }

            // Get_Page_ID_ENDS

            // GET_PAGE_NAME_STARTS
            
            $page_name_data = DB::select('select * from pages_description where page_id = ? and language_id = ?', [
                $page_id,
                $language_id
            ]);

            foreach ($page_name_data as $data) {
                
                $page_name = $data->name;

            }

            // GET_PAGE_NAME_ENDS
            
            $page_data = DB::table('pages_description')
            ->where('page_id', '=', $page_id)
            ->where('language_id', '=', $language_id)
            ->get()
            ;

            // Retrived Data Starts
            $pageTitle = $page_name;
            $results['page_name'] = $page_name;
            $results['result'] = $page_data;

            return view(app('f').".single-page")
            ->with('results', $results)
            ->with('pageTitle', $pageTitle);
        }

        else {
            return view(app('err').".404");
        }
        
        
    }


    /**
     * ================ Starts ================
     * Checking if Page Exists
     * Checking if Page is Active
     */
 
     public function check_page($page)
    {
        $select_page = DB::select('select * from pages where slug = ?', [$page]);
        if ($select_page) {
            return true;
        } else {
            return false;
        }
    }

    public function is_active($page)
    {
        $select_page = DB::select('select status from pages where slug = ?', [$page]);
        foreach ($select_page as $page) {

            $page_status = $page->status;

        }
        
        if ( $page_status == 1 ) {

            return true;
        
        }
        
        return false ;
    }    

    /**
     * Checking if Page Exists
     * Checking if Page is Active
     * ================ Ends ================
     */
}

