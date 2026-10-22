<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Handmade extends Model
{
    protected $table = 'handmades';

    protected $fillable = [
        'name', 'artisan', 'price', 'material', 'image', 'description',
    ];

    protected $casts = [
        'price' => 'integer',
    ];
}
