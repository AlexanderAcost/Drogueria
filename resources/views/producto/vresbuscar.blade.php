@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Resultado  de buscar producto</h1>
    <div class="container text-center">
    
                <th scope="row">{{$producto->Idproducto}}</th>
                <td> {{$producto->Nombrepro}}</td>
                <td> {{$producto->Marcapro}}</td>
                <td> {{$producto->Presentacionpro}}</td>
                <td> {{$producto->Cantidadpro}}</td>     
                <td> {{$producto->Preciopro}}</td>
                <td> {{$producto->Nombrecat}}</td>  
    </div>
@stop