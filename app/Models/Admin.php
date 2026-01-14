<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    use HasUuids;

    public $incrementing = false;
    
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    protected $hidden = ['password'];
}