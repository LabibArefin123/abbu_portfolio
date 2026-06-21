<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupervisionExperience extends Model
{
    protected $fillable = [

        'position',
        'duration',
        'location',
        'description',
        'responsibilities',
        'sort_order'

    ];
}
