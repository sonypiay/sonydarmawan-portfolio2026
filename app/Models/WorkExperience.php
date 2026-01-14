<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = 'work_experience';
    protected $fillable = [
        'title',
        'position',
        'company_name',
        'description',
        'start_date',
        'end_date',
        'currently_working'
    ];
}
