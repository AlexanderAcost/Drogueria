@extends('master')
@section('contenido') 
    <br>
    <div class="container">
        <h1 class="text-center">Formulario de buscar producto</h1>
        <form action="{{url('producto/buscar')}}" method= "POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="consultaPro" name="consultaPro" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
            </div> 
            
            <input type="submit" class="btn btn-success" value="Consultar">
        
        </form>
    </div>
    




@stop
