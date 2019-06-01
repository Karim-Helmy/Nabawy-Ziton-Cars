<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

//validator is builtin class in laravel
use Validator;
use App;
use Lang;
use DB;
//for password encryption or hash protected
use Hash;
use App\Administrator;

//for authenitcate login data
use Auth;

//use Illuminate\Foundation\Auth\ThrottlesLogins;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

//for requesting a value 
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;


class AdminInsuranceController extends Controller
{
	//listingCountries
	public function listingCountries(Request $request){
		$title = array('pageTitle' => Lang::get("labels.ListingInsurance"));
		
		$countryData = array();
		$message = array();
		$errorMessage = array();
		
		$countries = DB::table('insurance')
			->orderBy('id','ASC')
			->paginate(40);
		
		
		$countryData['message'] = $message;
		$countryData['countries'] = $countries;
		
		return view("admin.listingInsurance",$title)->with('countryData', $countryData);
	}
	
	//addCountry
	public function addCountry(Request $request){
		$title = array('pageTitle' => Lang::get("labels.AddInsurance") );
		
		$countryData = array();
		$message = array();
		$errorMessage = array();
		
		$countryData['message'] = $message;
		
		return view("admin.addInsurance",$title)->with('countryData', $countryData);
	}
		
	//addNewCountry	
	public function addNewCountry(Request $request){
		
		$title = array('pageTitle' => Lang::get("labels.AddInsurance"));
		$countryData = array();
        if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'.'.$image->getClientOriginalName();
            $image->move('resources/assets/images/news_images/', $fileName);
            $uploadImage = 'resources/assets/images/news_images/'.$fileName;
        }else{
            $uploadImage = '';
        }
        $categories_id = DB::table('insurance')->insertGetId([

            'name'  		 =>   $request->name,
            'kest'	     =>   $request->kest,
            'taghtya'	     =>   $request->taghtya ,
            'nesbat_ameel'	 =>   $request->nesbat_ameel ,
            'madanya'	 =>   $request->madanya ,
            'destruction'	 =>   $request->destruction ,
            'ehlak'	     =>   $request->ehlak ,
            'syana'	     =>   $request->syana ,
            'aksa'	     =>   $request->aksa ,
            'address'	     =>   $request->address ,
            'sarf'	     =>   $request->sarf ,
            'image'     	 =>   $uploadImage ,
            'created_at'	 =>   date('Y-m-d h:i:s'),

					]);
									
		$countryData['message'] = Lang::get("labels.InsuranceAddedMessage");
		return view('admin.addInsurance', $title)->with('countryData', $countryData);
	}
	
	//editCountry
	public function editCountry(Request $request){		
		$title = array('pageTitle' => Lang::get("labels.EditInsurance"));
		$countryData = array();		
		$countryData['message'] = array();
		
		$country = DB::table('insurance')->where('id', $request->id)->get();
		$countryData['country'] = $country;		
		
		return view("admin.editInsurance",$title)->with('countryData', $countryData);
	}
	
	//updateCountry
	public function updateCountry(Request $request){
		
		$title = array('pageTitle' => Lang::get("labels.EditCountry"));
		
		$countryData = array();		
		$countryData['message'] = Lang::get("labels.InsuranceUpdatedMessage");
        if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'.'.$image->getClientOriginalName();
            $image->move('resources/assets/images/product_images/', $fileName);
            $uploadImage = 'resources/assets/images/product_images/'.$fileName;
        }else{
            $uploadImage = $request->oldImage;
        }
        $countryUpdate = DB::table('insurance')->where('id', $request->id)->update([
            'name'  		 =>   $request->name,
            'kest'	     =>   $request->kest,
            'taghtya'	     =>   $request->taghtya ,
            'nesbat_ameel'	 =>   $request->nesbat_ameel ,
            'madanya'	 =>   $request->madanya ,
            'destruction'	 =>   $request->destruction ,
            'ehlak'	     =>   $request->ehlak ,
            'syana'	     =>   $request->syana ,
            'aksa'	     =>   $request->aksa ,
            'address'	     =>   $request->address ,
            'sarf'	     =>   $request->sarf ,
            'image'     	 =>   $uploadImage ,
					]);
			
		$country = DB::table('insurance')->where('id', $request->id)->get();
		$countryData['country'] = $country;
		
		return view("admin.editInsurance",$title)->with('countryData', $countryData);
	}
	
	//deleteCountry
	public function deleteCountry(Request $request){
		DB::table('insurance')->where('id', $request->id)->delete();
		return redirect()->back()->withErrors([Lang::get("labels.InsuranceDeletedMessage")]);
	}
	
	

}
