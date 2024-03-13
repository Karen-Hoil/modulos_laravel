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
  @foreach ($estudiantes as $estudiante)
  @section ('contenido1')
    <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">
        Bienvenido (docente)!
    </div>
      <div class="titulo">
        <h1 class="px-10 py-3 text-3xl font-bold">Control de alumnos asesorados</h1>
      </div>
      <div class="flex flex-wrap mt-10 justify-center">
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
        
        
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
        
        
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-col border rounded-lg shadow-lg px-7 m-5 bg-white">
            <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombre}}</h6>
            <div class="flex">
              <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative m-4 h-20 rounded-xl shadow-lg" />
              <div class="m-5 mr-10 mb-10">
                <p class="">{{$estudiante->proyecto}}</p>
                <p class="">{{$estudiante->matricula}}</p>
                <p class="">{{$estudiante->correo}}</p>
              </div>
            </div>
          </div>
        
      </div>  
      @endSection
      @endforeach    
</body>
</html>