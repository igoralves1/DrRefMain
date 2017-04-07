<?php

namespace App\Http\Controllers\SitePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index($account,$location) {
        
        $loc=explode("_", $location);
        $locale = $loc[0];
        $lang= $loc[1]; 
        App::setLocale($lang);
        
            
        return view('homeProfPublic')->with(['account' => $account,'active' => 'home','lang'=>$lang,"locale"=>$locale]);  
    }
        
}
