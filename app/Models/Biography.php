<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    
    protected $primaryKey = 'key_name';
    protected $keyType = 'string';
    protected $guarded = [];
}