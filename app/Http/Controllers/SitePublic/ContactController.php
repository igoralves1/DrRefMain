<?php

namespace App\Http\Controllers\SitePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    public function index($account,$location) {
        
        $loc=explode("_", $location);
        $locale = $loc[0];
        $lang= $loc[1]; 
        App::setLocale($lang);       
            
        return view('contactProfPublic')->with(['account' => $account,'active' => 'contact','lang'=>$lang,"locale"=>$locale]); 
    }
}
