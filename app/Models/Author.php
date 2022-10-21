<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $table = 'authors';
    use HasFactory;


    public function tests()
    {
        return $this->hasMany(Author::class, 'id', 'author_id');
    }
}
