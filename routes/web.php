<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfileController;
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


// 🟢 작성 ↓↓↓↓↓↓↓↓↓↓↓↓
// Route::get('contacts',[ContactFormController::class,'index'])->name('contacts.index');


Route::prefix('contacts')   // 1. url주소
     ->middleware(['auth']) // 2. 미들웨어 : 로그인 하지 않으면 페이지에 접속할 수 없음 
     ->name('contacts.')    // 3. 라우터 이름 
     ->controller(ContactFormController::class)  // 3. 컨트롤러
     ->group(function(){  
          Route::get('/',[ContactFormController::class,'index'])->name('index'); // 
          Route::get('/create',[ContactFormController::class,'create'])->name('create'); // 
          Route::post('/store',[ContactFormController::class,'store'])->name('store'); // 

     });


// 🟢 작성 ↑↑↑↑↑↑↑↑↑↑↑↑


// Breeze 내용
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
