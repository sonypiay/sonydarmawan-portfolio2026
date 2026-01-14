<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{   
    protected $fillable = [
        'school',
        'major',
        'degree',
        'start_date',
        'end_date',
        'location',
        'is_active',
    ];
}
