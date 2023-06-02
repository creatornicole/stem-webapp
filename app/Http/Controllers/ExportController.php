<?php

namespace App\Http\Controllers;

use App\Exports\ExportMeasurements;
use App\Exports\LiveMeasurementExport;
use App\Exports\ArchiveMeasurementExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExportController extends Controller
{
    public function exportLiveMeasurements() {
        
        $currDate = Carbon::parse(today())->format('Y_m_d');
        $filename = $currDate . '_measurements.xlsx';
        
        return Excel::download(new LiveMeasurementExport, $filename);
    }

    public function exportArchivedMeasurements() {

        return Excel::download(new ArchiveMeasurementExport, 'measurements.xlsx');
    }
}
