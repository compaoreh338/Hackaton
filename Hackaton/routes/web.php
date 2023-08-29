<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConseilController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EvenController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ProposController;
use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\ServiceController;
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

Route::get('/Home', [HomeController::class, 'index'])->name('home.index');
Route::get('/apprenant', [ApprenantController::class, 'index'])->name('apprenant');
Route::get('/conseil', [ConseilController::class, 'index'])->name('conseil');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/entreprise', [EntrepriseController::class, 'index'])->name('entreprise');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/recruteur', [RecruteurController::class, 'index'])->name('recruteur');
Route::get('/offre', [OffreController::class, 'index'])->name('offre');
Route::get('/even', [EvenController::class, 'index'])->name('even');
Route::get('/propos', [ProposController::class, 'index'])->name('propos');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['middleware' => ['auth', 'admin-check']], function () {
        Route::get('/dashboard', fn () => view('dashboard.index'))->name('dashboard');
    });
});

Route::get('/users', [UserController::class, 'list'])->name('user.list');
Route::get('/users/new', [UserController::class, 'new'])->name('user.new');
Route::post('/users/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/', fn () => view('welcome'))->name('welcome');
Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
Route::get('/categories/new', [CategoryController::class, 'new'])->name('category.new');
Route::post('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

require __DIR__ . '/auth.php';
