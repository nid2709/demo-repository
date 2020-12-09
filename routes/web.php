<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PdfController::class, 'showPdf'])->name('showPdf');

Route::get('/', [EmployeeController::class, 'showEmployees']);
// Route::get('/', 'EmployeeController@showEmployees')->name('showEmployees');
Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);
// Route::get('/employee/pdf', 'EmployeeController@createPDF')->name('createPDF');