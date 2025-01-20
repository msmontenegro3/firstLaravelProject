<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    // Discos de un género específico con paginación.

    public function show($id, $page)
    {
        $genre = Genre::findOrFail($id);

        // Cargar los discos relacionados con columnas específicas
        $records = $genre->records()
            ->select('records.id as record_id', 'records.title', 'records.release_year')
            ->paginate(10, ['*'], 'page', $page);

        return response()->json($records);
    }
}
