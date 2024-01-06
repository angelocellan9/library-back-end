<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\Request;

class CopyApiController extends Controller
{
    public function index()
    {
        return Copy::all();
    }

    public function store(Request $request)
    {
        return Copy::create($request->all());
    }

    public function show($id)
    {
        return Copy::find($id);
    }

    public function update(Request $request, $id)
    {
        $copy = Copy::find($id);
        $copy->update($request->all());

        return $copy;
    }

    public function destroy($id)
    {
        $copy = Copy::find($id);
        $copy->delete();

        return response()->json(null, 204);
    }
}

