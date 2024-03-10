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
        <div class="flex flex-wrap justify-center">
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
        </div>
        <div class="flex flex-wrap justify-center">
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
          <div class="border rounded-lg shadow-lg py-5 px-10 my-2 mx-5">
            <h6 class="text-xl text-center text-blue-600">Estudiante #</h6>
            <p>Proyecto:$proyecto</p>
            <p>Matricula:$matricula</p>
          </div>
        </div>
      </div>  
      @endSection    
</body>
</html>