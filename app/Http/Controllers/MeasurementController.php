<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use \Illuminate\Support\Facades\DB;

class MeasurementController extends Controller
{
    public function showStartpage() {
        return view('index');
    }

    public function showPresentMeasurements() {
        $currentMeasurements = Measurement::where("status", "=", "1")->get();
        
        return view('live', [
            'heading' => 'Live',
            'measurements' => $currentMeasurements,
        ]);
    }

    public function showPastMeasurements() {
        $pastMeasurements = Measurement::where("status", "=", "0")->get();
        
        return view('archive', [
            'heading' => 'Archiv',
            'measurements' => $pastMeasurements
        ]);
    }

    public function archiveMeasurements() {
        DB::table('measurements')->where('status', 1)->update(['status' => 0]);

        return redirect('/live');
    }
}
