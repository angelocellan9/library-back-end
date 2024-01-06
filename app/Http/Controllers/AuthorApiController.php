<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorApiController extends Controller
{
    public function index()
    {
        return Author::all();
    }

    public function store(Request $request)
    {
        return Author::create($request->all());
    }

    public function show($id)
    {
        return Author::find($id);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->update($request->all());

        return $author;
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();

        return response()->json(null, 204);
    }
}
