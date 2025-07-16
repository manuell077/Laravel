@extends('layout')


     @section('content')
     
        <div>


      @foreach($posts as $item)
     <img src="{{$item->image->path ?? "No tiene"}}" alt="">
      
      @endforeach   
        
        </div>

        
    @endsection

