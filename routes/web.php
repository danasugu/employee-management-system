<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Users\UserIndex;

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

// Route::get('/users', UserIndex::class)->name('users.index');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(('auth:sancum','verified'))->group(function() {
//     Route::view('dashboard', 'dashboard')->name('dashboard');
//     Route::get('/users', UserIndex::class)->name('users.index');
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/users', UserIndex::class)->name('users.index');
    // Route::get('/countries', CountryIndex::class)->name('countries.index');
    // Route::get('/states', StateIndex::class)->name('states.index');
    // Route::get('/cities', CityIndex::class)->name('cities.index');
    // Route::get('/departments', DepartmentIndex::class)->name('departments.index');
    // Route::get('/employees', EmployeeIndex::class)->name('employees.index');
});