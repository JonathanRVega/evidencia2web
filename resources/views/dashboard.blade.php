<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, gracias por iniciar sesion</h1>

        <h2>Lista de Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>NumeroCliente</th>
                    <th>DatosFiscales</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->numeroCliente }}</td>
                        <td>{{ $usuario->datosFiscales }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('usuarios.edit', $usuario) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Agregar Nuevo Usuario</h2>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>
            <div>
                <label for="numeroCliente">Numero de Cliente</label>
                <input type="number" name="numeroCliente" required>
            </div>
            <div>
                <label for="datosFiscales">Datos Fiscales</label>
                <input type="text" name="datosFiscales" required>
            </div>
            <button type="submit">Agregar Usuario</button>
        </form>
    </div>
</body>
</html>