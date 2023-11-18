<?php

use App\Models\Bidang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('beranda', [
        "title" => "Beranda",
        "active" => "Beranda",
        "bidang" => Bidang::all()
    ]);
});

// Bidang-Bidang IRMA
Route::get('bidang/dakpen', [BidangController::class, 'dakpen']);
Route::get('bidang/humas', [BidangController::class, 'humas']);
Route::get('bidang/phbi', [BidangController::class, 'phbi']);
// Route::get('/bidang/{bidang:id}', [BidangController::class, 'index']);

// Detail Anggota IRMA
Route::get('/anggota', [UserController::class, 'index']);

Route::get('/postingan', function () {
    return view('postingan.posts', [
        "title" => "Postingan IRMA",
        "active" => "postingan"
    ]);
});

// Register and Login
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    // Get All Data Members
    Route::get('/dashboard/members', [DashboardPostController::class, 'getAllMembers'])->name('all-members');
    
    // Otomatis Generate Slug
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    
    // Get Data Posts
    Route::get('/dashboard/posts', [DashboardPostController::class, 'index'])->name('all-posts');
    Route::get('/dashboard/posts/{post:id}', [DashboardPostController::class, 'show'])->name('show-posts');
    
    // Create New Post
    Route::get('/ashboard/posts/create', [DashboardPostController::class, 'create'])->name('create-posts');
    Route::post('/dashboard/posts', [DashboardPostController::class, 'store'])->name('store-posts');
    
    // Update Post
    Route::get('/dashboard/posts/{post:id}/edit', [DashboardPostController::class, 'edit'])->name('edit-posts');
    Route::patch('/dashboard/posts/{post:id}', [DashboardPostController::class, 'update'])->name('update-posts');

    // Hapus Post
    Route::delete('/dashboard/posts/{post:id}', [DashboardPostController::class, 'destroy'])->name('delete-posts');
});