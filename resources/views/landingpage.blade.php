<!-- resources/views/landingpage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>No estas registrado</h1>
        <div>
            <label for="numeroFactura">Número de Factura:</label>
            <input type="text" id="numeroFactura" name="numeroFactura" placeholder="Ingrese el número de factura">
        </div>
        @if(isset($orden))
            @if($orden->estado === 'En proceso')
                <p>Estado de entrega: {{ $orden->estado }}</p>
                <p>Fecha: {{ $orden->fecha }}</p>
            @elseif($orden->estado === 'entrega')
                <p>Foto URL: {{ $orden->fotoUrl }}</p>
            @endif
        @endif
        <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
    </div>
</body>
</html>