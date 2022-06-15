<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $guarded = [];

    function Stock()
    {
        return $this->hasMany(Stock::class, 'type_id', 'id');
    }
}
