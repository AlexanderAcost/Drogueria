@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Resultado  de buscar producto</h1>
    <div class="container text-center">
    <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Presentacion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody class="table-info">
               
                <tr>
                <th scope="row">{{$producto->Idproducto}}</th>
                <td> {{$producto->Nombrepro}}</td>
                <td> {{$producto->Marcapro}}</td>
                <td> {{$producto->Presentacionpro}}</td>
                <td> {{$producto->Cantidadpro}}</td>     
                <td> {{$producto->Preciopro}}</td>
                <td> {{$producto->Nombrecat}}</td>       
                </tr>
                
            </tbody>
        </table>
    </div>
@stop