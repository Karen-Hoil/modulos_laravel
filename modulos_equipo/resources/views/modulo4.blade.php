<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends ('plantilla1')
    @section ('titulo1')
    Estudiantes
    @endSection
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  @section ('contenido1')
    <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">
        Bienvenido (docente)!
    </div>
      <div class="titulo">
        <h1 class="px-10 py-3 text-3xl font-bold">Control de alumnos asesorados</h1>
      </div>
      <div class="mt-10 justify-center">
        <div class="flex flex-wrap justify-center mb-4 pb-4">
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
              <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
              <div class="mx-5">
                <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
              </div>
          </div>
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center mb-4 pb-4">
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center mb-4 pb-4">
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
          <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-16 my-2 mx-5">
            <img src="{{ asset('img/usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
            <div class="mx-5">
              <h6 class="text-xl text-blue-600">Estudiante #</h6>
                <p class="pl-2">Proyecto:$proyecto</p>
                <p class="pl-2">Matricula:$matricula</p>
                <p class="pl-2">Correo:$correo</p>
            </div>
          </div>
        </div>
      </div>  
      @endSection    
</body>
</html>