<?php

Route::get('/', function () {
    return view('home');//Home do website
});



Route::group(['prefix'=>'videos'], function (){

    Route::get('/', function () {
        return "todos os videos";//Todos os videos
    });
    Route::get('/{id}', function ($id) {
        return "Video => $id";//Um video especifico
    });

});

Route::group(['prefix'=>'articles'], function (){

    Route::get('/', function () {
        return "todos os articles";//Todos os videos
    });
    Route::get('/{id}', function ($id) {
        return "Article => $id";//Um video especifico
    });

});


Route::get('/listCity','ProfessionalController@listCity');
Route::get('/getCity/{id}',['uses'=>'ProfessionalController@getCity']);


//https://laravel.com/docs/5.4/routing#route-group-sub-domain-routing
//Route::group(['domain' => '{account}.myapp.com'], function () {
//    Route::get('user/{id}', function ($account, $id) {
//        //
//    });
//});
//Route::group(['domain' => '{account}.dref.app'], function ($account) {
//   
//        return "account=>$account";
//});

//Route::group(['prefix'=>'{account}'], function (){//Todas as Rotas aqui dentro serao api/user
//
//    Route::get('/', function () {
//        return "todos os articles";//Todos os videos
//    });
//    Route::get('/{id}', function ($id) {
//        return "Article => $id";//Um video especifico
//    });
//
//})->where('username', '[A-Za-z]+');//End of Route::group(['prefix'=>'user'], function (){

Route::group(['prefix'=>'{account}'], function (){

    Route::get('/', function ($account) {
        return view('homeclientpublic');//Home do website
    });

    Route::group(['prefix'=>'patientezone'], function (){
        Route::get('/', function ($account) {
           return "user $account - all patientezone";//Ex myService.com/Paul/videos
        });

        Route::get('/{id}', function ($account, $id) {
           return "user $account patientezone => $id";//Ex myService.com/Paul/videos/id
        });
        //Mostrar informacoes importante para o paciente
        //ter uma lista de procedimentos.
        //o profissional escolhe qual recomendacao sera enviada para o seu paciente
    });
    
    Route::group(['prefix'=>'videos'], function (){
        Route::get('/', function ($account) {
           return "user $account - all videos";//Ex myService.com/Paul/videos
        });

        Route::get('/{id}', function ($account, $id) {
           return "user $account video => $id";//Ex myService.com/Paul/videos/id
        });
        
        //mostrar videos criados pelo profissional
    });

    Route::group(['prefix'=>'articles'], function (){
        Route::get('/', function ($account) {
           return "user $account - all articles";//Ex myService.com/Paul/articles
        });

        Route::get('/{id}', function ($account, $id) {
           return "user $account articles => $id";//Ex myService.com/Paul/articles/id
        });
        //Artigo escrito pelo profissional.
        //Sera enviado como push para a app movel de cada paciente registrado
    });
    
    Route::group(['prefix'=>'services'], function (){
        Route::get('/', function ($account) {
           return "user $account - services";//Ex myService.com/Paul/articles
        });
        //Time
        //Fotos da clinica
        //Servicos oferecidos
    });
    
    Route::group(['prefix'=>'latestnews'], function (){
        Route::get('/', function ($account) {
           return "user $account - LATEST NEWS";//Ex myService.com/Paul/articles
        });
        //LATEST NEWS
        //Display time line vertical
        //Pequenas publica;'oes como um blog. Espaco para foto/video texto. poucas linhas
    });
    
    Route::group(['prefix'=>'contact'], function (){
        Route::get('/', function ($account) {
           return view('contactclientpublic');//Home do website
           
        });
        //Mostrar mapa ou mapas, caso o profissional trabalhe em mais de um consultorio.
        //Mostrar zona de marcar consulta hora/dia/mes/ano
        //Enviar e-mail para dminstrador
    });
    
    
//Nao precisamos do filtro pois so existe 2 cenarios:
//    1- as paralavras enviadas devrao fazer um match com as urls do sistema de base. tais como video, articles, entre outras.
//    2- no outro cenario a string sera recuperada dentro de ['prefix'=>'{account}'] para ser testda na base de dados. O filtro para evitar injection sera feito antes de 
//        fazer a query  na tabela user. Se o nome existe retorna o id do usuario para criar a pagina com od dados pertinentes. se n'ao retorna uma pagina 404'

});


Route::group(['prefix'=>'private'], function (){
    Route::group(['prefix'=>'{account}'], function (){
        Route::get('/', function ($account) {
            return "private user $account home page";//Ex myService.com/Paul
        });

        Route::group(['prefix'=>'videos'], function (){
            Route::get('/', function ($account) {
               return "private user $account - all videos";//Ex myService.com/Paul/videos
            });

            Route::get('/{id}', function ($account, $id) {
               return "private user $account video => $id";//Ex myService.com/Paul/videos/id
            });
        });

        Route::group(['prefix'=>'articles'], function (){
            Route::get('/', function ($account) {
               return "private user $account - all articles";//Ex myService.com/Paul/articles
            });

            Route::get('/{id}', function ($account, $id) {
               return "private user $account articles => $id";//Ex myService.com/Paul/articles/id
            });
        });
        
        
    });
});

/*

http://unify/page_3_columns.html
-Maps



http://unify/page_misc_sticky_footer.html
-Footer preso na pagina




http://unify/page_profile_history.html
http://unify/shortcode_timeline2.html
-Timeline 2
  

  
  
http://unify/page_search_table.html
-Search results
 * 
 * 

http://unify/page_profile.html
http://unify/page_profile_me.html
http://unify/page_profile_users.html  => professional web
http://unify/page_profile_settings.html





http://unify/page_contact1.html
http://unify/page_contact2.html
http://unify/page_contact3.html
http://unify/page_contact4.html












 */
















//Esta parte deve estar submetida ao Middleware
