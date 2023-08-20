<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Manager\LoginController as ManagerLoginController;
use App\Http\Controllers\Manager\ManagerController as ManagerManagerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RegisterController;
use App\Models\Application;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');



Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/private', [ApplicationController::class, 'index'])->name('private.index');
    Route::post('/private', [ApplicationController::class, 'create'])->name('private.create');
    Route::get('/allapp', [ApplicationController::class, 'show'])->name('allapp.show');
});

Route::middleware('guest')->group(function () { //входим и регистрируемся только если пользователь не авторизован
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('login.action');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.action');
});

//панель менеджера
Route::get('/manager', [App\Http\Controllers\Manager\LoginController::class, 'index'])->name('manager.index');
Route::post('/manager', [App\Http\Controllers\Manager\LoginController::class, 'login'])->name('manager.login');
Route::get('/manager/panel', [App\Http\Controllers\Manager\ManagerController::class, 'show'])->name('manager.panel');

//просмотр заявки
Route::get('/manager/panel/{application}', [App\Http\Controllers\Manager\ManagerController::class, 'showApp'])->name('app.show');

//Изменение заявки
Route::get('/manager/panel/{application}/edit', [App\Http\Controllers\Manager\ManagerController::class, 'updateApp'])->name('app.edit');
Route::post('/manager/panel/{application}/update', [ApplicationController::class, 'update'])->name('app.update');
