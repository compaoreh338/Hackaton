<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['middleware' => ['auth', 'admin-check']], function () {
        Route::get('/dashboard', fn () => view('dashboard.index'))->name('dashboard');
    });


    Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
    Route::get('/categories/new', [CategoryController::class, 'new'])->name('category.new');
    Route::post('/categories', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
});


require __DIR__ . '/auth.php';
