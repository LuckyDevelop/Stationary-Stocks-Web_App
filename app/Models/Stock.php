<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $guarded = [];

    function Supplier()
    {
        return $this->belongsTo(Supplier::class, 'supp_id', 'id');
    }

    function Qty()
    {
        return $this->belongsTo(Qty::class, 'qty_id', 'id');
    }

    function Type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    function Transaction()
    {
        return $this->hasMany(Transaction::class, 'stock_id', 'id');
    }

    function Buying()
    {
        return $this->hasMany(Buying::class, 'stock_id', 'id');
    }
}
