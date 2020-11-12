<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\CheckAdmin;
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

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

// Route::resource('admin', AdminController::class)->middleware([
//     'auth:sanctum',
//     CheckAdmin::class,
// ]);

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['auth:sanctum', CheckAdmin::class],
    ],
    function () {
        Route::resource('admin', AdminController::class);
        Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
            Route::get('/', [PostController::class, 'indexAdmin'])->name(
                'index'
            );
            Route::get('/create', [PostController::class, 'create'])->name(
                'create'
            );
            Route::get('/{post:slug}', [
                PostController::class,
                'showAdmin',
            ])->name('show');
            Route::get('/{post:slug}/edit', [
                PostController::class,
                'editAdmin',
            ])->name('edit');
            Route::put('/{post:slug}', [PostController::class, 'update'])->name(
                'update'
            );
        });
    }
);

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/posts', [PostController::class, 'indexAdmin'])->name(
//         'admin.posts.index'
//     );
// })->middleware();
