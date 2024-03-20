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
    <div class="flex flex-wrap my-10 justify-center">
      @foreach ($estudiantes as $estudiante)
      <div class="flex flex-col border rounded-lg shadow-lg px-8 m-5 bg-white w-1/4 max-w-1/4">
        <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
        <div class="flex">
          <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative h-20 rounded-xl shadow-lg" />
          <div class="pl-5">
            <p class="">{{$estudiante->proyecto}}</p>
            <p class="">{{$estudiante->matricula}}</p>
            <p class="">{{$estudiante->correo}}</p>
          </div>
        </div>
        <div class="flex justify-center m-5 gap-2">
          <button class="bg-blue-600 p-2 rounded-lg text-white">Generar</button>
          <button class="bg-blue-600 p-2 rounded-lg text-white">Generar</button>
          <button class="bg-blue-600 p-2 rounded-lg text-white">Generar</button>
        </div>
      </div>
      @endforeach 
      </div> 
      @endSection   
</body>
</html>