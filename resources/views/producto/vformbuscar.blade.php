@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Formulario de buscar producto</h1>
    <form action="{{url('producto/buscar')}}" method= "POST">
    <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" name="nompro" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
    </div> 
    </form>
@stop
