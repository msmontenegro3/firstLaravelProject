<?php

namespace App\Http\Controllers;

use App\Models\Record;

class RecordController extends Controller
{
    public function index()
    {
        // Selecciona 2 discos fijos 
        $fixedRecords = Record::whereIn('id', [1, 2])->get();

        // Selecciona 3 discos aleatorios
        $randomRecords = Record::inRandomOrder()->take(3)->get();

        // Combina los discos fijos y aleatorios
        $records = $fixedRecords->merge($randomRecords);

        return view('welcome', compact('records'));
    }

    public function show($id)
    {
        // Obtiene el disco por su ID
        $record = Record::findOrFail($id);

        return view('record', compact('record'));
    }
}
