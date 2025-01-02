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

    public function gempa()
    {
        $apiGempa = 'https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json';

        return view('map.gempa', [
            'title' => 'Gempa',
            'gempa' => $apiGempa
        ]);
    }
}
