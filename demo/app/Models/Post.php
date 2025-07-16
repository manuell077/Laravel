<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends Model
{
    use HasFactory;
    
        protected $fillable =[
      
        'titulo',
        'cuerpo',
        'user_id'

    ];


    public function Postable(): MorphTo
    {
        return $this->morphTo();
    }
    
     public function image(){
         return $this->morphOne(Images::class, 'imageable');
    }


}
