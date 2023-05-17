<?php

use App\Http\Controllers\GuestController as GuestController;
use App\Http\Controllers\PostsController as PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('Home');

Route::middleware('guest')->prefix('blog')->name('blog.')->group(function () {
    Route::get('/',[GuestController::class, 'blog_index'])->name('index');
    Route::get('/{slug}',[GuestController::class, 'post_index'])->name('post');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth','verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
            return Inertia::render('Admin/Dashboard');
        })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Blog Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('posts', PostsController::class)->parameters([
        'posts' => 'post_id'
    ]);

});
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
