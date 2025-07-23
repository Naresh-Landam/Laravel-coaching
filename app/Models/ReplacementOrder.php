<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplacementOrder extends Model
{
    // Allow mass assignment
    protected $fillable = [
        'item_name',
        'quantity',
        'notes',
    ];
}
