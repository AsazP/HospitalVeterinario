@extends('layouts.app')
@section('content')
<div class="container card mt-5 ">
    <div class="container mt-3 mb-3">
            <div class="card-header text-center primary bg-primary">FICHA DE CONTROL POST-QUIRÚRGICO (10 minutos después)</div>
                <form>

                    <div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 
                    text-center" >
                        <label>Id mascota</label>
                        <input type="text" class="form-control" disabled value="12356">
                    </div>
                    <div  class="text-center" >
                        <label class="text-center">Información Mascota</label>
                        <br>
                        <textarea   rows="7" cols="100" disabled >
                            Nombre del paciente: Tomy
                            Especie: Canina
                            Raza: Chihuahua
                            Edad:5 meses
                            Sexo: Macho
                            Caractericticas de color:negro
                        </textarea>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            POST-QUIRURJICO
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="{{route('nuevo')}}">Nuevo</a>
                              <a class="dropdown-item" href="#">Actuliza</a>
                            
                            </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              REPORTES
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Reporte 1</a>
                                <a class="dropdown-item" href="#">Reporte 2</a>
                              
                              </div>
                              </li>
                          </ul>
                        </div>
                      </nav>
                  
                 
                    
                </form>
            
    </div>
</div> 

@endsection