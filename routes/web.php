<?php
// Route::get('/',function(){
// 	return view('welcome');
// });
Route::get('/', [
	'uses' => 'PostController@getIndex',
	'as' => 'blog.index'
]);

Route::get('post/{id}', [
	'uses' => 'PostController@getPost',
	'as' => 'blog.post'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function(){
	Route::get('',[
		'uses' => 'PostController@getAdminIndex',
		'as' => 'admin.index'
	]);
	Route::get('create',[
		'uses' => 'PostController@getAdminCreate',
		'as' => 'admin.create'
	]);
	Route::get('edit/{id}',[
		'uses' => 'PostController@getAdminEdit',
		'as' => 'admin.edit'
	]);
	Route::get('edit',[
		'uses' => 'PostController@postAdminUpadate',
		'as' => 'admin.update'
	]);


});


