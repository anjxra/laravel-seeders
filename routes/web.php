<?php

use App\Http\Controllers\Api\StudentController;

Route::middleware('api')->group(function () {
    Route::apiResource('students', StudentController::class);
});
