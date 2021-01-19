@extends('master')
@section('contenido') 
    <h1 class="text-center">Proveedor Encontrado</h1>
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
            
                <tr>
                    <th scope="row">{{$proveedor->Idproveedor}}</th>
                    <td>{{$proveedor->Nombreprove}}</td>
                    <td>
                        <p >
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#c{{$proveedor->Idproveedor}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Más</a>     
                        </p>                        
                        <div class="col-md-offset-11 ">
                            <div class="collapse multi-collapse col-md-offset-7" id="c{{$proveedor->Idproveedor}}">
                                <div class="card card-body " >
                                    <h6 style="color: black;">Dirección: {{$proveedor->Direccionprove}}</h6>
                                    <h6 style="color: black;">Correo: {{$proveedor->Correoprove}}</h6>
                                    <h6 style="color: black;">Telefono: {{$proveedor->Telefonoprove}}</h6>
                                    
                                </pre>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
              
            </tbody>
        </table>
    </div>
@stop