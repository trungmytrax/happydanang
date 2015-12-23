<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
Route::get('/', function () {
	return view('homes.index');
});
Route::get('admin', function () {
	return view('admins.admin_template');
});
Route::get('test', 'TestController@index');
$router->get('admin/add-new', function () {
	return 'AddNewsController@index';
});

Route::get('products', 'ProductsController@index');
Route::get('products/{products_id}', function () {
	return view('products.show');
});
/*Route::get('files/list', function ()
{
	dd('ddddddddd');
});*/
Route::get('files/list',['as' =>'fileList', 'uses' => 'ProductsController@fileList']);
Route::get('files/upload',['as' =>'fileUpload', 'uses' => 'ProductsController@fileUpload']);
// Route::post('files/list','ProductsController@fileList');
// Route::post('files/upload','ProductsController@fileUpload');
/*Route::get('admin/products', function () {
return view('admins.products.index');
});*/
Route::resource('admin/products', 'AdminProductsController');
/*Route::group(['as' => 'admin::'], function () {
//TODO: before=>'login'
$controller = 'Admin' . ucwords(Request::segment(2)) . 'Controller';
$segment3 = Request::segment(3);
switch ($segment3) {
case 'create':
return Route::get('admin/products/create', $controller . '@' . $segment3);
break;
case 'edit':
case 'delete':
case 'show':

default:
return Route::get(Request::path(), $controller . '@index');
break;
}

});*/