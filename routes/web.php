<?php

use App\Models\Fruit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

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

Route::get('/test',function(){
    Fruit::factory(2)->create();
    return 'Sudah dijalankan';
});

Route::get('/bikin-buah',[FruitController::class,'store']);
Route::get('/buah',[FruitController::class,'index'])->name('buah');
