<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mostrar Usuarios</title>
</head>
<body>

    <main class="h-screen w-screen flex flex-col items-center">
        <div class="w-full flex justify-between p-10">
            <h1 class="font-medium">
                Gestión de Usuarios
            </h1>

            <a href="/agregar" class="flex items-center justify-between bg-gray-400 px-5 h-10 rounded-lg hover:cursor-pointer">
                <span class="material-symbols-outlined">
                    person_add
                </span>
                <span>
                    Agregar
                </span>
            </a>
        </div>

        <table class="table-fixed w-4/5">
            <thead>
              <tr class="border-b-2">
                <th>Usuario</th>
                <th>E-mail</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre . " " . $usuario->apellido }}</td>
                        <td>{{ $usuario->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="w-full px-10 py-5">
            <span class="font-medium">
                
                {{ count($usuarios) }} Usuarios
            </span>
        </div>

    </main>

</body>
</html>