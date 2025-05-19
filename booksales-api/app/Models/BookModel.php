<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'books';
    public static function getbooks()
    {
        return self::all();
    }
}
