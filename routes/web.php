<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NextController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/next',[NextController::class,'next'])->name('next');
Route::get('/empLogin',[EmployeeController::class,'emp'])->name('emp');
Route::get('/empregister',[EmployeeController::class,'empr'])->name('empr');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    //user
   
    Route::get('/user',[AdminController::class,'index'])->name('user');
    Route::get('/user/create',[AdminController::class,'create'])->name('user.create');
    Route::post('/user/store',[AdminController::class,'store'])->name('user.store');
    Route::get('/user/{user}/edit',[AdminController::class,'edit'])->name('user.edit');
    Route::post('/user/{user}/update',[AdminController::class,'update'])->name('user.update');
    Route::post('/user/delete',[AdminController::class,'delete'])->name('user.delete');
   

    // country
    Route::get('/country',[CountryController::class,'index'])->name('country');
    Route::get('/country/create',[CountryController::class,'create'])->name('country.create');
    Route::post('/country/store',[CountryController::class,'store'])->name('country.store');
    Route::get('/country/{country}/edit',[CountryController::class,'edit'])->name('country.edit');
    Route::post('/country/{country}/update',[CountryController::class,'update'])->name('country.update');
    Route::post('/country/delete',[CountryController::class,'delete'])->name('country.delete');


    
    //department
    Route::get('/department',[DepartmentController::class,'index'])->name('department');
    Route::get('/department/create',[DepartmentController::class,'create'])->name('department.create');
    Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');
    Route::get('/department/{department}/edit',[DepartmentController::class,'edit'])->name('department.edit');
    Route::post('/department/{department}/update',[DepartmentController::class,'update'])->name('department.update');
    Route::post('/department/delete',[DepartmentController::class,'delete'])->name('department.delete');


    
    //state
    Route::get('/state',[StateController::class,'index'])->name('state');
    Route::get('/state/create',[StateController::class,'create'])->name('state.create');
    Route::post('/state/store',[StateController::class,'store'])->name('state.store');
    Route::get('/state/{state}/edit',[StateController::class,'edit'])->name('state.edit');
    Route::post('/state/{state}/update',[StateController::class,'update'])->name('state.update');
    Route::post('/state/delete',[StateController::class,'delete'])->name('state.delete');


    //city
    
    Route::get('/city',[CityController::class,'index'])->name('city');
    Route::get('/city/create',[CityController::class,'create'])->name('city.create');
    Route::post('/city/store',[CityController::class,'store'])->name('city.store');
    Route::get('/city/{city}/edit',[CityController::class,'edit'])->name('city.edit');
    Route::post('/city/{city}/update',[CityController::class,'update'])->name('city.update');
    Route::post('/city/delete',[CityController::class,'delete'])->name('city.delete');

    //employee
    Route::get('/employee',[EmployeeController::class,'index'])->name('employee');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
    Route::get('/employee/{employee}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::post('/employee/{employee}/update',[EmployeeController::class,'update'])->name('employee.update');
    Route::post('/employee/delete',[EmployeeController::class,'delete'])->name('employee.delete');
   

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
