<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $guarded = [];

    function Stock()
    {
        return $this->hasMany(Stock::class, 'supp_id', 'id');
    }

    function Buying()
    {
        return $this->hasMany(Buying::class, 'supp_id', 'id');
    }
}
