<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAddServiceController;
use App\Http\Controllers\AdminAllServiceController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AdminCarrierOptionController;
use App\Http\Controllers\AdminClinicCareController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CarrieroptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\AdminGallery;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminTeamController;

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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/services', [ServicesController::class, 'show'])->name('services');
Route::get('/gallery', [GalleryController::class, 'show'])->name('gallery');

Route::get('/appointment', [AppointmentController::class, 'show'])->name('appointment');
Route::post('/appointment/save', [AppointmentController::class, 'insertappointment'])->name('appointment.save');
Route::post('/appointment/delete/{id}', [AdminAppointmentController::class, 'deleteappointment'])->name('appointment.delete');




Route::get('/carrier_option', [CarrieroptionController::class, 'show'])->name('carrier_option');
Route::post('/carrier_option/save', [CarrieroptionController::class, 'insertform'])->name('carrier_option.save');




Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/more-services/{id}', [ServicesController::class, 'more']);

Route::get('/admin2',  [AdminController::class, 'index'])->name('admin2');
Route::post('/admin2', [AdminController::class, 'adminlogin'])->name('admin2.login');
Route::middleware(['admin'])->group(function () {
    Route::get('/admin2/dashboard',  [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin2/logout', [AdminController::class, 'logout'])->name('admin2.logout');
    Route::get('/admin2/carrier_option', [AdminCarrierOptionController::class, 'show'])->name('admin.carrier_option');
    Route::post('/admin2/delete/{id}', [AdminCarrierOptionController::class, 'deletecarrier'])->name('admin.delete.carrier');
    Route::get('/admin2/about',  [AdminAboutController::class, 'about'])->name('admin.about');
    Route::get('/admin2/clinic_care',  [AdminClinicCareController::class, 'cliniccare'])->name('admin.clinic_care');
    Route::get('/admin2/add_service',  [AdminAddServiceController::class, 'addService'])->name('admin.add_service');
    Route::post('/admin2/insert_service',  [AdminAddServiceController::class, 'insertservice'])->name('admin.service.save');
    Route::get('/admin2/all_service', [AdminAllServiceController::class, 'allservice'])->name('admin.all_service');
    Route::get('/admin2/carrier_option', [AdminCarrierOptionController::class, 'carrieroption'])->name('admin.carrier_option');
    Route::get('/admin2/appointment', [AdminAppointmentController::class, 'appointment'])->name('admin.appointment');
    Route::get('/admin2/team', [AdminTeamController::class, 'team'])->name('admin.team');
    Route::get('/admin2/faq', [AdminFaqController::class, 'faq'])->name('admin.faq');
    Route::post('/admin2/faq_del', [AdminFaqController::class, 'faq'])->name('admin.faq.del');
    Route::get('/admin2/gallery',  [AdminGalleryController::class, 'gallery'])->name('admin.gallery');
    Route::get('/admin2/review',  [AdminReviewController::class, 'review'])->name('admin.review');
    Route::post('/admin2/insert_review',  [AdminReviewController::class, 'insertreviewdata'])->name('admin.review.save');
    Route::post('/admin2/delete/{id}',  [AdminReviewController::class, 'deletereview'])->name('admin.delete.review');
});


Route::post('/insert/about', [AdminAboutController::class, 'insertabout'])->name('admin.about.save');
Route::post('/about/delete/{id}', [AdminAboutController::class, 'deleteabout'])->name('admin.delete.about');


Route::post('/insert/clinic_care', [AdminClinicCareController::class, 'insertCliniccare'])->name('admin.cliniccare.save');
Route::post('/cliniccare/delete/{id}',  [AdminClinicCareController::class, 'deletecliniccare'])->name('admin.delete.cliniccare');


Route::post('/del/{id}', [AdminAllServiceController::class, 'deleteservice'])->name('admin.del.service');



Route::post('/insert/gallery', [AdminGalleryController::class, 'insertgallery'])->name('admin.gallery.save');
Route::post('/del/gallery/{id}', [AdminGalleryController::class, 'deletegallery'])->name('admin.del.gallery');



Route::post('/insert/team', [AdminTeamController::class, 'insertteam'])->name('admin.team.save');
Route::post('team/delete/{id}', [AdminTeamController::class, 'deleteteam'])->name('admin.del.team');



Route::post('/insert/faq', [AdminFaqController::class, 'insertFaq'])->name('admin.faq.save');
Route::post('admin2/del/{id}', [AdminFaqController::class, 'deleteFaq'])->name('admin.del.faq');
