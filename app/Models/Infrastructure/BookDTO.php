<?php

namespace App\Models\Infrastructure;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
 */
class BookDTO extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $connection = 'mysql';
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'publisher_year',
        'isbn',
        'isBorrowed'
    ];
}
