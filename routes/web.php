<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//BASIC ROUTING
Route::get('/hello', function() {
    return 'Hello World';
});
// when write the URL to call the route: localhost/PWL_2024/public/hello,
//that will show text Hello World

Route::get('/world', function () {
    return 'World';
});
// when write the URL to call the route: localhost/PWL_2024/public/world,
//that will show text World

Route::get('/', function () {
    return 'Welcome';
});
// when write the URL to call the route: localhost/PWL_2024/public/,
//that will show text Welcome

Route::get('/about', function() {
    return '2241720171, Mochamad Wildani Azizi';
});
// when write the URL to call the route: localhost/PWL_2024/public/about,
//that will show text 2241720171, Mochamad Wildani Azizi


//ROUTE PARAMETERS
Route::get('/user/{name}', function($user) {
    return 'My name is ' .$user;
});
// when write the URL to call the route: localhost/PWL_2024/public/user/{name},
//{name} that means name in there can change appropriate to the name from user or
//name after ...user/

//c. write the URL to call the route: localhost/PWL_2024/public/user/ without name,
//   you cannot calling everything cause there's no  default parameter, or cause
//   there's no route that call so the result is not found

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentID) {
    return 'Pos ke-' .$postId. " Komentar ke-: " .$commentID;
});
// when write the URL to call the route: localhost/PWL_2024/public/posts/1/comments/5
// that will show text Pos ke-1 Komentar ke-: 5, 1 is value from prameter post
// and 5 is value from parameter comment

Route::get('/articles/{id}', function($articlesId) {
    return 'Article Page with ID ' .$articlesId;
});
// when write the URL to call the route: localhost/PWL_2024/public/articles/3
// that will show text Article Page with ID 3, 3 is value from prameter id


//OPTIONAL PARAMETERS
Route::get('/user/{name?}', function ($name=null) {
    return 'My name is '.$name;
});
// when write the URL to call the route: localhost/PWL_2024/public/user/
// that will show text my name is, because the name is null, and in .../user/{name?}
//there '?' symbol that show the name is optional, so if there any name after .../user/
//that will display my name is {name} with the name that add before

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
// when write the URL to call the route: localhost/PWL_2024/public/user/
// that will show text Nama saya John cause there's default value from parameter
// that call John
