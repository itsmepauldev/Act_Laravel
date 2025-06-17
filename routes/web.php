<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

 
    return view('welcome');

});

Route::get('/contact', function () {
 
        return "This is Contact Page";
    });
    
 Route::get('/account/{fullname}', function ($fullname) {
 
    return "Hello po $fullname";
  
});

// Route::get('/account/{fullname}/{id}', function ($fullname,$id) {
 
//     return "Hello po $fullname your id $id";
  
// });

Route::get('/profile', [ProfileController::class,'index']);
Route::get('/profile/create', [ProfileController::class,'create']);
Route::post('/profile', [ProfileController::class,'store']);
Route::get('/profile/{id}/edit', [ProfileController::class,'edit']);
Route::put('/profile/{id}', [ProfileController::class,'update']);
Route::get('/profile/{id}', [ProfileController::class,'show']);
Route::delete('/profile/{id}', [ProfileController::class,'destroy']);



Route::get('/students', [StudentController::class,'index']) ->name('students');
Route::get('/students/create', [StudentController::class,'create']) ->name('students.create');
Route::post('/students', [StudentController::class,'store'])->name('store');
Route::get('/students/{id}/edit', [StudentController::class,'edit']);
Route::put('/students/{id}', [StudentController::class,'update'])->name('students.update');
Route::get('/students/{id}', [StudentController::class,'show']);
Route::delete('/students/{id}', [StudentController::class,'destroy'])->name('students.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
