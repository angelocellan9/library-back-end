<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookApiController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    public function show($id)
    {
        return Book::find($id);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());

        return $book;
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return response()->json(null, 204);
    }
}
