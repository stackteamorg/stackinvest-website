<?php

use App\Http\Controllers\ConsultantRequestController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamMembersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\AngelController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Contact Us Route
Route::get('/contact-us', [ContactUsController::class, 'create'])->name('contact.us');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact.us.request');
//Consultant Request Route
Route::get('/consultant', [ConsultantRequestController::class, 'create'])->name('consultant');
Route::post('/consultant', [ConsultantRequestController::class, 'store'])->name('consultant.request');

//TeamMember Route
Route::get('/team-members',[TeamMembersController::class,'create'])->name('team-members');
//Portfolio
Route::get('/portfolio',[PortfolioController::class,'create'])->name('portfolio');
//Mission
Route::get('/mission',[MissionController::class,'create'])->name('mission');
//Angel
Route::get('/angel',[AngelController::class,'create'])->name('angel');

//Investor Route
Route::get('/investor', [InvestorController::class, 'create'])->name('investor');
Route::post('/investor', [InvestorController::class, 'store'])->name('investor.request');

require __DIR__ . '/auth.php';
