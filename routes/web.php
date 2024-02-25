<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LinkCategoryController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GlorifyRechitsaController;
use App\Http\Controllers\HeroesInternationalController;
use App\Http\Controllers\HeroesUSSRController;
use App\Http\Controllers\LiteraryRechitsaController;
use App\Http\Controllers\LocalhistoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaintersRechitsaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReadersController;
use App\Http\Controllers\ResController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SearchController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/post/{slug}', [MainController::class, 'show'])->name('posts.single');
Route::get('/category/{slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.single');
Route::get('/tag/{slug}', [\App\Http\Controllers\TagController::class, 'show'])->name('tags.single');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/{slug}', [AboutController::class, 'show'])->name('about.single');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.single');
Route::get('/local_history', [LocalhistoryController::class, 'index'])->name('local_history');
Route::get('/local_history/{slug}', [LocalhistoryController::class, 'show'])->name('local_history.single');
Route::get('/readers', [ReadersController::class, 'index'])->name('readers');
Route::get('/readers/{slug}', [ReadersController::class, 'show'])->name('readers.single');
Route::get('/res', [ResController::class, 'index'])->name('res');
Route::get('/res/{slug}', [ResController::class, 'show'])->name('res.single');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogsController::class, 'show'])->name('blogs.single');
Route::get('/city', [CityController::class, 'index'])->name('city');
Route::get('/city/{slug}', [CityController::class, 'show'])->name('city.single');
Route::get('/literary_rechitsa', [LiteraryRechitsaController::class, 'index'])->name('literary_rechitsa');
Route::get('/literary_rechitsa/{slug}', [LiteraryRechitsaController::class, 'show'])->name('literary_rechitsa.single');
Route::get('/painters', [PaintersRechitsaController::class, 'index'])->name('painters');
Route::get('/painters/{slug}', [PaintersRechitsaController::class, 'show'])->name('painters.single');
Route::get('/glorify', [GlorifyRechitsaController::class, 'index'])->name('glorify');
Route::get('/glorify/{slug}', [GlorifyRechitsaController::class, 'show'])->name('glorify.single');
Route::get('/heroes_ussr', [HeroesUSSRController::class, 'index'])->name('heroes_ussr');
Route::get('/heroes_ussr/{slug}', [HeroesUSSRController::class, 'show'])->name('heroes_ussr.single');
Route::get('/heroes_international', [HeroesInternationalController::class, 'index'])->name('heroes_international');
Route::get('/heroes_international/{slug}', [HeroesInternationalController::class, 'show'])->name('heroes_international.single');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
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
