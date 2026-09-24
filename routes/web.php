<?php

use App\Http\Controllers\EquipmentController;

Route::get('/', [EquipmentController::class, 'index'])->name('equipment.index');
Route::get('/labs', [EquipmentController::class, 'labs'])->name('labs.index');