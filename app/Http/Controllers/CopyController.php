<?php

namespace App\Http\Controllers;
use App\Models\Copy;
use App\Models\Book;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function view()
    {
        $copy = Copy::orderBy('id')->get();

        return view('copy.index',['copies' => $copy]);
    }

    public function create(){

        $book = Book::list();
        return view('copy.create', ['books' => $book]);
    }

    public function store(Request $request){
        $request->validate([
            'copy_number' => 'required',
            'status' => 'required',
            'book_id' => 'required'
        ]);

        Copy::create([
            'copy_number' => $request->copy_number,
            'status' => $request->status,
            'book_id' => $request->book_id

        ]);

        return redirect('/copy')->with('info', "A new copy of a book has been added.");
    }

    public function edit(Copy $copy){

        $book = Book::list();
        return view('copy.edit',['books' => $book], compact('copy'));
    }

    public function update(Copy $copy, Request $request ){
        $request->validate([
            'copy_number' => 'required',
            'status' => 'required',
            'book_id' => 'required'
        ]);

        $copy->update($request->all());
        return redirect('/copy')->with('info', "$copy->id has been updated.");
    }

    public function delete(Copy $copy) {
        $copy->delete();

        return redirect('/copy')->with('info', "$copy->id has been deleted successfully");
    }
}
