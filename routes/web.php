<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index']) -> name('home');
Route::get('/create', [StudentController::class, 'create']) -> name('create');
Route::post('/create', [StudentController::class, 'store']) -> name('store');
Route::get('/edit/{id}', [StudentController::class, 'edit']) -> name('edit');
Route::post('/update/{id}', [StudentController::class, 'update']) -> name('update');
Route::delete('/delete/{id}', [StudentController::class, 'delete']) -> name('delete');


