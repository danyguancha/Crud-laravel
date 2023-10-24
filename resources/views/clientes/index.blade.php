@extends('layouts.base')
@section('content')
<div class="container">
    <div class="col-12">
        <h1 class="alert alert-info text-center">Clientes</h1>
    </div>
    <div class="col-12">
        <form method="GET" action="{{ route('clientes.index') }}" class="form-inline mb-2">
            <label for="filtro" class="mr-2">Filtrar por:</label>
            <select name="filtro" id="filtro" class="form-control">
                <option value="nombre">Nombre</option>
                <option value="apellido">Apellido</option>
                <option value="genero">Género</option>
                <option value="fecha_nacimiento">Fecha de nacimiento</option>
                <option value="telefono">Teléfono</option>
                <option value="correo">Correo</option>
                <option value="direccion">Dirección</option>
                <option value="ciudad">Ciudad</option>
                <option value="pais">País</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
            <input type="text" name="busqueda" class="form-control" placeholder="Buscar...">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
    </div>

    <div class="col-12">
        <a href="/clientes/create" class="btn btn-success">Agregar cliente</a>
        <br><br>

    </div>
    <div class="row">
    @foreach($clientes as $cliente)
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card" style="width: 25rem; margin-bottom: 20px; border-radius: 20px;">
            <img src="icono.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <div>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Nombre:</p>
                    <span>{{$cliente->nombre}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Apellido:</p>
                    <span>{{$cliente->apellido}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Género:</p>
                    <span>{{$cliente->genero}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Fecha de Nacimiento:</p>
                    <span>{{$cliente->fecha_nacimiento}}</span>
                    <p class "card-label" style="font-size: 1.2rem; font-weight: bold;">Teléfono:</p>
                    <span>{{$cliente->telefono}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Correo:</p>
                    <span>{{$cliente->correo}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Dirección:</p>
                    <span>{{$cliente->direccion}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">Ciudad:</p>
                    <span>{{$cliente->ciudad}}</span>
                    <p class="card-label" style="font-size: 1.2rem; font-weight: bold;">País:</p>
                    <span>{{$cliente->pais}}</span>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <a class="btn btn-primary" href="{{route('clientes.edit', $cliente)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{route('clientes.destroy', $cliente)}}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



</div>

@endsection
