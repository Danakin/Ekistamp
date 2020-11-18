<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\Stamps;
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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['auth:sanctum', CheckAdmin::class],
    ],
    function () {
        Route::resource('', AdminController::class);
        Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
            Route::get('/', [PostController::class, 'indexAdmin'])->name(
                'index'
            );
            Route::get('/create', [PostController::class, 'create'])->name(
                'create'
            );
            Route::post('/', [PostController::class, 'store'])->name('store');
            Route::get('/{post}', [PostController::class, 'showAdmin'])->name(
                'show'
            );
            Route::get('/{post}/edit', [
                PostController::class,
                'editAdmin',
            ])->name('edit');
            Route::put('/{post}', [PostController::class, 'update'])->name(
                'update'
            );
            Route::delete('/{post}', [PostController::class, 'destroy'])->name(
                'destroy'
            );
        });
        Route::group(['prefix' => 'stamps', 'as' => 'stamps.'], function () {
            // Route::get('/', [StampController::class, 'indexAdmin'])->name(
            Route::get('/', Stamps\Admin\Index::class)->name('index');
            Route::get('/unapproved', [
                StampController::class,
                'indexAdminUnapproved',
            ])->name('index.unapproved');
            Route::get('/create', [
                StampController::class,
                'createAdmin',
            ])->name('create');
            Route::post('/', [StampController::class, 'storeAdmin'])->name(
                'store'
            );
            Route::get('/{prefecture}/{city}/{station}/{stamp}', [
                StampController::class,
                'showAdmin',
            ])->name('show');
            Route::get('/{prefecture}/{city}/{station}/{stamp}/edit', [
                StampController::class,
                'edit',
            ])->name('edit');
            Route::put('/{prefecture}/{city}/{station}/{stamp}', [
                StampController::class,
                'update',
            ])->name('update');
            Route::delete('/{prefecture}/{city}/{station}/{stamp}', [
                StampController::class,
                'destroy',
            ])->name('destroy');
        });
    }
);

Route::get('/comments/{model}/{id}/create', [
    CommentController::class,
    'create',
])
    ->name('comments.create')
    ->where('model', '(posts|stamps)');
Route::post('/comments/{model}/{id}', [CommentController::class, 'store'])
    ->name('comments.store')
    ->where('model', '(posts|stamps)');
Route::get('/comments/{comment}/edit', [
    CommentController::class,
    'edit',
])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name(
    'comments.update'
);

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{post:slug}', [PostController::class, 'show'])->name('show');
    Route::group(
        [
            'prefix' => '/{post:slug}/comments',
            'as' => 'comments.',
        ],
        function () {
            Route::get('/create', [
                CommentController::class,
                'createPost',
            ])->name('create');
            Route::post('/', [CommentController::class, 'storePost'])
                ->name('store')
                ->middleware('auth:sanctum');
            Route::get('/{comment}/edit', [
                CommentController::class,
                'editPost',
            ])->name('edit');
            Route::put('/{comment}', [CommentController::class, 'updatePost'])
                ->name('update')
                ->middleware('auth:sanctum');
        }
    );
});

Route::group(['prefix' => 'stamps', 'as' => 'stamps.'], function () {
    Route::get('/', Stamps\Index::class)->name('index');
    Route::get('/my', [StampController::class, 'index'])->name('my');
    Route::get('/create/{prefecture}/{city}/{station}', [
        StampController::class,
        'create',
    ])
        ->name('create')
        ->middleware('auth:sanctum');
    Route::post('/{prefecture}/{city}/{station}', [
        StampController::class,
        'store',
    ])
        ->name('store')
        ->middleware('auth:sanctum');
    Route::get('/{prefecture}/{city}/{station}/{stamp}', [
        StampController::class,
        'show',
    ])->name('show');

    Route::group(
        [
            'prefix' => '/{prefecture}/{city}/{station}/{stamp}/comments',
            'as' => 'comments.',
        ],
        function () {
            Route::get('/create', [
                CommentController::class,
                'createStamp',
            ])->name('create');
            Route::post('/', [CommentController::class, 'storeStamp'])
                ->name('store')
                ->middleware('auth:sanctum');
            Route::get('/{comment}/edit', [
                CommentController::class,
                'editStamp',
            ])->name('edit');
            Route::put('/{comment}', [CommentController::class, 'updateStamp'])
                ->name('update')
                ->middleware('auth:sanctum');
        }
    );
});
