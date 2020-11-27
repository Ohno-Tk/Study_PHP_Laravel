<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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


Route::get('/hello', [HelloController::class,'index']);
Route::get('/hello/other', [HelloController::class,'other']);


/* Route::get('/hello/{id?}/{pass?}', [HelloController::class,'index']); */

/* Route::get('/hello', [HelloController::class,'index']); */

/* Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is samplw page.</p></body></html>';
}); */

/* Route::get('hello/{msg}', function ($msg) {

    $html = <<<EOF
    <html>
    <head>
    <title>Hello</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {foont-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; }
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}<p>
        <p>これは、サンプルページです。</p>
    </body>
    </html>
    EOF;

    return $html;
}); */

