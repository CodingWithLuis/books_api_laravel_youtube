<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'isbn',
        'publication_year',
        'book_status_id'
    ];

    public function book_status()
    {
        return $this->belongsTo(BookStatus::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
