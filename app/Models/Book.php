<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'isbn', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function copies()
    {
        return $this->hasMany(BookCopy::class);
    }

    public static function list(){
        $book = Book::orderByRaw('id')->get();
        $list = [];
        foreach ($book as $book) {
            $list[$book -> id] = $book->title;
        }

        return $list;
    }
}
