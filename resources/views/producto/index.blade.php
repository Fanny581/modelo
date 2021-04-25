@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Productos</h3>
    </div>
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Producto</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    
                    </div>
                    <div class="col-sm-6">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Codigo de Producto</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Precio de Ventas</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descuento</label>
                        <input type="" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
    </form>

                    <div class="form-group">
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">crear</button>
        <div>
    <input type="submit" value="Save">
  </div>
        </div>
         
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop

