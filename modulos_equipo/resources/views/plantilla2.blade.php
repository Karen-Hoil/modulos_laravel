<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo2')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Aquí puedes agregar estilos personalizados si es necesario */
    </style>
</head>

<body>
    <div>
        <header>
            <nav class="bg-blue-900 px-14 py-5 flex flex-wrap justify-between items-center">
                <div class="flex m-auto">
                    <img src="../img/UT.png" alt="logo-ut" class="w-52 h-14 filter drop-shadow-lg">
                </div>
                <div class="flex m-auto px-5 mt-2">
                    <ul class="flex flex-wrap">
                        <li class="px-5 py-1">
                            <a class="text-white">Gestión de estadias</a>
                        </li>
                        <li class="px-5 py-1">
                            <a class="text-white">Proyecto</a>
                        </li>
                        <li class="px-5 py-1">
                            <a class="text-white">Asesores</a>
                        </li>
                        <li class="px-5 py-1">
                            <a class="text-white">Estudiantes</a>
                        </li>
                        <li class="px-5 py-1">
                            <a class="text-white">Documentos</a>
                        </li>
                    </ul>
                </div>
                <div class="flex m-auto mt-2">
                    <img src="../img/user.png" alt="User" class="w-16 h-16">
                </div>
            </nav>
        </header>
    </div>
    <main>
        @yield ('contenido2')
    </main>
</body>

</html>
