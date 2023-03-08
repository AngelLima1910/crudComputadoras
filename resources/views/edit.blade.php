@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Actualizar registro</h2>
                <form action="{{route('update', $items->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$items->nombre}}" required>
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" value="{{$items->marca}}" required>
                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" value="{{$items->modelo}}" required>
                    <label for="ram">RAM</label>
                    <input type="text" name="ram" id="ram" class="form-control" value="{{$items->ram}}" required>
                    <label for="procesador">Procesador</label>
                    <input type="text" name="procesador" id="procesador" class="form-control" value="{{$items->procesador}}" required>
                    <label for="discoDuro">Almacenamiento</label>
                    <input type="text" name="discoDuro" id="discoDuro" class="form-control" value="{{$items->discoDuro}}" required>
                    <label for="descripcion">Descripción o comentarios</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$items->descripcion}}" required>
                    <label for="imagen">URL de Imagen</label>
                    <input type="text" name="imagen" id="imagen" class="form-control" value="{{$items->imagen}}">
                    <button class="btn btn-outline-warning mt-3">
                        Actualizar
                    </button>
                    <a href="/" class="btn btn-outline-secondary mt-3">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection