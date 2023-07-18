<?php

use App\Http\Controllers\Admin\ExtranetPageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
});
Route::get('/migrar-bd', function () {
    echo Artisan::call('migrate:refresh');
    echo Artisan::call('db:seed');

});
//---------------------------------------------------------------------------------
Route::get('/', [ExtranetPageController::class, 'index'])->name('index');
Route::get('/categoria/{id}', [ExtranetPageController::class, 'categorias'])->name('categorias');
