<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Measurement;
use \Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amount = 10;

        Measurement::factory()->count($amount)->create();

        //Update to archive data

        //Update to todays live data
        DB::table('measurements')->update([
            'date' => Carbon::now()->format('Y-m-d'),
            'status' => 1
        ]);
    }
}
