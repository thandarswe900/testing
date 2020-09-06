<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//});
route::get('/', 'PageController@mainfun')->name('mainpage');

route::get('brand/{id}', 'PageController@brandfun')->name('brandpage');

route::get('itemdetail/{id}', 'PageController@itemdetailfun')->name('itemdetailpage');


route::get('promotion', 'PageController@promotionfun')->name('promotionpage');


route::get('shoppingcart', 'PageController@shoppingcartfun')->name('shoppingcartpage');

route::get('subcategory/{id}', 'PageController@subcategoryfun')->name('subcategorypage');

//Backend

route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');





route::middleware('role:Admin')->group(function(){


route::resource('items','ItemController');

route::resource('brands','BrandController');

route::resource('categories','CategoryController');

route::resource('subcategories','SubcategoryController');


});

route::resource('orders','OrderController');
Auth::routes();
route::get('loginform', 'PageController@loginfun')->name('loginpage');
route::get('registerform', 'PageController@registerfun')->name('registerpage');

Route::get('/home', 'HomeController@index')->name('home');
