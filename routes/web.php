<?php
Route::get('/', 'TasksController@index');

//下記はControllerを経由せずViewに流している（非推奨）
// Route::get('/', function () {
//     return view('welcome');
// });

//下記の7つのルーティングをまとめたもの
Route::resource('tasks', 'TasksController');

// tasks/{id}というURLに対してgetのリクエストを送るid = 1のTaskを表示する, Controller名@アクション名
// タスクの詳細ページ表示
// Route::get('tasks/{id}', 'TasksController@show');

//  タスクの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('tasks', 'TasksController@store');
// 上記処理は何らかのデータを渡す必要があるから、新規作成用のフォームページを追加
//  index: showの補助ページ（？）,->name　は「名前付きルート」で特定のルートへのURLを生成したり、リダイレクトしたりする場合に使う
// Route::get('tasks', 'TasksController@index')->name('tasks.index');;
//  create: 新規作成用のフォームページ
// Route::get('tasks/create', 'TasksController@create')->name('tasks.create');;

// タスクの更新処理（編集画面を表示するためのものではありません）
// Route::put('tasks/{id}', 'TasksController@update');

//メッセージを削除
// Route::delete('tasks/{id}', 'TasksController@destroy');

//更新用のフォームページ
// Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');


// ユーザ登録(path, Controller名@アクション名)
//->nam()は、名前を付けているだけ。
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');