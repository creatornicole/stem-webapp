<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;

class MeasurementController extends Controller
{
    public function showStartpage() {
        return view('index');
    }
    public function showPresentMeasurements() {
        return view('live', [
            'heading' => 'Live'
        ]);
    }

    public function showPastMeasurements() {
        return view('archive', [
            'heading' => 'Archiv',
            'measurements' => Measurement::all()
        ]);
    }
}
