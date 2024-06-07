<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        return Tipo::all();
    }

    public function store(Request $request)
    {
        return Tipo::create($request->all());
    }

    public function show($id)
    {
        return Tipo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tipo = Tipo::findOrFail($id);
        $tipo->update($request->all());
        return $tipo;
    }

    public function destroy($id)
    {
        $tipo = Tipo::findOrFail($id);
        $tipo->delete();
        return 204; // No Content
    }
}
