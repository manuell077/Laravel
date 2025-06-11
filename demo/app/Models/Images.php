<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    /** @use HasFactory<\Database\Factories\ImagenFactory> */
    use HasFactory;

    protected $fillable =[
        'route'
        

    ];
}
