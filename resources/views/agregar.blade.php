<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Agregar Usuario</title>
</head>
<body>
    <main class="h-screen w-screen flex flex-col items-center">
        <div class="w-full flex justify-between p-10">
            <h1 class="font-medium">
                Agregar Usuarios
            </h1>

            <a href="/mostrar" class="flex items-center justify-between bg-gray-400 px-5 h-10 rounded-lg hover:cursor-pointer">
                <span class="material-symbols-outlined">
                    menu
                </span>
                <span>
                    Volver al Listado
                </span>
            </a>
        </div>

        <form action="/api/nuevo" method="POST" class="w-1/2 h-2/3 p-10 flex flex-col justify-evenly border">

            <div class="flex justify-between">
                <div class="flex flex-col">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" class="border px-5 text-center border-gray-500 py-1">
                </div>
                <div class="flex flex-col">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingrese el apellido" class="border px-5 text-center border-gray-500 py-1">
                </div>
            </div>

            <div class="flex flex-col">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" placeholder="Ingrese E-mail" class="border px-5 border-gray-500 py-1 text-center">
            </div>

            <div class="flex flex-col">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese contraseña" class="border px-5 border-gray-500 py-1 text-center">
            </div>

            <div class="w-full flex justify-center">
                <button type="submit" class="bg-gray-400 px-5 py-1 rounded-lg">
                    Guardar
                </button>
            </div>

        </form>
    </main>
</body>
</html>