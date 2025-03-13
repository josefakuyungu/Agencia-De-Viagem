<?php

use App\Http\Middleware\DashboardMiddleware;
use App\Livewire\Auth\AuthComponent;
use App\Livewire\Dashboard\DashboardComponent;
use App\Livewire\Login\LoginComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contacto');
});

Route::get('/services', function () {
    return view('servico');
});


Route::get('/about', function () {
    return view('sobre-nos');
});


Route::get('/registo', LoginComponent::class)->name("login");
Route::middleware(DashboardMiddleware::class)->group(function() {
Route::get('/dashboard/inicio', DashboardComponent::class)->name("dashboard.admin");

});


/*Route::get("/hash", function (){
    return \Hash::make("123456");
});  Rota para o admin */