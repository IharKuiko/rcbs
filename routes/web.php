<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LinkCategoryController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/link_categories', LinkCategoryController::class);
    Route::resource('/links', LinkController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
});

// Socialite Login

Route::get('/login/{provider}', [AuthenticatedSessionController::class, 'redirectToProvider'])->name('login.provider');

Route::get('/login/{provider}/callback', [AuthenticatedSessionController::class, 'handleProviderCallback']);

// Socialite Registration

Route::get('/register/{provider}', [RegisteredUserController::class, 'redirectToProvider'])->name('register.provider');

Route::get('/register/{provider}/callback', [RegisteredUserController::class, 'handleProviderCallback']);


require __DIR__.'/auth.php';
