<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/{tag}', 'PostsController@tagged')->name('posts.tagged');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/author/{author}', 'AuthorController@index')->name('author');

Route::get('/activate/token/{token}', 'Auth\ActivationController@activate')->name('auth.activate');
Route::get('/activate/resend', 'Auth\ActivationController@resend')->name('auth.activate.resend');

Route::group(['namespace' => 'Admin'], function () {
  Route::group(['prefix' => 'admin', 'middleware' => 'role:author'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.home');

    Route::group(['prefix' => 'blog'], function () {
      Route::get('/', 'PostController@index')->name('post.index');
      Route::get('/compose', 'PostController@compose')->name('post.compose');
      Route::post('/compose', 'PostController@composePost');

      Route::get('/edit/{post}', 'PostController@edit')->name('post.edit');
      Route::post('/edit/{post}', 'PostController@editPost');

      Route::get('/delete/{post}', 'PostController@delete')->name('post.delete');
    });
  });
});

Auth::routes();
