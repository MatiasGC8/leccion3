<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Usuario</title>
</head>
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
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('usuarios.index') }}">Home</a>
        <a class="navbar-brand" href="{{ route('usuarios.create') }}">Crear Usuarios</a>
        <a class="navbar-brand" href="{{ route('usuarios.create') }}">Editar Usuarios</a>
    </nav>
<div class="container">
    <h1 class="mt-5">Editar Usuario</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update', $usuario->id_usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre_usuario">Nombre Usuario</label>
            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="{{ $usuario->nombre_usuario }}" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena">
            <small class="form-text text-muted">Deje en blanco si no desea cambiar la contraseña</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
