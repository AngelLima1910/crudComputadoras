@extends('layouts/main')
@section('contenido')
    <div class="container">
        <h2 class="text-center">CRUD</h2>
        <div class="row">
            <div class="col">
                <a href="/create" class="btn btn-outline-primary">Agregar nuevo registro</a>
                <hr>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>RAM</th>
                            <th>Procesador</th>
                            <th>Almacenamiento</th>
                            <th>Descripción o comentario</th>
                            <th>URL de imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->marca}}</td>
                                <td>{{$item->modelo}}</td>
                                <td>{{$item->ram}}</td>
                                <td>{{$item->procesador}}</td>
                                <td>{{$item->discoDuro}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td><img src="{{$item->imagen}}" width="90px" height="80px"></td>
                                <td>
                                    <a href="{{route('edit', $item->id)}}" class="btn btn-outline-warning">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('show', $item->id)}}" class="btn btn-outline-danger">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection