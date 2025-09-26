<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\Auth\RegisterDonorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonorProfileController;
use App\Http\Controllers\DonationRequestController;
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

// Route::get('/', function () {
//     return view('/onepage');
// });

Route::view('/', 'onepage')->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index'])
        ->middleware('can:isAdmin')
        ->name('admin.dashboard');

    Route::get('/blood-bank/dashboard', [BloodBankController::class, 'index'])
        ->middleware('can:isBloodBank')
        ->name('bloodbank.dashboard');

    Route::get('/donor/home', [DonorController::class, 'index'])
        ->middleware('can:isDonor')
        ->name('donor.home');

});

Route::get('/register/donor', [RegisterDonorController::class, 'create'])->name('donor.register.form');
Route::post('/register/donor', [RegisterDonorController::class, 'store'])->name('donor.register');


Route::view('/contact', 'contact')->name('contact');
Route::view('/bank', 'indexbank')->name('bank.index');
Route::view('/donors', 'indexjoud')->name('donors.index');
Route::view('/profile', 'profile')->name('profile');


Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/bloodBank/messages', [ContactController::class, 'showMessages'])->name('bloodBank.messages');

Route::post('/bloodBank/messages/{id}/mark-read', [ContactController::class, 'markRead'])->name('messages.markRead');
Route::delete('/bloodBank/messages/{id}', [ContactController::class, 'destroy'])->name('messages.destroy');



Route::middleware('can:isDonor')->group(function () {
    Route::get('/donor/profile', [DonorProfileController::class, 'edit'])->name('donor.profile.edit');
    Route::post('/donor/profile', [DonorProfileController::class, 'update'])->name('donor.profile.update');
});

Route::put('/donors/update-blood-type/{donorId}', [BloodBankController::class, 'updateBloodType'])->name('donors.updateBloodType');
Route::get('/donors', [BloodBankController::class, 'index']);


// مسار استقبال طلب الإشعار من بنك الدم (POST)
Route::post('/donation-requests', [DonationRequestController::class, 'store'])
    ->middleware('auth')    // فرض تسجيل الدخول
    ->name('donation-requests.store');