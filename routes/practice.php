<?php

use Illuminate\Support\Facades\Route;


/*「http://◯◯◯◯.jp/XXX というアクセスが来たときに、 
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください*/
use App\Http\Controllers\AAAController;
//                       ^^^^^^^^^^^^^
//                       コントローラ AAAController を使用するという宣言
Route::get('XXX','AAAController@bbb');