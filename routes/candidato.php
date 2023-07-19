<?php
/*
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;

    //rotas de candidato sem necesidade de autorização
    Route::prefix('candidatos')->group(function(){
        Route::middleware(['guest:candidato', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'back.pages.candidate.auth.login')->name('candidatos.login');
            Route::post('/login_handler', [CandidatoController::class, 'loginHandler'])->name('candidatos.login_handler');
            Route::resource('candidatos', CandidatoController::class)->only([
                'create'
            ]);
        });

        //rotas de candidato com autorização
        Route::middleware(['auth:candidato', 'PreventBackHistory'])->group(function () {
            Route::get('/', CandidatoController::class, 'inicio')->name('home');
            Route::resource('candidatos', CandidatoController::class)->except([
                'destroy'
            ]);
        });
    });

    */
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CandidatoController;

    Route::view('/login', 'back.pages.candidate.auth.login')->name('candidatos.login');
    Route::post('/login_handler', [CandidatoController::class, 'loginHandler'])->name('candidatos.login_handler');
    Route::get('/', CandidatoController::class, 'inicio')->name('candidatos.home');
    Route::resource('candidatos', CandidatoController::class);
