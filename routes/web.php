<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingManagementController;
use App\Http\Controllers\UserTrainingController;
use App\Http\Controllers\TrainingExplanationController;
use App\Http\Controllers\TrainingRecordController;
use App\Http\Controllers\TrainingResultController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UploadController;


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

//ユーザー認証機能
Route::get('/', [UserTrainingController::class, 'index'])->middleware(['auth'])->name('usertrainings.index');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/
require __DIR__.'/auth.php';


//ユーザー一覧画面
Route::get('/usertrainings', [UserTrainingController::class, 'index'])->middleware(['auth'])->name('usertrainings.index');



//解説画面
Route::get('/explanations', [TrainingExplanationController::class, 'select'])->middleware(['auth'])->name('explanations.select');
Route::get('/explanations/show/{category}', [TrainingExplanationController::class, 'show'])->middleware(['auth'])->name('explanations.show');


//記録画面
Route::get('/trainingrecords/input', [TrainingRecordController::class, 'input'])->middleware(['auth'])->name('trainingrecords.input');
Route::post('/trainingrecords', [TrainingRecordController::class, 'store'])->middleware(['auth'])->name('trainingrecords.store');

//成果画面
Route::get('/trainingresults/date', [TrainingResultController::class, 'date'])->middleware(['auth'])->name('trainingresults.date');
Route::get('/trainingresults/display/{date}', [TrainingResultController::class, 'display'])->middleware(['auth'])->name('trainingresults.display');




// 管理ログイン画面
Route::get('/admin-login', [AdminLoginController::class, 'create'])->name('admin.login');
// 管理ログイン
Route::post('/admin-login', [AdminLoginController::class, 'store'])->name('admin.login.store');
// 管理ログアウト
Route::delete('/admin-login', [AdminLoginController::class, 'destroy'])->name('admin.login.destroy');

// 管理ログイン後のみアクセス可
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin.top');
    })->name('admin.top');
    //管理者一覧・編集・登録・削除
    Route::get('/trainingmanagements', [TrainingManagementController::class, 'index'])->name('trainingmanagements.index');
    Route::get('/trainingmanagements/show/{id}', [TrainingManagementController::class, 'show'])->name('trainingmanagements.show');
    Route::get('/trainingmanagements/edit/{id}', [TrainingManagementController::class, 'edit'])->name('trainingmanagements.edit');
    Route::get('/trainingmanagements/create', [TrainingManagementController::class, 'create'])->name('trainingmanagements.create');
    Route::post('/trainingmanagements', [TrainingManagementController::class, 'store'])->name('trainingmanagements.store');
    Route::patch('/trainingmanagements/update/{id}', [TrainingManagementController::class, 'update'])->name('trainingmanagements.update');
    Route::delete('/trainingmanagements/destroy/{id}', [TrainingManagementController::class, 'destroy'])->name('trainingmanagements.destroy');
    Route::get('/image_register', [UploadController::class, 'index'])->name('image_register');
    Route::post('/image_check', [UploadController::class, 'imagePost'])->name('image_check');
});

