@extends('layout')


     @section('content')
     
        <div>
      @foreach($posts as $item)
     <img src="{{$item->image->route}}" alt="">
      
     <h1>{{$item->titulo}}</h1>
     <p>{{$item->cuerpo}}</p>
     <p>Usuario:{{$item->user_id}}<p>   
      <p>Creado:{{$item->created_at}}</p>
      <p>Actualizado:{{$item->updated_at}}</p>
      @endforeach       
        </div>

        
    @endsection

