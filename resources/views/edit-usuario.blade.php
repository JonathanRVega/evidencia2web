<!-- resources/views/edit-usuario.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Usuario</h1>

        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>
            </div>
            <div>
                <label for="text">Numero de Cliente</label>
                <input type="number" name="numeroCliente" value="{{ $usuario->numeroCliente }}" required>
            </div>
            <div>
                <label for="text">Datos Fiscales</label>
                <input type="text" name="datosFiscales" value="{{ $usuario->datosFiscales }}" required>
            </div>
            <button type="submit">Update Usuario</button>
        </form>

        <a href="{{ route('dashboard') }}">Back to Dashboard</a>
    </div>
</body>
</html>