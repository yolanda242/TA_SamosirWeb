<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\wisataController;
use App\Http\Middleware\CheckSession;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

// Route untuk fungsi User
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/objekUser', [UserController::class, 'indexObjek']);
Route::get('/eventUser', [UserController::class, 'indexEvent']);
Route::get('/DetailWisata/{id}', [UserController::class, 'detailWisata']);
Route::get('/DetailEvent/{id}', [UserController::class, 'detailEvent']);
Route::get('/admin/login', [LoginController::class, 'login']);
Route::get('/admin/logout', [LoginController::class, 'prosesLogout']);
Route::post('/admin/prosesLogin', [LoginController::class, 'prosesloginAdmin']);

// Route untuk fungsi crud Objek Wisata
Route::get('/admin/objek', [AdminController::class, 'indexWisata'])->middleware(CheckSession::class);
Route::get('/admin/create', [AdminController::class, 'createDataWisata'])->middleware(CheckSession::class);
Route::post('/admin/crete/addWisata', [AdminController::class, 'addWisata'])->name('createdata.addWisata')->middleware(CheckSession::class);
Route::get('/Wisata/Detail/{id}', [AdminController::class, 'detailWisata'])->middleware(CheckSession::class);
Route::get('/Wisata/Edit/{id}', [AdminController::class, 'editWisata'])->middleware(CheckSession::class);
Route::post('Wisata/Update/{id}', [AdminController::class, 'updateWisata'])->name('updatedataWisata.addWisata')->middleware(CheckSession::class);
Route::get('/Wisata/Delete/{id}', [AdminController::class, 'deleteWisata'])->name('deletedata.addWisata')->middleware(CheckSession::class);

// Route untuk fungsi crud Objek Wisata
Route::get('/admin/home', [AdminController::class, 'index'])->middleware(CheckSession::class);
Route::get('/admin/event', [AdminController::class, 'indexEvent'])->middleware(CheckSession::class);
Route::get('/createevent', [AdminController::class, 'createDataEvent'])->middleware(CheckSession::class);
Route::post('/creteevent/addEvent', [AdminController::class, 'addEvent'])->name('createdata.addEvent')->middleware(CheckSession::class);
Route::get('/admin/Detail_Event/{id}', [AdminController::class, 'detailEvent'])->middleware(CheckSession::class);
Route::get('/admin/Edit_Event/{id}', [AdminController::class, 'editEvent'])->middleware(CheckSession::class);
Route::post('/admin/Update_Event/{id}', [AdminController::class, 'updateEvent'])->name('updatedataEvent.addEvent')->middleware(CheckSession::class);
Route::get('/admin/Delete_Event/{id}', [AdminController::class, 'deleteEvent'])->name('deletedata.addEvent')->middleware(CheckSession::class);

// Route untuk fungsi Change Password
Route::get('/changepassword', [LoginController::class, 'indexPassword'])->middleware(CheckSession::class);
Route::post('/updatepassword', [LoginController::class, 'ubahPassword'])->name('ubah_password')->middleware(CheckSession::class);

// Route untuk fungsi Contact Us
Route::get('/contactUs', [AdminController::class, 'indexContact'])->middleware(CheckSession::class);
Route::get('/createcontact', [AdminController::class, 'createDataContact'])->middleware(CheckSession::class);
Route::post('/contactUs/addContact', [AdminController::class, 'addContact'])->name('create.addContact')->middleware(CheckSession::class);
Route::get('/contactus/Edit_Contact/{id}', [AdminController::class, 'editContact'])->middleware(CheckSession::class);
Route::post('/contactus/Update_Contact/{id}', [AdminController::class, 'updateContact'])->name('updatedataContact.addContact')->middleware(CheckSession::class);
Route::get('/contactus/Delete_Contact/{id}', [AdminController::class, 'deleteContact'])->name('deletedata.addContact')->middleware(CheckSession::class);

// Route untuk fungsi review
Route::get('/review', [UserController::class, 'createReview']);
Route::post('/review', [UserController::class, 'addReview'])->name('create.addReview');
Route::get('/review/admin/', [AdminController::class, 'indexReview'])->middleware(CheckSession::class);
Route::get('/TambahJenisReview', [AdminController::class, 'tambahjenisreview'])->middleware(CheckSession::class);
Route::post('/TambahJenisReview', [AdminController::class, 'addJenisReview'])->name('createdata.addJenisReview')->middleware(CheckSession::class);
Route::get('/jenis/Delete_Review/{id}', [AdminController::class, 'deleteReview'])->name('deletedata.addJenisReview')->middleware(CheckSession::class);
Route::get('/Delete_review/{id}', [AdminController::class, 'deleteReviewAdmin'])->name('deletedata.addReview')->middleware(CheckSession::class);
