<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Chat\ChatBox;
use App\Livewire\Chat\ChatList;
use App\Livewire\Chat\Send;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// chat livewire
Route::get('/Chat/Send', [Send::class]);
Route::get('/Chat/ChatList', [ChatList::class]);
Route::get('/Chat/ChatBox', [ChatBox::class]);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
