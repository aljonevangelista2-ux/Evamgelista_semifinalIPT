<?php

use App\Http\Controllers\ProductController;

Route::get('/equipments', [EquipmentController::class, 'index']);