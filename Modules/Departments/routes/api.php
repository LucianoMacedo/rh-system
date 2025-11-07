<?php

use Illuminate\Support\Facades\Route;
use Modules\Departments\Http\Controllers\DepartmentsController;

Route::apiResource('departments', DepartmentsController::class);
