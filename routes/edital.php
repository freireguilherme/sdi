<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditalController;

Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
    Route::resource('editals', EditalController::class);
});
