<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::controller(LoginController::class)->group(function () {
    Route::post('registersimpan', 'registerSimpan')->name('registersimpan'); // Ensure the route name matches the form's action
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('home');
    })->name('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'ceklevel:superadmin,perusahaan']], function () {
    route::get('/home', [HomeController::class, 'halamandashboard'])->name('home');
    route::get('/pekerjaan', [HomeController::class, 'halamanPekerjaan'])->name('home');
    // route::get('/profile', [HomeController::class, 'halamanProfile'])->name('home');
    // route::get('/create', [HomeController::class, 'halamancreatepekerjaan'])->name('home');
});
