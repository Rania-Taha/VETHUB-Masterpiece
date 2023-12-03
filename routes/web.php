<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ClinicServiceController;
use App\Http\Controllers\ClinicVetController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WorkingHoursController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;




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



// -------------- Auth Routes Start ------------//

Route::get('/dashboard', [AdminController::class, 'dashboard'])
    ->middleware(['auth', 'admin'])
    ->name('dashboard');


Route::get('/provider-dashboard', [AdminController::class, 'provider'])
    ->middleware(['auth', 'provider'])
    ->name('provider-dashboard');

// -------------- Auth Routes End ------------//



route::get('/', [HomeController::class, 'index'])->name('home');


require __DIR__ . '/auth.php';



// --------------- Resources ------------------------ //
Route::resource("/category", CategoryController::class)->middleware(['auth', 'verified']);
Route::resource("/clinic", ClinicController::class)->middleware(['auth', 'verified']);
Route::resource("/clinicService", ClinicServiceController::class)->middleware(['auth', 'verified']);
Route::resource("/clinicVet", ClinicVetController::class)->middleware(['auth', 'verified']);
Route::resource("/blog", BlogController::class)->middleware(['auth', 'verified']);
Route::resource("/workHours", WorkingHoursController::class)->middleware(['auth', 'verified']);
Route::resource("/user", UserController::class)->middleware(['auth', 'verified']);
Route::resource("/schedule", ScheduleController::class)->middleware(['auth', 'verified']);
Route::resource("/review", ReviewController::class)->middleware(['auth', 'verified']);
Route::resource("/book", BookingController::class)->middleware(['auth', 'verified']);

Route::get('/admin_profile', [AdminProfileController::class, 'index'])->name('admin_profile');
Route::get('/provider_profile', [AdminProfileController::class, 'index2'])->name('provider_profile');

// Route::get('/editprofile', [AdminProfileController::class, 'edit'])->name('editprofile');
Route::post('/editprofile', [AdminProfileController::class, 'edit'])->name('editprofile');



Route::get('/clinicService/create1', [ClinicServiceController::class, 'create1'])->name('clinicService.create');



// ------------------ PAGES -------------------//

Route::get('/about', function () {
    return view('frontend.about.about'); })->name('about');
Route::get('/contact', function () {
    return view('frontend.contact.index'); })->name('contact');
// Route::get('/blog_', function () {return view('frontend.blogs.blogs');})->name('blog_');
// Route::get('/clinics', function () {return view('frontend.clinics.clinics');})->name('clinics');
Route::get('/ask_a_vet', function () {
    return view('frontend.ask_a_vet.ask_a_vet'); })->name('ask_a_vet');


route::get('/user_profile', [ProfileController::class, 'index'])->name('user_profile')->middleware(['auth', 'verified']);
;
route::post('/user_profile_edit', [ProfileController::class, 'edit'])->name('user.profile.edit')->middleware(['auth', 'verified']);
;


//Clinics page
route::get('/clinic_', [ClinicController::class, 'show'])->name('clinics');
route::get('/single_clinic/{id}', [ClinicController::class, 'show1'])->name('single_clinic');
route::get('/blog_website', [BlogController::class, 'show1'])->name('blog_website');
route::get('/single_blog/{id}', [BlogController::class, 'show2'])->name('single_blog');


Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Route::middleware(['auth.booking'])->group(function () {
//     Route::post('/bookings', 'BookingController@store')->name('bookings.store');
// });

Route::get('/book-now', 'BookingController@bookNow')->middleware('RedirectGuests');
Route::post('/get-available-times', 'BookingController@getAvailableTimes');




Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');




// Route::get('/search-clinics', [ClinicController::class, 'searchClinics'])->name('search_clinics');

//PAYPAL
Route::get('paypal/success', [BookingController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [BookingController::class, 'cancel'])->name('paypal_cancel');