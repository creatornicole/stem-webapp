<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function showStartpage() {
        return view('index');
    }
    public function showPresentMeasurements() {
        return view('live', [
            'heading' => "Live"
        ]);
    }

    public function showPastMeasurements() {
        return view('archive', [
            'heading' => "Archiv"
        ]);
    }
}
