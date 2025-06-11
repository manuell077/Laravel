<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;

    protected $fillable =[
      
        'name',
        'categoria_id',
        'image_id'

    ];

    public function categoria(){
         
        return $this->belongsTo(Categoria::class);
    }
    
}
