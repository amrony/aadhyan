<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Http;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::post('contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('test', function(){
   
//     $client = new \GuzzleHttp\Client();
//     $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

//     echo $response->getStatusCode(); // 200
//     echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
//     $result =  $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
//     dd($result);
// });


