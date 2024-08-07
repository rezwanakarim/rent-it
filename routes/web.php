<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Property;
use App\Models\Slider;
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

// Route::get('/', function () {
//     $sliders = Slider::all();
//     $categories = Category::all();
//     $properties = Property::all();
//     return view(
//         'frontend.index', ['sliders' => $sliders,
//         'properties' => $properties,
//         'categories' => $categories]);
// });
// temporary route
// Route::get('/userDashboard', function () {
//     return view('frontend.userdashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::get('/admin', [HomeController::class, 'index'])->name('home');

// require __DIR__.'/auth.php';
// Route::middleware('auth')->group(function(){

// Category Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.list');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/pdf', [CategoryController::class, 'categoryPdf'])->name('categories.pdf');

// Property Routes
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.list');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties/create', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/show/{property}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('/properties/{property}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::patch('/properties/{property}', [PropertyController::class, 'update'])->name('properties.update');
Route::delete('/properties/{property}', [PropertyController::class, 'destroy'])->name('properties.destroy');
Route::get('/trash-properties/', [PropertyController::class, 'trash'])->name('properties.trash');
Route::get('/trash-properties/{property}', [PropertyController::class, 'restore'])->name('properties.restore');
Route::delete('/trash-properties/{property}', [PropertyController::class, 'delete'])->name('properties.delete');

// Slider Routes
Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.list');
Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
Route::post('/sliders/create', [SliderController::class, 'store'])->name('sliders.store');
Route::get('/sliders/show/{slider}', [SliderController::class, 'show'])->name('sliders.show');
Route::get('/sliders/{slider}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
Route::patch('/sliders/{slider}', [SliderController::class, 'update'])->name('sliders.update');
Route::delete('/sliders/{slider}', [SliderController::class, 'destroy'])->name('sliders.destroy');

// Phone Routes
Route::get('/phones', [PhoneController::class, 'index'])->name('phones.list');
Route::get('/phones/create', [PhoneController::class, 'create'])->name('phones.create');
Route::post('/phones/create', [PhoneController::class, 'store'])->name('phones.store');
Route::get('/phones/show/{phone}', [PhoneController::class, 'show'])->name('phones.show');
Route::get('/phones/{phone}/edit', [PhoneController::class, 'edit'])->name('phones.edit');
Route::patch('/phones/{phone}', [PhoneController::class, 'update'])->name('phones.update');
Route::delete('/phones/{phone}', [PhoneController::class, 'destroy'])->name('phones.destroy');

// Reservation Request Routes
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.list');
Route::post('/reservations/create', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::get('/reservations/{reservation}/accept', [ReservationController::class, 'accept'])->name('reservations.accept');
Route::get('/reservations/{reservation}/reject', [ReservationController::class, 'reject'])->name('reservations.reject');
Route::patch('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
// Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
// Route::get('/reservations/show/{reservationR}', [ReservationController::class, 'show'])->name('reservations.show');

// Frontend and Backend

// Customer Routes
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.list');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/show/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::patch('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
// Customer front 
Route::get('/customers/dashboard/', [CustomerController::class, 'dashboard'])->name('customers.dashboard');
Route::get('/customers/editProfile', [CustomerController::class, 'editProfile'])->name('customers.editProfile');

// Role Routes
Route::get('/roles', [RoleController::class, 'index'])->name('roles.list');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles/create', [RoleController::class, 'store'])->name('roles.store');
Route::post('/roles/create', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/users/{role}', [RoleController::class, 'show'])->name('roles.show');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::patch('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');

// User Routes
Route::get('/users', [UserController::class, 'index'])->name('users.list');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::get('/users/show/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// });
// Customer login
Route::get('/customers/login', [CustomerController::class, 'login'])->name('customers.login');
// Route::post('/customers/authenticate', [CustomerController::class, 'authenticate'])->name('customers.authenticate');
// Customer Register 

// Don't need auth
Route::get('/frontend', [HomeController::class, 'home'])->name('frontend.index');
Route::get('frontend/property-listing', [HomeController::class, 'properties'])->name('frontend.properties');
Route::get('frontend/property', [HomeController::class, 'filter'])->name('frontend.property');
Route::get('frontend/details/{property}', [HomeController::class, 'details'])->name('frontend.details');


