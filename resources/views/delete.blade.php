@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    El registro a eliminar es
                    <ul>
                        <li>El nombre es: {{$items->nombre}}</li>
                        <li>La marca es: {{$items->marca}}</li>
                        <li>El modelo es: {{$items->modelo}}</li>
                        <li>La RAM es: {{$items->ram}}</li>
                        <li>El procesador es: {{$items->procesador}}</li>
                        <li>El disco duro es: {{$items->discoDuro}}</li>
                        <li>La descripcion es: {{$items->descripcion}}</li>
                        <li>La URL es: {{$items->imagen}}</li>
                    </ul>
                    <form action="{{route('destroy', $items->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/" class="btn btn-outline-secondary mt-3">Regresar</a>
                        <button class="btn btn-outline-danger mt-3">Eliminar</button>
                    </form>
                </h2>
            </div>
        </div>
    </div>
@endsection