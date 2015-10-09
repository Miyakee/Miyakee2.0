<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});
//Route::get('/article/index', 'ArticleController@index');
Route::controller('adminLogin', 'LoginController');
Route::filter('is_login',function(){
    if(!Session::get('is_login')){
        return Redirect::to('adminLogin');
    }
});
Route::group(array('before' => 'is_login'),function() {

    Route::get('/admin', 'AdminController@index');
    Route::controller('conment','ConmentController');
    Route::controller('mine','MineController');
    Route::controller('article','ArticleController');
    Route::controller('picture','PictureController');


});
Route::controller('zone','IndexController');

Route::controller('detail','DetailController');

//Route::controller('Admin','AdminController');
