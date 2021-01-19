<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/dashboard')}}">Drogueria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('producto/formregistro')}}">Registrar</a>
          <a class="dropdown-item" href="{{url('producto/lista')}}">Listar</a>
          <a class="dropdown-item" href="{{url('producto/buscar')}}">Buscar</a>
          <a class="dropdown-item" href="{{url('producto/formcategoria')}}">Registrar Categoria</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proveedores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('proveedor/formregistro')}}">Registrar</a>
          <a class="dropdown-item" href="{{url('proveedor/lista')}}">Listar</a>
          <a class="dropdown-item" href="{{url('proveedor/buscar')}}">Buscar</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facturas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('factura/formregistro')}}">Registrar</a>
          <a class="dropdown-item" href="{{url('factura/lista')}}">Listar</a>
          <a class="dropdown-item" href="{{url('factura/buscar')}}">Buscar</a>
          <div class="dropdown-divider"></div>
        
        </div>
      </li>


      <div style="margin-left: 1100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                
                  <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                      {{ __('Cerrar Sesión') }}
                  </a>
                
            </form>
            
          </div>
        </li>
      </div>
      

      
    </ul>
    

    
    
    
      
    </form>
  </div>
</nav>