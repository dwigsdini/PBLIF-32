<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('landing-page.home', [
        'judul' => 'Home'
    ]);
});

Route::get('/latar-belakang', function () {
    return view('landing-page.tentang-kami.latar-belakang', [
        'judul' => 'Latar Belakang'
    ]);
});

Route::get('/prestasi', function () {
    return view('landing-page.prestasi', [
        'judul' => 'Prestasi'
    ]);
});

Route::get('/visi-misi', function () {
    return view('landing-page.tentang-kami.visi-misi', [
        'judul' => 'Visi dan Misi'
    ]);
});

Route::get('/struktur-organisasi', function () {
    return view('landing-page.tentang-kami.struktur-organisasi', [
        'judul' => 'Struktur Organisasi'
    ]);
});

Route::get('/akreditasi', function () {
    return view('landing-page.akademik.akreditasi', [
        'judul' => 'Akreditasi PSPPI'
    ]);
});

Route::get('/kurikulum-rpl', function () {
    return view('landing-page.akademik.kurikulum-rpl', [
        'judul' => 'Kurikulum RPL'
    ]);
});

Route::get('/fasilitas', function () {
    return view('landing-page.akademik.fasilitas', [
        'judul' => 'Fasilitas'
    ]);
});

Route::get('/kompetensi-lulusan', function () {
    return view('landing-page.akademik.kompetensi-lulusan', [
        'judul' => 'Kompetensi Lulusan'
    ]);
});

Route::get('/kurikulum-reguler', function () {
    return view('landing-page.akademik.kurikulum-reguler', [
        'judul' => 'Kurikulum Reguler'
    ]);
});

Route::get('/buku-panduan', function () {
    return view('landing-page.akademik.buku-panduan', [
        'judul' => 'Buku Panduan'
    ]);
});

Route::get('/faq', function () {
    return view('landing-page.faq', [
        'judul' => 'FAQ'
    ]);
});

Route::get('/berita', function () {
    return view('landing-page.berita', [
        'judul' => 'Berita'
    ]);
});

Route::get('/berita-lgkp', function () {
    return view('landing-page.berita_lgkp', [
        'judul' => 'Berita Selengkapnya'
    ]);
});

Route::get('/statistik-alumni', function () {
    return view('landing-page.statistik-alumni', [
        'judul' => 'Statistik Alumni'
    ]);
});

Route::get('/kontak', function () {
    return view('landing-page.kontak', [
        'judul' => 'Kontak'
    ]);
});

Route::get('/struktural', function() {
    return view('landing-page.struktural', [
        'judul' => 'Struktural'
    ]);
});

Route::get('/dash', function() {
    return view('dashboard.home', [
        'judul' => 'Dashboard'
    ]);
});

Route::get('/matkul', function() {
    return view('dashboard.mahasiswa.matkul', [
        'judul' => 'Mata Kuliah'
    ]);
});

// Register User
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Login User 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);

// Dashboard user
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::get('/logout', [DashboardController::class, 'destroy']);

// Table user (Admin)
Route::get('/dashboard/mahasiswa', [UserController::class, 'index'])->middleware('admin');
Route::post('/dashboard/mahasiswa/save', [UserController::class, 'store'])->name('save.mahasiswa')->middleware('admin');
Route::get('/dashboard/mahasiswa/edit/{id}', [UserController::class, 'edit'])->name('edit.mahasiswa')->middleware('admin');
Route::post('/dashboard/mahasiswa/update/{id}', [UserController::class, 'update'])->name('update.mahasiswa')->middleware('admin');
Route::get('/dashboard/mahasiswa/delete/{id}', [UserController::class, 'destroy'])->name('delete.mahasiswa')->middleware('admin');

// Table nilai mahasiswa (Admin)
Route::get('/dashboard/mahasiswa/view/{id}', [MatkulController::class, 'view'])->name('view.mahasiswa')->middleware('admin');

// Matakuliah (Mahasiswa)
Route::get('/dashboard/matkul', [MatkulController::class, 'upload'])->middleware('auth');
Route::get('/dashboard/matkul/upload', [MatkulController::class, 'upload_action'])->name('upload.action')->middleware('auth');