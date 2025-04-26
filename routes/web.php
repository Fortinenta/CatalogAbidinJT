<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('catalog.show');

Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/products', [CatalogController::class, 'products'])->name('admin.products');
        Route::get('/products/create', [CatalogController::class, 'createProduct'])->name('admin.products.create');
        Route::post('/products', [CatalogController::class, 'storeProduct'])->name('admin.products.store');
        Route::get('/products/{id}/edit', [CatalogController::class, 'editProduct'])->name('admin.products.edit');
        Route::put('/products/{id}', [CatalogController::class, 'updateProduct'])->name('admin.products.update');
        Route::delete('/products/{id}', [CatalogController::class, 'deleteProduct'])->name('admin.products.delete');
    });
});