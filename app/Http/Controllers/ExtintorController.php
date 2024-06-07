<?php

namespace App\Http\Controllers;

use App\Models\Extintor;
use Illuminate\Http\Request;

class ExtintorController extends Controller
{
    public function index()
    {
        return Extintor::all();
    }

    public function store(Request $request)
    {
        return Extintor::create($request->all());
    }

    public function show($id)
    {
        return Extintor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $extintor = Extintor::findOrFail($id);
        $extintor->update($request->all());
        return $extintor;
    }

    public function destroy($id)
    {
        $extintor = Extintor::findOrFail($id);
        $extintor->delete();
        return 204; // No Content
    }
}
