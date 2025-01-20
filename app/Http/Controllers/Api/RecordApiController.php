<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;

class RecordApiController extends Controller
{

    // Lista paginada de discos de vinilo.

    public function index($page)
    {
        $records = Record::select('id', 'title', 'price')
            ->paginate(10, ['*'], 'page', $page);

        return response()->json($records);
    }


    // Disco específico por ID.

    public function show($id)
    {
        $record = Record::findOrFail($id);

        return response()->json($record);
    }
}
