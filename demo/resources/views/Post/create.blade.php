<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
    <div>
        @error('titulo')
        <span>
            {{$message}}
        </span>
        @enderror
        <label>Titulo</label>
         <input type="text" name="titulo" value="{{old('titulo')}}" >   
    </div>

    <div>
        @error('cuerpo')
        <span>
            {{$message}}
        </span>
        @enderror

        <label>Cuerpo</label>
        <textarea name="cuerpo">{{old('cuerpo')}}</textarea>
    </div>

    
    <div>
        @error('imagen')
        <span>
            {{$message}}
        </span>
        @enderror
        <label>Archivo</label>
        <input type="file" name="imagen" > 
    </div>

    </div>

    <button type="submit" class="bg-sky-500 hover:bg-sky-700">Crear</button>
</form>