<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return Proveedor::all();
    }

    public function store(Request $request)
    {
        return Proveedor::create($request->all());
    }

    public function show($id)
    {
        return Proveedor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($request->all());
        return $proveedor;
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return 204; // No Content
    }
}
