<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/home', function (Request $request) {
    return view('welcome', [
        'mahasiswa' => [
            ['first_name' => 'John', 'last_name' => 'Doe'],
            ['first_name' => 'Jane', 'last_name' => 'Doe'],
            ['first_name' => 'Faiq', 'last_name' => 'Doe'],
            ['first_name' => 'Razan', 'last_name' => 'Doe']
        ]
    ], ['name' => $request['name']]);
})->name('home');

Route::get('/login',[AuthController::class, 'loginView'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login.post');


Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::group(['prefix' => 'products'], function() {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});