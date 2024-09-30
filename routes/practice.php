<?php

use Illuminate\Support\Facades\Route;

/*「http://◯◯◯◯.jp/XXX というアクセスが来たときに、 
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください*/

Route::get('XXX','AAAController@bbb');