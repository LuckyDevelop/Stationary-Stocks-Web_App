<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qty extends Model
{
    use HasFactory;
    protected $table = 'qtys';
    protected $guarded = [];

    function Stock()
    {
        return $this->hasMany(Stock::class, 'qty_id', 'id');
    }

    function Usage()
    {
        return $this->hasMany(Transaction::class, 'qty_id', 'id');
    }
}
