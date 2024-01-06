<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function view()
    {
        $book = Book::orderBy('id')->get();

        return view('book.index',['books' => $book]);
    }

    public function create(){

        $author = Author::list();
        return view('book.create', ['authors' => $author]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'author_id' => 'required'
        ]);

        Book::create([
            'title' => $request->title,
            'isbn' => $request->isbn,
            'author_id' => $request->author_id

        ]);

        return redirect('/book')->with('info', 'A new book has been added.');
    }

    public function edit(Book $book){

        $author = Author::list();
        return view('book.edit',['authors' => $author], compact('book'));
    }

    public function update(Book $book, Request $request ){
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'author_id' => 'required'
        ]);

        $book->update($request->all());
        return redirect('/book')->with('info', "$book->title has been updated.");
    }

    public function delete(Book $book) {
        $book->delete();

        return redirect('/book')->with('info', "$book->title has been deleted successfully");
    }
}
