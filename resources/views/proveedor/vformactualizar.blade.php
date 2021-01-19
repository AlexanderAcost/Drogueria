@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Formulario de Actualizar Proveedor</h1>

    <div class="container">
        <form action="{{route('actualizarProveedor', $proveedor->Idproveedor )}}" method="POST" >
            @csrf
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" name="nomprove" value="{{$proveedor->Nombreprove}}" placeholder="Nombre Del Proveedor" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>  
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" name="direccionprove" value="{{$proveedor->Direccionprove}}" placeholder="Direccion del Proveedor" aria-label="Username" aria-describedby="basic-addon1" required> 
            </div>
            <br>  
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="email" class="form-control" name="correoprove" value="{{$proveedor->Correoprove}}" placeholder="Coreo Del Proveedor" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>  
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">#</span>
                </div>
                <input type="number" class="form-control" name="telefonoprove" value="{{$proveedor->Telefonoprove}}" placeholder="Celular Proveedor" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <br>
        

            <br><br>
            <button type="submit" class="btn btn-success" onclick="return alerta()">Registrar</button>
            <br><br>

        </form>
    </div>
@stop
