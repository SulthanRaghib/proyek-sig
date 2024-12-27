<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $provinsiData = Provinsi::all();

        return view('map.index', [
            'title' => 'Map',
            'provinsi' => $provinsiData
        ]);
    }
}
