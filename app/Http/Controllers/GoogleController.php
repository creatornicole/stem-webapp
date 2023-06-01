<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function gmaps()
    {
    	$locations = DB::table('measurements')->get();
        return view('gmaps', [
            'locations' => $locations
        ]);
    }
}
