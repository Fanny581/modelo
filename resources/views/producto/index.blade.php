@extends('adminlte::page')

@section('title', 'produco')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre del produco</th>
                <th>codigo del produc</th>
                <th>precio venta</th>
                <th>descuento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($producto as $producto)
                <tr>
                <td> {{$producto->id}}</td>
                    <td> {{$producto->Nombredelproducto}}</td>
                    <td> {{$producto->codigodelproducto}} </td>
                    <td> {{$producto->ventadeproduco}} </td>
                    <td> {{$producto->descuento}} </td>
                    <td>
                        <a href="{{route('producto.edit', $producto->id)}}" class="btn btn-success btn-sm">Editar</a>
                        <form action="{{route('producto.destroy', $producto->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop