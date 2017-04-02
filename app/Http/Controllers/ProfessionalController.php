<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

class ProfessionalController extends Controller
{
    public function listCity()
    {
              
        $client = new Client(['base_uri' => 'http://drefapi.com/']);  
        $response = $client->request('GET', 'api/user/listCity');
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);
        //echo"<pre>";
        //print_r(get_class_methods($response));
        //print_r(get_class_methods($body));
        //print_r($arr);
        //echo"</pre>";
        //dd(json_decode($content,true));
        return $arr;
    }
    public function getCity($id)
    {        
        $client = new Client(['base_uri' => 'http://drefapi.com/']); 
        $response = $client->request('GET', "api/user/getCity/$id ");
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);
        return $arr;
    }
    
    public function reqTest1(Request $req) {
        dd($req->path());
    }
    public function reqTest2() {
//        dd("sfg");
//        dd(Request::route()->getName());
        dd(Request::capture()->path());
    }
}
