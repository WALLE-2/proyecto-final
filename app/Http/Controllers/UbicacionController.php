<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function index()
    {
        return Ubicacion::all();
    }

    public function store(Request $request)
    {
        return Ubicacion::create($request->all());
    }

    public function show($id)
    {
        return Ubicacion::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->update($request->all());
        return $ubicacion;
    }

    public function destroy($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->delete();
        return 204; // No Content
    }
}
