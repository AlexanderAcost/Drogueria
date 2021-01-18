@extends('master')
@section('contenido') 
    <h1>Lista de  proveedor</h1>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Información</th>
              </tr>
            </thead>
            
            <tbody>
              @foreach($proveedores as $p)
                <tr>
                    <th scope="row">{{$p->Idproveedor}}</th>
                    <td>{{$p->Nombreprove}}</td>
                    <td>
                        <p >
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#c{{$p->Idproveedor}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Más</a>     
                        </p>                        
                        <div class="col-md-offset-11 ">
                            <div class="collapse multi-collapse col-md-offset-7" id="c{{$p->Idproveedor}}">
                                <div class="card card-body " >
                                    <h6 style="color: black;">Dirección: {{$p->Direccionprove}}</h6>
                                    <h6 style="color: black;">Correo: {{$p->Correoprove}}</h6>
                                    <h6 style="color: black;">Telefono: {{$p->Telefonoprove}}</h6>
                                </pre>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@stop
