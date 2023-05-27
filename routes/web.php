<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Employee\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
    return view('auth/login');
});



Route::get('/dashboard/{lang}', function ($lang) {
    // APP::setLocale($lang);
    APP::setLocale('ba');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard.ba');

// Route::get('/dashboard/{lang}', function ($lang) {
//     // APP::setLocale($lang);
//     APP::setLocale('en');
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard.en');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboarden', function () {
//     APP::setLocale('en');
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboarden');

// Route::get('/dashboard', function () {
//     APP::setLocale('ba');
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboardba');



Route::get('/company', [CompanyController::class,'index'])->name('company.index');
Route::get('/company/create', [CompanyController::class,'create'])->name('company.create');
Route::post('/company', [CompanyController::class,'store'])->name('company.store');
Route::get('/company/{companyID}', [CompanyController::class,'show'])->name('company.show');
Route::get('/company/{companyID}/edit', [CompanyController::class,'edit'])->name('company.edit');
Route::put('/company/{companyID}', [CompanyController::class,'update'])->name('company.update');
Route::delete('/company/{companyID}', [CompanyController::class,'destroy'])->name('company.destroy');

Route::get('/employee', [EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class,'store'])->name('employee.store');
Route::get('/employee/{employeeID}', [EmployeeController::class,'show'])->name('employee.show');
Route::get('/employee/{employeeID}/edit', [EmployeeController::class,'edit'])->name('employee.edit');
Route::put('/employee/{employeeID}', [EmployeeController::class,'update'])->name('employee.update');
Route::delete('/employee/{employeeID}', [EmployeeController::class,'destroy'])->name('employee.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
