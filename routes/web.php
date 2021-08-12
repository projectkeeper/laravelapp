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

/*
$html = <<<EOF
<html>
<body>
<h1>hello world</h1>
<p>This is beginning to study Laravel!!</p>
<p>これは、Laravelで作ったのサンプルページです!!</p>
</body>
</html>
EOF;

Route::get('hello', function (){
    return '<html><body><h1>hello world</h1><p>This is beginning to study Laravel!!</p></body></html>';
});

Route::get('hello', function () use ($html){
    return $html;
});


Route::get('hello/{msg?}', function ($msg = 'Nothing special') {
$html = <<<EOF
<html>
<body>
<h1>hello world</h1>
<p>This is beginning to study Laravel!!</p>
<p>これは、Laravelで作ったのサンプルページです!!</p>
<p>$msg</p>
</body>
</html>
EOF;

  return $html;
});
*/

Route::get('open_login', function(){
  return view('login.login');
});

/**
ログイン処理
**/
Route::post('exe_login','LoginController@exe_login');
Route::get('exe_login','LoginController@exe_login');

/**
お知らせ情報
**/
Route::get('ntf_init', 'NtfController@index');
Route::post('ntf_init', 'NtfController@post');
Route::get('ntf_search', 'NtfController@index');

/**
ログインユーザ情報
**/
Route::get('user_info', 'UserInfoController@index');
Route::post('user_info', 'UserInfoController@post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
