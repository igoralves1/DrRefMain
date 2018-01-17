<?php

namespace App\Http\Controllers\SitePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(Request $req,$account,$location) {
        
        
//   dd(Route::current());		
//   $currentPath= "uuu";		
//   $currentPath= Route::getFacadeRoot()->current()->uri();		
//   $currentPath= Route::getFacadeRoot();		
//   $currentPath= Route::pathInfo();		
//   dd($currentPath);		
//   $uri = Illuminate\Http\Request::path();		
   //$req=Illuminate\Http\Request;		
   //dd($req->path());
   dd($req->path());
      
        
        $loc=explode("_", $location);
        $locale = $loc[0];
        $lang= $loc[1]; 
        App::setLocale($lang);
        
            
        return view('homeProfPublic')->with(['account' => $account,'active' => 'home','lang'=>$lang,"locale"=>$locale]);  
    }
        
}
