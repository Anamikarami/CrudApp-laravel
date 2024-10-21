<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudAppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[CrudAppController::class,'all_records'])->name('all.records');
Route::get('/add-new-record',[CrudAppController::class,'add_new_record'])->name('add.new.record');
Route::post('/store-new-record',[CrudAppController::class,'store_new_record'])->name('store.new.record');
Route::get('/edit-record/{id}',[CrudAppController::class,'edit_record'])->name('edit.record');
Route::post('/update-record/{id}',[CrudAppController::class,'update_record'])->name('update.record');
Route::get('/delete-record/{id}',[CrudAppController::class,'delete_record'])->name('delete.record');




require __DIR__.'/auth.php';
