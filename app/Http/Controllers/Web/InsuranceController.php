<?php

namespace App\Http\Controllers\Web;

use DB;
use Lang;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Controllers\Admin\AdminSiteSettingController;

class InsuranceController extends Controller
{
    //

    public function index()
    {
        $title = array('pageTitle' => "شركات التأمين فى مصر");

        $InsurancesData = array();
        $message = array();
        $errorMessage = array();

        $Insurances = DB::table('insurance')
            ->orderBy('id','ASC')
            ->get();


        $InsurancesData['message'] = $message;
        $InsurancesData['insurances'] = $Insurances;
        return view(app('f').".insurances", $title)->with('insurancesData', $InsurancesData);

    }

    //single blog
    public function single(Request $request)
    {
        try {
            $insurance_id = Crypt::decrypt($request->id);
        } catch (DecryptException $e) {
            return view('errors.404');
        }
        
        $insurance_data = DB::table('insurance')->where('id', '=', $insurance_id)->first();
    
        $pageTitle = $insurance_data->name ; 
        
        $results['page_name'] = $insurance_data->name;

        return view(app('f').".single_insurance", compact([
            'pageTitle' , 
            'results' ,
            'insurance_data'
        ]));
    }
}
