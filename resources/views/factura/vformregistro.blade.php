
@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Formulario de registro Factura</h1>

    <div class="container">
        <form action="{{url('factura/registro')}}" method="POST" >
            @csrf
            <br>

            <!-- Etiquetas de tipo Select -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text " for="proveedor">Proveedor</label>   
                </div>
                <select class="custom-select col-6" id="proveedor" name="proveedor" required>
                    <option value="" >Selecione un proveedor</option>
                    @foreach($proveedores as $p)
                    <option value="{{$p->Idproveedor}}">{{$p->Nombreprove}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                    <span class="input-group-text " id="basic-addon1">Fecha</span>
                </div>
                <input type="date" class="form-control col-7" name="fecha"  aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <br>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">#</span>
                </div>
                <input type="number" class="form-control col-8" name="total" placeholder="Celular Proveedor" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <br>
            
        

            <br><br>
            <button type="submit" class="btn btn-success" onclick="return alerta()">Registrar</button>
            <br><br>

        </form>
    </div>

@stop
