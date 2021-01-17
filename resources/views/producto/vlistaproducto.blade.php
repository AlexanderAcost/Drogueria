@extends('master')
@section('contenido') 
    // contenido de la vista
    <h1>Lista de  producto</h1>
    


    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Presentacion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $p)
            <tr>
            <th scope="row">{{$p->Idproducto}}</th>
            <td> {{$p->Nombrepro}}</td>
            <td> {{$p->Marcapro}}</td>
            <td> {{$p->Presentacionpro}}</td>
            <td> {{$p->Cantidadpro}}</td>     
            <td> {{$p->Preciopro}}</td>
            <td> {{$p->Nombrecat}}</td>       
            </tr>
            @endforeach
        </tbody>
    </table>
    
@stop
