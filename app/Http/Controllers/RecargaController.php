<?php

namespace App\Http\Controllers;

use App\Models\Recarga;
use Illuminate\Http\Request;

class RecargaController extends Controller
{
    public function index()
    {
        return Recarga::all();
    }

    public function store(Request $request)
    {
        return Recarga::create($request->all());
    }

    public function show($id)
    {
        return Recarga::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $recarga = Recarga::findOrFail($id);
        $recarga->update($request->all());
        return $recarga;
    }

    public function destroy($id)
    {
        $recarga = Recarga::findOrFail($id);
        $recarga->delete();
        return 204; // No Content
    }
}
