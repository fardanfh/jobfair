<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplyController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerusahaanProfileController;
use App\Http\Controllers\UserApplyController;
use App\Http\Controllers\UserProfileController;
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

route::get('/', [JobApplyController::class, 'index']);
route::resource('/job-applies', JobApplyController::class);

Route::middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('home');
    })->name('home');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('registersimpan', 'registerSimpan')->name('registersimpan'); // Ensure the route name matches the form's action
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::group(['middleware' => ['auth', 'ceklevel:admin,pelamar']], function () {
    route::get('/home', [HomeController::class, 'halamandashboard'])->name('home');
    route::get('/pekerjaan', [HomeController::class, 'halamanPekerjaan'])->name('home');
    route::resource('/job_postings', JobPostingController::class);
    route::get('/create_job', [JobPostingController::class, 'create']);
    route::post('/job_postings/toggle_status/{id}', [JobPostingController::class, 'toggleStatus'])->name('job_postings.toggle_status');

    // route::get('/profile', [HomeController::class, 'halamanProfile'])->name('home');
    // route::get('/create', [HomeController::class, 'jobposting'])->name('home');
    route::get('/appli', [HomeController::class, 'jobapplications'])->name('home');
    route::get('/invit', [HomeController::class, 'jobinvitations'])->name('home');

    Route::post('/apply-job/{id}', [JobApplyController::class, 'apply'])->name('apply.job');
    Route::get('/job_postings/{id}/applicants', [JobPostingController::class, 'showApplicants'])->name('job.applicants');
    Route::get('/applicant-detail/{id}', [JobPostingController::class, 'showApplicantDetail'])->name('applicant.detail');
    Route::put('/applicant/{id}', [JobPostingController::class, 'updateStatus'])->name('applicant.update');

    Route::resource('user_profiles', UserProfileController::class);

    Route::resource('user-apply', UserApplyController::class);

    Route::resource('perusahaan-profiles', PerusahaanProfileController::class);

});
