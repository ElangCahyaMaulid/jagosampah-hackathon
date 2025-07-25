<?php
use App\Http\Controllers\ReportController;

Route::post('/lapor', [ReportController::class, 'store']);
