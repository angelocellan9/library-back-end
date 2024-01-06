<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'biography'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public static function list(){
        $author = Author::orderByRaw('id')->get();
        $list = [];
        foreach ($author as $author) {
            $list[$author -> id] = $author->name;
        }

        return $list;
    }
}
