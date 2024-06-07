<?php

namespace App\Http\Controllers;

use App\Models\Inspeccion;
use Illuminate\Http\Request;

class InspeccionController extends Controller
{
    public function index()
    {
        return Inspeccion::all();
    }

    public function store(Request $request)
    {
        return Inspeccion::create($request->all());
    }

    public function show($id)
    {
        return Inspeccion::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $inspeccion = Inspeccion::findOrFail($id);
        $inspeccion->update($request->all());
        return $inspeccion;
    }

    public function destroy($id)
    {
        $inspeccion = Inspeccion::findOrFail($id);
        $inspeccion->delete();
        return 204; // No Content
    }
}
