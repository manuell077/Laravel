<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Images;  
use App\Models\Post;            
use App\Models\User;                    
use Illuminate\Support\Facades\Storage;         
use Illuminate\Support\Facades\DB;     
use Inertia\Inertia;             

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::all();
        
         return Inertia::render('posts/index' , ['post' => $posts,] );

    }

    public function crete(){
       
        return view('post.create');
    }

    public function store(StorePostRequest $request){
        
        $path = Storage::disk('public')->putFile('images',$request->file('imagen'));
        $request['user_id'] = User::all()->random()->id;
        $post = Post::create($request->all());

        Images::create([
        'route' => $path,
        'imageable_id'=>$post->id,
        'imageable_type'=>Post::class
        ]);
    }

    
}
