<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UsersTable;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationsController;


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/messages', [HomeController::class, 'store'])->name('messages');
Route::get('/message/{id}', [HomeController::class, 'show'])->name('message.show');
Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications.index');
Route::patch('/notifications/{id}', [NotificationsController::class, 'read'])->name('notifications.read');
Route::delete('/notifications/{id}', [NotificationsController::class, 'destroy'])->name('notifications.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/users', UsersTable::class)->name('users');
