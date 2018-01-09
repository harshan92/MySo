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
})->name('home');


Route::group(['middleware' => ['web']], function () {

    // Activation Routes
    Route::post('/signup', ['as' => 'signup', 'uses' => 'UserController@postSignUp']);
    Route::post('/signin', ['as' => 'signin', 'uses' => 'UserController@postSignIn']);
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'PostController@getDashboard', 'middleware'=>'auth']);
    Route::post('/createpost', ['as' => 'post.create', 'uses' => 'PostController@postCreatePost','middleware'=>'auth']);
    Route::get('/delete-post/{post_id}', ['as' => 'post.delete', 'uses' => 'PostController@getDeletePost', 'middleware'=>'auth']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'UserController@getLogout']);
    Route::post('/edit', ['as' => 'edit', 'uses' => 'PostController@postEditPost']);
    Route::post('/like', ['as' => 'like', 'uses' => 'PostController@postLikePost']);
    Route::get('/account', ['as' => 'account', 'uses' => 'UserController@getAccount','middleware'=>'auth']);
    Route::post('/updateAccount', ['as' => 'account.save', 'uses' => 'UserController@postSaveAccount']);

    Route::get('/userimage/{filename}', ['as' => 'account.image', 'uses' => 'UserController@getUserImage']);
});
Auth::routes();

