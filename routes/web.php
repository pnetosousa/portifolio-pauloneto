<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::group(['middleware' => ['web', 'App\Http\Middleware\SetLocale']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/sobre', [AboutController::class, 'index'])->name('about');
    Route::get('/projetos', [ProjectsController::class, 'index'])->name('projetos');
    
    // Easter Egg - Algoritmos de Ordenação
    Route::get('/easter-egg', function () {
        return view('easter-egg');
    })->name('easter-egg');
    
    Route::get('lang/{lang}', function ($lang) {
        if (in_array($lang, ['pt', 'en'])) {
            Session::put('locale', $lang);
            App::setLocale($lang);
            Session::save();
        }
        return redirect()->back();
    });
});