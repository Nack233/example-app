<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function () {
    // return view('myroute');
    $data = ['val_a' => 'Hello World'];
    return view('myfolder.mypage', $data);
});

Route::post('/my-route', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myfolder.mypage', $data);
});

?>
// php artisan serve
