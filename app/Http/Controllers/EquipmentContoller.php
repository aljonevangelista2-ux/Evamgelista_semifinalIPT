<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Laboratories;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipment', compact('equipments'));
    }

    public function labs()
    {
        $labs = Laboratories::all();
        return view('laboratories', compact('labs'));
    }
}