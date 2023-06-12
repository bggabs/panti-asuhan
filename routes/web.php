<?php

use App\Http\Controllers\{AboutController,
    BlogController,
    BlogDetailController,
    ContactController,
    DonationController,
    EventController,
    GalleryController,
    HomeController};
use App\Http\Controllers\Dashboard\{AdminGalleryController,
    ChildController,
    ProfileController,
    HomeController as HomeDashboardController,
    DonationController as DonationDashboardController};
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function() {
    Route::get('/', [HomeDashboardController::class, 'index'])->name('index');
    Route::get('/donation', [DonationDashboardController::class, 'index'])->name('donation');
    Route::get('/donation/printMoneyDonation', [DonationDashboardController::class, 'printMoneyDonation'])->name('printMoneyDonation');
    Route::resources([
        'events' => \App\Http\Controllers\Dashboard\EventController::class,
        'galeries' => AdminGalleryController::class,
        'profile' => ProfileController::class,
        'child' => ChildController::class
    ]);

});

//Route::resource('galeries', AdminGalleryController::class);


//Auth::routes();
Route::middleware('auth')->group(function() {
    Route::get('/donation-form', [HomeController::class, 'donation'])->name('donation');
    Route::post('/donate-action', [HomeController::class, 'donate'])->name('donate-action');
});
Route::post('/payment-notification-handling', [HomeController::class, 'handleAfterPayment'])->name('paymentHandling');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/donate', [DonationController::class, 'index'])->name('donate');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detail', [BlogDetailController::class, 'index'])->name('blog-detail');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
