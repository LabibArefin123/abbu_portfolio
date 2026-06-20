<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupervisionExperience extends Model
{
    protected $fillable = [
        'position',
        'start_date',
        'end_date',
        'organization',
        'bridges',
        'responsibilities'
    ];
}
