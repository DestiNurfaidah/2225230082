<?php

use App\Http\Controllers\destii;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [destii::class, 'create' ]);
Route::resource('desti', destii::class);
Route::DELETE('desti/$data->Nama', [destii::class, 'destroy' ]);


