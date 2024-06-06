<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GuruController; 
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalisController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\ManagementController;

Auth::routes();

Route::get('/', [UserController::class, 'index'])->name('welcome');
// Route::get('/home', [UserController::class, 'index'])->name('welcome');
Route::get('artikel/user', [UserController::class, 'artikel'])->name('artikel.user');
//admin
Route::get('admin', [HomeController::class, 'admin'])->name('admin')->middleware('roleuser'); 
Route::get('manage', [ManagementController::class, 'index'])->name('manage')->middleware('roleuser'); 
Route::get('add/manage', [ManagementController::class, 'create'])->middleware('roleuser');
Route::POST('save/manage', [ManagementController::class, 'store'])->middleware('roleuser');
Route::get('edit/manage/{id}', [ManagementController::class, 'show'])->middleware('roleuser');
Route::POST('update/manage', [ManagementController::class, 'update'])->middleware('roleuser');
Route::get('delete/manage/{id}', [ManagementController::class, 'destroy'])->middleware('roleuser');
Route::get('send/manage/{id}', [ManagementController::class, 'send'])->middleware('roleuser');

//artikel 
Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel')->middleware('roleuser');
Route::get('add/artikel', [ArtikelController::class, 'create'])->middleware('roleuser');
Route::POST('save/artikel', [ArtikelController::class, 'store'])->middleware('roleuser');
Route::get('edit/artikel/{id}', [ArtikelController::class, 'show'])->middleware('roleuser');
Route::POST('update/artikel', [ArtikelController::class, 'update'])->middleware('roleuser');
Route::get('delete/artikel/{id}', [ArtikelController::class, 'destroy'])->middleware('roleuser');
//guru 
Route::get('guru', [GuruController::class, 'index'])->name('guru')->middleware('roleuser');
Route::get('add/guru', [GuruController::class, 'create'])->middleware('roleuser');
Route::POST('save/guru', [GuruController::class, 'store'])->middleware('roleuser');
Route::get('edit/guru/{id}', [GuruController::class, 'show'])->middleware('roleuser');
Route::POST('update/guru', [GuruController::class, 'update'])->middleware('roleuser');
Route::get('delete/guru/{id}', [GuruController::class, 'destroy'])->middleware('roleuser'); 
Route::get('profilguru', [GuruController::class, 'profil']); 
//kelas 
Route::get('kelas', [KelasController::class, 'index'])->name('kelas')->middleware('roleuser');
Route::get('add/kelas', [KelasController::class, 'create'])->middleware('roleuser');
Route::POST('save/kelas', [KelasController::class, 'store'])->middleware('roleuser');
Route::get('edit/kelas/{id}', [KelasController::class, 'show'])->middleware('roleuser');
Route::POST('update/kelas', [KelasController::class, 'update'])->middleware('roleuser');
Route::get('delete/kelas/{id}', [KelasController::class, 'destroy'])->middleware('roleuser');
//mapel 
Route::get('mapel', [MapelController::class, 'index'])->name('mapel')->middleware('roleuser');
Route::get('add/mapel', [MapelController::class, 'create'])->middleware('roleuser');
Route::POST('save/mapel', [MapelController::class, 'store'])->middleware('roleuser');
Route::get('edit/mapel/{id}', [MapelController::class, 'show'])->middleware('roleuser');
Route::POST('update/mapel', [MapelController::class, 'update'])->middleware('roleuser');
Route::get('delete/mapel/{id}', [MapelController::class, 'destroy'])->middleware('roleuser');
//visimisi 
Route::get('visimisi', [VisimisiController::class, 'index'])->name('visimisi')->middleware('roleuser');
Route::get('add/visimisi', [VisimisiController::class, 'create'])->middleware('roleuser');
Route::POST('save/visimisi', [VisimisiController::class, 'store'])->middleware('roleuser');
Route::get('edit/visimisi/{id}', [VisimisiController::class, 'show'])->middleware('roleuser');
Route::POST('update/visimisi', [VisimisiController::class, 'update'])->middleware('roleuser');
Route::get('delete/visimisi/{id}', [VisimisiController::class, 'destroy'])->middleware('roleuser');
//jurnalis 
Route::get('jurnalis', [JurnalisController::class, 'index'])->name('jurnalis')->middleware('roleuser');
Route::get('add/jurnalis', [JurnalisController::class, 'create'])->middleware('roleuser');
Route::POST('save/jurnalis', [JurnalisController::class, 'store'])->middleware('roleuser');