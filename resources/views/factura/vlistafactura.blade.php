@extends('master')
@section('contenido') 
    <br>
    <h1>Lista de FActura</h1>

<div class="container">

@foreach($facturas as $f)

<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m{{$f->Idfactura}}">
    ID : {{$f->Idfactura}}  Proveedor: {{$f->Nombreprove}}
    </button>
    <br> <br>

    <!-- Modal -->
    <div class="modal fade" id="m{{$f->Idfactura}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Factura N° {{$f->Idfactura}} </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h1>Fecha: {{$f->Fechafac}}</h1>
            <h2>Proveedor: {{$f->Nombreprove}}</h2>
            @foreach($items as $i)
            <h3>id fac desde item: {{$i->Idfac}}</h3>
            <h3>item N°: {{$i->Numeroitem}}</h3>
            <h3>Producto: {{$i->Nombrepro}}</h3>
            <h3>Cantidad item: {{$i->Cantidaditem}}</h3>
            <h3>Precio unitario: {{$i->Precioitem}}</h3>
            <h3>Subtotal: {{$i->Totalitem}}</h3>
            @endforeach
            <h3>Total : {{$f->Totalfac}}</h3>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Editar</button>
        </div>
        </div>
    </div>
    </div>
@endforeach
</div>

@stop
