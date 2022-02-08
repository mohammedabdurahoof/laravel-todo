<?php

use App\Http\Controllers\ToDoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ToDoController::class, 'home'])->name('home');

Route::post('/store', [ToDoController::class, 'store'])->name('store');

Route::get('/edit/{todo}',[ToDoController::class, 'edit'])->name('edit');

Route::post('/update/{todo}', [ToDoController::class, 'update'])->name('update');

Route::post('/delete/{todo}', [ToDoController::class, 'delete'])->name('delete');

