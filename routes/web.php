<?php
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AddExpController;
use App\Http\Middleware\IsAdminFilter;
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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/blog/{url}', [PageController::class, 'post']);
Route::get('/contact', [PageController::class, 'contact']);
Route::any('/loginadm', [PageController::class, 'aLogin'])->name('login');

// Route::prefix('amonitor')->middleware([IsAdminFilter::class])->group(function () {
Route::prefix('amonitor')->middleware([IsAdminFilter::class])->group(function () {
	Route::get('/aeditlist', [PageController::class, 'aEditList']);
	Route::get('/addarticle', [PageController::class, 'addarticle']);
	Route::get('article/create/{id}', [ContentController::class, 'create']);
	Route::get('article/show/{id}', [ContentController::class, 'show']);
	Route::get('article/edit/{id}', [ContentController::class, 'edit']);
	Route::get('article/delete/{id}', [ContentController::class, 'delete']);
	Route::get('/aeditor', [PageController::class, 'aEditor']);
	
	Route::get('/', [PageController::class, 'aMonitor']);
	
	Route::get('/arolls', [PageController::class, 'aRolls']);
	Route::get('/asheets', [PageController::class, 'aSheets']);
	Route::get('/acharts', [PageController::class, 'aCharts']);
	Route::get('/aletters', [PageController::class, 'aLetters']);
	Route::get('/abells', [PageController::class, 'aBells']);
});

