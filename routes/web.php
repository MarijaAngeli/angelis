<?php

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    
    //publish posts
    Route::post('/posts/{id}','PostController@publish')->name('posts.publish');

    // trash, kill, restore posts
    Route::get('trashed','PostController@trashed')->name('posts.trashed');
	Route::get('kill/{id}','PostController@kill')->name('post.kill');
	Route::get('restore/{id}','PostController@restore')->name('post.restore');

    //categories
    Route::get('/category/create','CategoryController@create')->name('category.create');
	Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
	Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
	Route::get('/categories','CategoryController@index')->name('categories');
	Route::post('/category/store','CategoryController@store')->name('category.store');
	Route::post('/category/update/{id}','CategoryController@update')->name('category.update');

	//user's profile
    Route::get('profile', 'UserController@profile');
    Route::post('profile', 'UserController@update_avatar');
    Route::post('profile', 'UserController@update_about');

    //tags
    Route::get('/tags','TagController@index')->name('tags');
	Route::get('/tag/create','TagController@create')->name('tag.create');
	Route::post('/tag/store','TagController@store')->name('tag.store');
	Route::get('/tag/edit/{id}','TagController@edit')->name('tag.edit');
	Route::post('/tag/update/{id}','TagController@update')->name('tag.update');
	Route::get('/tag/delete/{id}','TagController@destroy')->name('tag.delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//search
Route::get('/results',function(){
	$posts = \App\Post::where('title','like','%' . request('query') . '%')->get();
	return view('results')->with('posts',$posts)
						 ->with('title', 'Search results: ' . request('query '))
    					 ->with('query', request('query'));
});

//pages
Route::get('/', 'PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/prices','PagesController@prices');
Route::get('/blog','BlogController@index');

Route::get('/contact','ContactsController@index');
Route::post('/contact/store', 'ContactsController@store')->name('contact.store');

Route::get('blog/{slug}','BlogController@singlePost')->name('post.single');

Route::get('/category/{id}', 'BlogController@category')->name('category.single');
Route::get('/tag/{id}', 'BlogController@tag')->name('tag.single');



