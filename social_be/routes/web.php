<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;


// view admin
Route::get('/admin/dashboard/', [AdminController::class,'dashboard']);
