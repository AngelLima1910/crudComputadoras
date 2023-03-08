@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Agregar nuevo registro</h2>
                <form action="/store" method="POST">
                    @csrf
                    @method('POST')
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" required>
                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" id="modelo" class="form-control" required>
                    <label for="ram">RAM</label>
                    <input type="text" name="ram" id="ram" class="form-control" required>
                    <label for="procesador">Procesador</label>
                    <input type="text" name="procesador" id="procesador" class="form-control" required>
                    <label for="discoDuro">Almacenamiento</label>
                    <input type="text" name="discoDuro" id="discoDuro" class="form-control" required>
                    <label for="descripcion">Descripción o comentarios</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                    <label for="imagen">URL de Imagen</label>
                    <input type="text" name="imagen" id="imagen" class="form-control">
                    <button class="btn btn-outline-primary mt-3">
                        Agregar
                    </button>
                    <a href="/" class="btn btn-outline-secondary mt-3">
                        Regresar
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection