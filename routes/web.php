<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('catalog.show');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
        Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
        Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
        Route::get('/products/{id}/edit', [AdminController::class, 'edit'])->name('admin.products.edit');
        Route::put('/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
        Route::delete('/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
        Route::delete('/products', [AdminController::class, 'deleteProduct'])->name('admin.products.bulk.delete');
    });
});