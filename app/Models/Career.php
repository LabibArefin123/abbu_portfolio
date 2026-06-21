<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'position',
        'duration',
        'period',
        'summary',
        'sort_order',
    ];
}
