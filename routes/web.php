<?php

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

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    if (Auth::user()) {
        return redirect()->route('dashboard');
    }
    return view('pages.auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    // Naive Bayes
    Route::group(['prefix' => 'pengujian-naive-bayes', 'as' => 'naive-bayes.'], function () {
        Route::get('/', 'App\Http\Controllers\NaiveBayesController@index')->name('index');
    });
    // Training Data
    Route::group(['prefix' => 'data-training', 'as' => 'training-data.'], function () {
        Route::get('/', 'App\Http\Controllers\TrainingDataController@index')->name('index');
    });
    // Test History
    Route::group(['prefix' => 'riwayat-pengujian', 'as' => 'test-history.'], function () {
        Route::get('/', 'App\Http\Controllers\TestHistoryController@index')->name('index');
    });
});
