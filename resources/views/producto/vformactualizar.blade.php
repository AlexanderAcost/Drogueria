@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{route('actualizarProducto', $producto->Idproducto )}}" method="POST" >
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="categoria">Categorias</label>   
            </div>
            <select class="custom-select" id="categoria" name="categoria" required>
                <option value="{{$producto->Idcat}}" ></option>
                @foreach($categorias as $c)
                <option value="{{$c->Idcategoria}}" selected>{{$c->Nombrecat}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{$producto->Nombrepro}}" name="nompro" placeholder="Nombre Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{$producto->Descripcionpro}}"  name="descripcionpro" placeholder="Descripción Del Producto" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{$producto->Marcapro}}"  name="marcapro" placeholder="Marca Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="pres">Presentacion</label>
            </div>
            <select class="custom-select" name="prespro" id="pres" required>
                <option value="{{$producto->Presentacionpro}}" disabled></option>
                <option value="tableta">Tableta</option>
                <option value="jarabe">Jarabe</option>
                <option value="sobre">Sobre</option>
            </select>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="number" class="form-control" value="{{$producto->Cantidadpro}}"  name="cantidad" placeholder="Cantidad Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="number" class="form-control" value="{{$producto->Preciopro}}"  name="precio" placeholder="Precio Unitario Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control " value="{{$producto->fotopro}}"  name="foto" placeholder="Foto Del Producto" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>



        <br><br>
        <button type="submit" class="btn btn-success" onclick="return alerta()">Actualizar</button>
        <br><br>

    </form>
</div>
@stop
