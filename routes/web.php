<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingManagementController;
use App\Http\Controllers\UserTrainingController;

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



Route::get('/', [TrainingManagementController::class, 'index']);
Route::get('/trainingmanagements', [TrainingManagementController::class, 'index'])->name('trainingmanagements.index');
Route::get('/trainingmanagements/edit', [TrainingManagementController::class, 'edit'])->name('trainingmanagements.edit');
Route::get('/trainingmanagements/create', [TrainingManagementController::class, 'create'])->name('trainingmanagements.create');
Route::post('/trainingmanagements', [TrainingManagementController::class, 'store'])->name('trainingmanagements.store');
Route::patch('/trainingmanagements/update', [TrainingManagementController::class, 'update'])->name('trainingmanagements.update');

Route::get('/usertrainings/explanation', [UserTrainingController::class, 'explanation'])->name('usertrainings.explanation');
