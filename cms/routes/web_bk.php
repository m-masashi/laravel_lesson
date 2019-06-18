<?php

/*
* 本のダッシュボード表示
*/

Route::get('/', function () {
    //
});

/*
* 新「本」を追加
*/

Route::post('/books', function (Request $request) {
    //
});

/*
* 本を削除
*/

Route::delete('/book/{book}', function (Book $book) {
    //
});
