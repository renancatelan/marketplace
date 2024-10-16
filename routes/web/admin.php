<?php
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

//Rota administration
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');
