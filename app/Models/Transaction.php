<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $guarded = [];

    function Stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id', 'id');
    }
}
