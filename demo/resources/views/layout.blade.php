<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Titulo por defecto')</title>
     @vite('resources/css/app.css')
</head>
<body>
    
   <header>

   </header>
   
   <main>
    <h1>Hola a todos</h1>
      @yield('content')
   </main>

   <footer>
     <!-- <p>2024 MI SITIO</p> -->
     
   </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>