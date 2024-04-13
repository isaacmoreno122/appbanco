@extends('layouts.principal')

@section('hijos')

<h1>Modulo de Afiliado </h1>

<a href="/afiliado/create" class="btn btn-primary">Crear Nuevo afiliado</a>

<table class="table">
    <thead>
        <tr>

            <th>ID</th>
            <th>CodAfiliado</th>
            <th>nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th></th>

        </tr>
        
    </thead>

    <tbody>
        @foreach($afiliados as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->codafiliado}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th>{{$afiliado->ciudad}}</th>
            <th>{{$afiliado->telefono}}</th>
            <th>{{$afiliado->edad}}</th>
            <th>
                <a href="afiliado/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-warning">Eliminar</button>
            </th>

        </tr>
        @endforeach


    </tbody>
 
</table>

@endsection