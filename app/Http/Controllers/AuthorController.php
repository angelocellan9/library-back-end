<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function view()
    {
        $auth = Author::orderBy('id')->get();

        return view('author.index',['authors' => $auth]);
    }

    public function create(){
        return view('author.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'biography' => 'nullable',
        ]);

        Author::create([
            'name' => $request->name,
            'biography' => $request->biography,
        ]);

        return redirect('/author')->with('info', 'A new author has been added.');
    }

    public function edit(Author $author){
        return view('author.edit', compact('author'));
    }

    public function update(Author $author, Request $request ){
        $request->validate([
            'name' => 'required',
            'biography' => 'nullable'
        ]);

        $author->update($request->all());
        return redirect('/author')->with('info', "$author->name has been updated.");
    }

    public function delete(Author $author) {
        $author->delete();

        return redirect('/author')->with('info', "$author->name has been deleted successfully");
    }
}
