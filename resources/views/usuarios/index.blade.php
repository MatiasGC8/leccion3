<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Usuarios</title>
    <style>
    body {
        background-color: #f4f4f4;
      
    }

    .navbar,
    .btn-primary {
        background-color: #583be7;
        color: #ffffff;
    }

    .table thead {
        background-color: #6b94d4;
        color: #000000;
    }

    .btn-primary:hover,
    .btn-danger:hover,
    .btn-warning:hover {
        background-color: #3b49e7;
        color: #000000;
    }
    th{
        font-size: 25px;
    }
    td{
        font-size: 15px;
    }
    
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('usuarios.index') }}">Home</a>
        <a class="navbar-brand" href="{{ route('usuarios.create') }}">Crear Usuarios</a>
        <a class="navbar-brand" href="{{ route('usuarios.create') }}">Editar Usuarios</a>
    </nav>
<div class="container">
    <h1 class="mt-5">Lista de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-dark table-striped-columns">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Usuario</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id_usuario }}</td>
                <td>{{ $usuario->nombre_usuario }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
