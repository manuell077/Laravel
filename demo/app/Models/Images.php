<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Images extends Model
{
    /** @use HasFactory<\Database\Factories\ImagenFactory> */
    use HasFactory;

    protected $fillable =[
        'route',
        'imageable_id',
        'imageable_type'
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    
}
