<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

    protected $fillable = ['copy_number', 'status', 'book_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    
}
