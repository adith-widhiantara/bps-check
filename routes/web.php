<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemindahBukuanController;

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

Route::get('/', [PemindahBukuanController::class, 'welcome'])->name('welcome');

Route::post('find', [PemindahBukuanController::class, 'find'])->name('find.bps');

Route::post('/', [PemindahBukuanController::class, 'upload'])->name('upload.data');

Route::get('all', [PemindahBukuanController::class, 'all'])->name('all');

Route::get('{pemindahBukuan}', [PemindahBukuanController::class, 'detail'])->name('detail');
