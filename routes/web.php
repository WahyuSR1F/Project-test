<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\AuthenticationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('loging-view');
});

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');


Route::middleware('auth')->group(function () {
    Route::get('/dasboard', [DasboardController::class, 'index'])->name('dasboard');
});