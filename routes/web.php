<?php

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


Route::get('/', function () {
    return view('welcome');
});
// PAGE
Route::get('/','PageController@home')->name('page.home');
Route::get('gioi-thieu','PageController@introduce')->name('page.introduce');
Route::get('bang-gia','PageController@price')->name('page.price');
Route::get('huong-dan','PageController@guide')->name('page.guide');
Route::get('hoi-dap','PageController@faq')->name('page.faq');
Route::get('lien-he','PageController@contact')->name('page.contact');
Route::get('noscript','PageController@no_script')->name('page.noscript');
Route::get('post/{slug?}','PageController@posts')->name('page.posts')->where('slug', '.+');
Route::get('search','PageController@search')->name('page.search');
Route::get('cc_online','PageController@statistics')->name('cc.online');
Route::get('view_online','OnlineController@view_online')->name('view_online');
// END-PAGE


Route::prefix('admink')->group(function() {
	//users
	Route::get('/', 'HomeController@index')->name('admin.home');
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::get('logout', 'HomeController@logout')->name('logout');
	Route::get('register', 'UsersController@register')->name('admin.register');
    Route::post('register', 'UsersController@store_user')->name('admin.store_register');
    Route::get('user', 'UsersController@index')->name('admin.user.index');
    Route::get('user/edit/{id}', 'UsersController@edit')->name('admin.user.edit');
    Route::post('user/edit/{id}', 'UsersController@update_user')->name('admin.user.update');
    Route::get('user/view/{id}', 'UsersController@view_detail')->name('admin.user.view_detail');
    Route::get('user/delete/{id}', 'UsersController@destroy')->name('admin.user.delete');
	
	//congigs
	Route::prefix('configs')->group(function() {
		Route::get('/','ConfigsController@index')->name('admin.configs.index');
		Route::post('/','ConfigsController@update')->name('admin.configs.update');
		Route::get('{type}','ConfigsController@show_type')->name('admin.configs.show_type');
	});
	
	//images
	Route::prefix('images')->group(function() {
		Route::get('/','ImagesController@default')->name('admin.images.default');
		Route::prefix('{type}')->group(function() {
			Route::get('/','ImagesController@index')->name('admin.images.index');
			Route::get('create','ImagesController@create')->name('admin.images.create');
			Route::post('create','ImagesController@store')->name('admin.images.store');
			Route::prefix('{id}')->group(function() {
				Route::get('edit','ImagesController@edit')->name('admin.images.edit');
				Route::post('edit','ImagesController@update')->name('admin.images.update');
				Route::get('delete','ImagesController@destroy')->name('admin.images.delete');
			});
		});
		Route::get('update_status_ajax/{id}','ImagesController@update_status_ajax')->name('admin.images.update_status_ajax');
		Route::get('view/{id}','ImagesController@view')->name('admin.images.view');
		Route::get('update_order_ajax/{id}','ImagesController@update_order_ajax')->name('admin.images.update_order_ajax');
	});

	//post
	Route::prefix('posts')->group(function() {
		Route::prefix('categories')->group(function() {
			Route::get('/','CategoriesController@index')->name('admin.cats.index');
			Route::get('create','CategoriesController@create')->name('admin.cats.create');
			Route::post('create','CategoriesController@store')->name('admin.cats.store');
			Route::prefix('{id}')->group(function() {
				Route::get('edit','CategoriesController@edit')->name('admin.cats.edit');
				Route::post('edit','CategoriesController@update')->name('admin.cats.update');
				Route::get('delete','CategoriesController@delete')->name('admin.cats.delete');
				Route::get('ajax-status','CategoriesController@ajax_switch')->name('admin.cats.ajax_switch');
				Route::get('ajax-order','CategoriesController@ajax_order')->name('admin.cats.ajax_order');
				Route::get('ajax-view','CategoriesController@ajax_view')->name('admin.cats.ajax_view');
			});
		});
		Route::get('/','PostsController@index')->name('admin.posts.index');
		Route::get('create','PostsController@create')->name('admin.posts.create');
		Route::post('create','PostsController@store')->name('admin.posts.store');
		Route::prefix('{id}')->group(function() {
			Route::get('edit','PostsController@edit')->name('admin.posts.edit');
			Route::post('edit','PostsController@update')->name('admin.posts.update');
			Route::get('delete','PostsController@delete')->name('admin.posts.delete');
			Route::get('ajax-status','PostsController@ajax_switch')->name('admin.posts.ajax_switch');
			Route::get('ajax-order','PostsController@ajax_order')->name('admin.posts.ajax_order');
			Route::get('ajax-view','PostsController@ajax_view')->name('admin.posts.ajax_view');
		});
	});
	
	//product
	Route::get('product','ProductController@index')->name('admin.product.index');
	Route::get('product/create','ProductController@create')->name('admin.product.create');
	Route::post('product/create','ProductController@store')->name('admin.product.store');
	Route::get('product/edit/{id}','ProductController@edit')->name('admin.product.edit');
	Route::post('product/edit/{id}','ProductController@update')->name('admin.product.update');
	Route::get('product/view/{id}','ProductController@view_detail')->name('admin.product.view');
	Route::get('product/delete/{id}','ProductController@delete')->name('admin.product.delete');
	Route::get('product/switch_ajax/{id}','ProductController@switch_ajax')->name('admin.product.switch_ajax');
	Route::get('product/ajax_order/{id}','ProductController@ajax_order')->name('admin.product.ajax_order');

	//Contact Footer
	Route::get('/newletter','NewletterController@get_list')->name('admin.newletter.index');
    Route::get('/newletter/{id}/delete','NewletterController@delete')->name('admin.newletter.delete');
    Route::get('/newletter/{id}/view-detail','NewletterController@view_detail')->name('admin.newletter.view_detail');

    //Faq
    Route::get('/faq', 'FaqController@index')->name('admin.faq.index');
    Route::get('/faq/create', 'FaqController@create')->name('admin.faq.create');
    Route::post('/faq/create', 'FaqController@store')->name('admin.faq.store');
    Route::get('/faq/{id}/delete', 'FaqController@delete')->name('admin.faq.delete');
    Route::get('/faq/switch-ajax', 'FaqController@switch_ajax')->name('admin.faq.switch_ajax');
    Route::get('/faq/view-detail', 'FaqController@view_detail')->name('admin.faq.view_detail');
    Route::get('/faq/ajax-order', 'FaqController@ajax_order')->name('admin.faq.ajax_order');
    Route::get('/faq/{id}/edit', 'FaqController@edit')->name('admin.faq.edit');
    Route::post('/faq/{id}/edit', 'FaqController@update')->name('admin.faq.update');
});
Route::post('contact_form_footer_ajax','PageController@contact_form_footer_ajax')->name('contact_form_footer_ajax');
Route::post('faq/postquestion', 'PageController@postquestion')->name('faq.postquestion');
Route::get('doupload','HomeController@upload_editor')->name('upload_editor');