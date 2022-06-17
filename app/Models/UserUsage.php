<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUsage extends Model
{
    use HasFactory;
    protected $table = 'user_usages';
    protected $guarded = [];


    function Usage()
    {
        return $this->hasMany(Transaction::class, 'user_usage_id', 'id');
    }
}
