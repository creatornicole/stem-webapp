<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MeasurementController;
use \App\Http\Controllers\ExportController;

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

Route::get('/', [MeasurementController::class, 'showStartpage']);

Route::get('/live', [MeasurementController::class, 'showPresentMeasurements']);
Route::get('/live/changeStatus', [MeasurementController::class, 'archiveMeasurements']);
Route::get('/live/export', [ExportController::class, 'exportLiveMeasurements']);

Route::get('/archive', [MeasurementController::class, 'showPastMeasurements']);
Route::get('/archive/export', [ExportController::class, 'exportArchivedMeasurements']);
