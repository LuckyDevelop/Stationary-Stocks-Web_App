<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    use HasFactory;
    protected $table = 'buyings';
    protected $guarded = [];

    function Supplier()
    {
        return $this->belongsTo(Supplier::class, 'supp_id', 'id');
    }

    function Stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id', 'id');
    }
}
