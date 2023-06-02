<?php

namespace App\Exports;

use App\Models\Measurement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LiveMeasurementExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Measurement::select('id', 'latitude', 'longitude', 'date', 'time', 'ph', 'temp')
            ->where('status', 1)->get();
    }

    public function headings(): array 
    {
        return [
            '#',
            'Latitude',
            'Longitude',
            'Datum',
            'Uhrzeit',
            'pH',
            'Temperatur'
        ];
    }
}
