<?php

use App\Http\Controllers\GuardController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', function () {
    return redirect(route('admin.index'));
})->middleware('auth');
Route::get('/home', [SocietyController::class, 'home'])->name('home');
Route::get('kyc/create', [SocietyController::class, 'create'])->name('kyc.create');
Route::get('kyc/thanku', [SocietyController::class, 'thanku'])->name('society.thanku');
Route::post('/kyc/store', [SocietyController::class, 'store'])->name('society.action');
Route::post('/payment-complete', [SocietyController::class, 'complete'])->name('society.complete');
Auth::routes();


// ***************************** Admin Routes *****************************
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('admin.index');
    Route::get('/', [HomeController::class, 'index'])->name('admin.index');

    // -------------------------Members Routes-------------------------
    Route::resource('members', UsersController::class);
    //Route::post('members/status/{id}', [UsersController::class, 'status'])->name('members.status');
    Route::post('members/status', [UsersController::class, 'status'])->name('members.status');

    // -------------------------Society Routes-------------------------
    Route::resource('society', SocietyController::class);
    Route::get('society/view/{id}', [SocietyController::class, 'view'])->name('society.view');
    Route::post('society/status', [SocietyController::class, 'status'])->name('society.status');
     Route::resource('guard', GuardController::class);
    Route::post('guard/status', [GuardController::class, 'status'])->name('guard.status');

    // -------------------------Resident Routes-------------------------
    Route::resource('resident', ResidentController::class);
    Route::post('resident/status', [ResidentController::class, 'status'])->name('resident.status');


});


// ***************************** Secretary Routes *****************************
// Route::middleware(['auth', 'secretary'])->prefix('secretary')->group(function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     })->name('secretary.index');

//     // -------------------------Guard Routes-------------------------
//     Route::resource('guard', GuardController::class);
//     Route::post('guard/status', [GuardController::class, 'status'])->name('guard.status');

//     // -------------------------Resident Routes-------------------------
//     Route::resource('resident', ResidentController::class);
//     Route::post('resident/status', [ResidentController::class, 'status'])->name('resident.status');
// });



Route::get('/storage-link', function () {
    $target = storage_path('app/public');
    $link = public_path('/storage');
    echo symlink($target, $link);
    // echo "symbolic link created successfully";
});

Route::get('migrate', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('migrate');
});

