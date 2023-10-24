@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-12">
                <h1 class="alert alert-info text-center">Editar cliente {{$cliente->nombre}}</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('clientes.update',$cliente) }}" method="post" class="row">
                    @csrf <!-- cross site request forgery -->
                    @method('PUT')
                    <div class="col-6">
                        <label for="cliente-name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter cliente nombre" value="{{old('nombre',$cliente->nombre)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-last-name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Enter apellido cliente" value="{{old('apellido',$cliente->apellido)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-gender" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="genero" name="genero" placeholder="Enter cliente genero" value="{{old('genero',$cliente->genero)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-birth-date" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Enter cliente fecha_nacimiento" value="{{old('fecha_nacimiento',$cliente->fecha_nacimiento)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-phone" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Enter cliente telefono" value="{{old('telefono',$cliente->telefono)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Enter cliente correo" value="{{old('correo',$cliente->correo)}}">
                    </div>


                    <div class="col-6">
                        <label for="cliente-address" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Enter cliente direccion" value="{{old('direccion',$cliente->direccion)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Enter cliente ciudad" value="{{old('ciudad',$cliente->ciudad)}}">
                    </div>
                    <div class="col-6">
                        <label for="cliente-pais" class="form-label">Pais</label>
                        <input type="text" class="form-control" id="pais" name="pais" placeholder="Enter cliente pais" value="{{old('pais',$cliente->pais)}}">
                    </div>

                    <!--Validaciones-->
                    @if($errors -> any())
                        <div class="alert alert-danger col-12 mt-4">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-12 my-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 mb-4">
                <div class="d-grid gap-2">
                    <a href="{{route('clientes.index')}}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
