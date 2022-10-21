<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{

    protected $table = 'test_types';
    use HasFactory;


    public function tests()
    {
        return $this->hasMany(Test::class, 'test_type_id', 'id');
    }
}
