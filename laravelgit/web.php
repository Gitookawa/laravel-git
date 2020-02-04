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
 <head>
 <title>HELLO</title>
<style>
 body {font-size: 16pt; color:#999; }
 h1 { font-size:100pt; text-align:right; color:#eee;
     margin-40px 0px -50px 0px;}
 </style>
 </head>
 <body>
    <h1>HELLO</h1>
       <p>This is sample page.</p>
       <p>これは、サンプルで作ったページです。</p>
  </body>
</html>
EOF;

Route::get('hello',function () use ($html){
	return $html;
});
 */
Route::get('mouse',function(){
	return view('mouse.index');
});
Route::get('test','testController@index');
Route::get('test1','test1Controller@index');
Route::get('rensyu9','rensyu9@index');
Route::get('rensyu6','rensyu6@index');//練習６
Route::get('first/{id?}/{pass?}','first@index');
Route::get('first/{id?}/{pass?}','first@index');
Route::get('syamu1/{id?}','syamu1@index');
Route::get('egg','egg@index');/*eggは動かない*/
Route::get('syamu','syamu@index');
Route::get('cat','catcontroller@index');
Route::get('dog','dog');
Route::get('bye','goodbye@index');
Route::get('bye/other','goodbye@other');
Route::get('bye1/{id?}/{pass?}','goodbye1@index');
Route::get('bye2','goodbye2@index');
Route::get('rensyu','rensyu@index');//練習用のクラス
Route::get('rensyu2/{id?}/{pass?}','rensyu2@index');//練習用のクラス２
Route::get('rensyu3/{syamu?}/{syamugame?}','rensyu3@index');//練習用のクラス３
Route::get('layouts', 'layoutsController@index');
Route::get('layouts2', 'layouts2Controller@index');
Route::get('rensyu4','rensyu4@index');//練習用のクラス４
Route::get('rensyu4/other','rensyu4@other');//練習用のクラス４
Route::get('rensyu5','rensyu5@index');//練習５
Route::get('rensyu7','rensyu7@index');//練習７
Route::post('rensyu7','rensyu7@post');//練習７
Route::get('rensyu8','rensyu8@index');
Route::post('rensyu8','rensyu8@post');
Route::get('rensyu9','rensyu9@index');
Route::post('rensyu9','rensyu9@post');
Route::get('rensyu10','rensyu10@index');
Route::post('rensyu10','rensyu10@post');
Route::get('rensyu11','rensyu11@index');
Route::post('rensyu11','rensyu11@post');
Route::get('black','HelloController@index');
Route::get('blue/{id?}/{pass?}' ,'HelloController@index2');
Route::get('bladetest2','bladetest2@index');
Route::post('bladetest2','bladetest2@post');
Route::get('bladetest','bladetest@index');
Route::post('bladetest','bladetest@post');

