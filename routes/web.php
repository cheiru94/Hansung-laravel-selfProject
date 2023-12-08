<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\PostController;
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

/* 🟢 메인 페이지 🟢 */

Route::get('/', function () {
  return view('welcome');
});


// 🟢 작성 ↓↓↓↓↓↓↓↓↓↓↓↓
// Route::get('contacts',[ContactFormController::class,'index'])->name('contacts.index');

/* 1. /contacts */
Route::prefix('contacts')   // 1. url주소
  ->middleware(['auth']) // 2. 미들웨어 : 로그인 하지 않으면 페이지에 접속할 수 없음 
  ->name('contacts.')    // 3. 라우터 이름 
  ->controller(ContactFormController::class)  // 3. 컨트롤러
  ->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}destroy', 'destroy')->name('destroy');
  });

/* 2. /message  */
Route::get('/message', function () {
  return view('hansung.message');
});

/* 3 /works  */
Route::get('/projects', function () {
  return view('hansung.projects');
});

/* 4. PostController - /posts */
Route::resource('/posts', PostController::class)->middleware(['auth']);

/* 5. Commentontroller - /post.comments  */
Route::resource('/posts.comments', CommentController::class)->middleware(['auth']);


// 프로젝트 
Route::get('/hansung/work_link/project1', function () {
  return view('hansung.work_link.project1');
});
// 🟢 작성 ↑↑↑↑↑↑↑↑↑↑↑↑





/* 🔴　Breeze 내용 🔴 */
Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
