<?php




//==============================================================================
Route::group(['prefix'=>'{account}'], function (){
    
    Route::group(['prefix'=>'{location}'], function (){

        //Menu Home
        Route::get('/{home?}', 'SitePublic\HomeController@index')->where('home', 'home');
        
        //Menu Patient Zone
        Route::group(['prefix'=>'patientezone'], function (){   
            
            //Menu Post Op Instructions
            Route::group(['prefix'=>'postopinstructions'], function (){               
                Route::get('/', 'SitePublic\PostOpIntructionsController@index');
                Route::get('/{id}', 'SitePublic\PostOpIntructionsController@getPostOpInstructions');
            });
            
            //Menu Post Videos
            Route::group(['prefix'=>'videos'], function (){                
                Route::get('/', 'SitePublic\VideosController@index');
                Route::get('/{id}', 'SitePublic\VideosController@getArticles');    
            });        
            
            //Menu Articles
            Route::group(['prefix'=>'articles'], function (){
                Route::get('/', 'SitePublic\ArticlesController@index');
                Route::get('/{id}', 'SitePublic\ArticlesController@getVideo');    
            });
            
        }); 
        
        //Menu Services
        Route::group(['prefix'=>'services'], function (){
            Route::get('/', 'SitePublic\ServicesController@index');
        });  
        
        //Menu Latest News
        Route::group(['prefix'=>'latestnews'], function (){            
            Route::get('/', 'SitePublic\LatestNewsController@index');            
        });
        
        //Menu Contact
        Route::group(['prefix'=>'contact'], function (){
            Route::get('/', 'SitePublic\ContactController@index'); 
        });  
        
    });
});
//==============================================================================
