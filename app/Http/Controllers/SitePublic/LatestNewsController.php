<?php

namespace App\Http\Controllers\SitePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LatestNewsController extends Controller
{
    public function index($account,$location) {
        
        $loc=explode("_", $location);
        $locale = $loc[0];
        $lang= $loc[1]; 
        App::setLocale($lang);       
            
        return view('instructionspoProfPublic')->with(['account' => $account,'active' => 'latestnews','lang'=>$lang,"locale"=>$locale]);
    }
    
    public function getNews($account,$location,$id) {
        
        $loc=explode("_", $location);
        $locale = $loc[0];
        $lang= $loc[1]; 
        App::setLocale($lang);
        
        return view('instructionspoProfPublic')->with(['account' => $account,'active' => 'latestnews','lang'=>$lang,"locale"=>$locale]);
    }
}
