<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{

    protected $fillable = [
        'test_type_id',
        'description'
    ];

    protected $table = 'tests';


    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }



}
