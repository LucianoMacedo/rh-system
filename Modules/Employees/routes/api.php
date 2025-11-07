<?php

use Illuminate\Support\Facades\Route;
use Modules\Employees\Http\Controllers\EmployeesController;

Route::apiResource('employees', EmployeesController::class);
