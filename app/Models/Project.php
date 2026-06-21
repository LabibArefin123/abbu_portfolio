<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [

        'project_name',
        'project_type',
        'location',
        'river_name',
        'length_m',
        'position',
        'project_year',
        'description',
        'featured',
        'sort_order'
    ];
}