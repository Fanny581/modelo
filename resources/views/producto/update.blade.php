@extends('adminlte::page')

@section('title', 'producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <form method="post" action="{{route('producto.update', $producto->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombredelproducto:</label>
                    <input type="text" class="form-control" name="Nombredelproducto" value="{{$producto->Nombredelproducto}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">codigodelproducto:</label>
                    <textarea type="text" class="form-control" rows="3" name="codigodelproducto" >{{$producto->codigodelproducto}}</textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">preciodeventa:</label>
                    <input type="text" class="form-control" name="preciodeventa" value="{{$producto->preciodeventa}}">
                </div>
                </div>
                <div class="col col-lg-4">
                    <label for="idCliente" class="visually-hidden">descuento:</label>
                    <input type="text" class="form-control" name="descuenta" value="{{$producto->descuento}}">
                </div>
                <div class="col col-lg-6">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop