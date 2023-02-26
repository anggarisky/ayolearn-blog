<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\LarabergController;
use UniSharp\LaravelFilemanager\Lfm;
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
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('tutorial/{slug}', [FrontController::class, 'details'])->name('details');



Route::post('laraberg/upload', [LarabergController::class, 'upload'])->name('laraberg.upload');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/tutorial', [TutorialController::class, 'index'])->name('admin.index.tutorial');
Route::get('admin/add/tutorial', [TutorialController::class, 'create'])->name('admin.create.tutorial');
Route::post('admin/add/tutorial/save', [TutorialController::class, 'store'])->name('admin.store.tutorial');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:sanctum']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});