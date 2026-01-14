<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioImages extends Model
{
    protected $table = 'portfolio_images';
    protected $fillable = [
        'portfolio_id',
        'image_path',
    ];
}
