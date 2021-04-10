@extends('layouts.app')
@section('content')
<!-- Start Content --> 
<div class="container-fluid">
    <br>
 <div class="card">
    <div class="row border-secondary">
           <!-- Start Ficha--> 
            <div class="col left">
              <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingZero">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                            <b>FICHA DE CONTROL QUIRÚRGICO</b>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseZero" class="collapse show" aria-labelledby="headingZero" data-parent="#accordion">
                      <div class="card-body">
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
                                      <a class="dropdown-item" href="{{ route('nuevo')}}">Nuevo</a>
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
                  </div>
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       Datos Generales
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body"> 
                            <div class="form-group row">
                    
                                <div class="col-md-3">
                                 <label  for="fecha">Fecha</label>
                                 <input type="date" class="form-control" id="fecha" name="fecha">
                                 </div>
 
                               <div class="col-md-3">
                                 <label  for="horainicio">Hora Inicio</label>
                                 <input type="time" class="form-control"  id="horainicio" name="horainicio">
                                 </div>
 
                                  <div class="col-md-3" >
                                     <label  for="horafinal">Hora Fin.</label>
                                     <input type="time"  class="form-control" id="horafinal" name="horafinal"/> 
                                 </div>
                               </div>
                             
                             <div class="form-group row">
                               <div class="col-sm-9">
                                 <label  for="procedimiento">Procedimiento</label>
                                 <input type="text" class="form-control" id="procedimiento" name="procedimiento" placeholder="Procedimiento">
                               </div>
                             </div>
                             
                             <div class="form-group row">
                              
                                 <div class=" col-md-3">
                                     <label  for="cirujano">Cirujano</label>
                                     <input class="form-control" id="cirujano" name="cirujano" placeholder="Cirujano"> 
                                 </div>
 
                                 <div class=" col-md-3">
                                     <label  for="anestesiologo">Anestesiologo</label>
                                     <input class="form-control"  id="anestesiologo" name="anestesiologo" placeholder="Anestesiologo">
                                        
                                 </div>
                                 
                                 <div class=" col-md-3" >
                                     <label  for="ayudante">Ayudante</label>
                                     <input class="form-control" id="ayudante" name="ayudante" placeholder="Ayudante">
                                        
                                 </div>
 
 
                             </div>
                             
                             <div class="form-group row"> 
                                   <div class=" col-md-3">
                                     <label  for="instrumentista">Instrumentista</label>
                                       <input class="form-control"  id="instrumentista" name="instrumentista" placeholder="Instrumentista">
                                   </div> 
                                   <div class=" col-md-3" >
                                     <label  for="auxiliar">Auxiliar</label>
                                       <input class="form-control" id="auxiliar" name="auxiliar" placeholder="Auxiliar"> 
                                   </div>
   
                               </div> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Datos Paciente
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body"> 
                            <div class="form-group row"> 
                                <div class=" col-md-3">
                                    <label  for="nombre">Nombre</label>
                                    <input class="form-control"  id="nombre" name="nombre" placeholder="Nombre">
                                </div> 
                                <div class=" col-md-1" >
                                    <label  for="especie">Especie</label>
                                    <select class="form-control" id="especie" name="especie" placeholder="especie"> 
                                        <option>Canina</option>
                                        <option>Felina</option>
                                    </select> 
                                </div>
                                <div class=" col-md-2" > 
                                    <label for="otra"></label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="Otra">
                                </div>
                                <div class=" col-md-3" > 
                                    <label for="raza">Raza</label>
                                    <input type="text" class="form-control" id="raza" name="raza" placeholder="Raza">
                                </div>
                            </div>
                            <div class="form-group row"> 
                                <div class=" col-md-3">
                                    <label  for="edad">Edad</label>
                                    <input type="number" min="1" class="form-control"  id="edad" name="edad" placeholder="Edad">
                                </div> 
                                
                                <div class=" col-md-3" > 
                                    <label  for="sexo">Sexo</label>
                                    <select class="form-control" id="sexo" name="sexo" placeholder="Sexo"> 
                                        <option>Macho</option>
                                        <option>Hembra</option>
                                    </select> 
                                      </div>
                                <div class=" col-md-3" >
                                    <label  for="estado">Estado</label>
                                    <select class="form-control" id="estado" name="estado" placeholder="Estado"> 
                                        <option>Entero</option>
                                        <option>Ezterilizado</option>
                                    </select> 
                                </div>
                            </div>
                         
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Constantes Pre-Quirúrgicas
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                                <div class="form-group row"> 
                                    <div class="col-md-2">
                                        <label>Peso (kg)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Temp (ºC)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>FC (lpm)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>FR  (rpm)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <label>Pulso (lpm)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>Mucosas (color)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>TLLC (seg)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Deshidrat (%)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>ASA
                                        </label>
                                        <select class="form-select">
                                            <option>I</option>
                                            <option>II</option>
                                            <option>III</option>
                                            <option>IV</option>
                                            <option>V</option>
                                            <option>E</option>
                                        </select>
                                    </div>
                                </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Exámenes Pre-Quirúrgicos
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body">
                            <div class="form-group row"> 
                                <div class="col-md-9">
                                    <label>Hemograma</label>
                                    <textarea   class="form-control">
                                        </textarea>
                                </div>
                                </div> 
                                <div class="form-group row"> 
                                    <div class="col-md-3">
                                        <label>Bioquímica		
                                        </label>
                                        <textarea   class="form-control">
                                            </textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Ecografía		
                                        </label>
                                        <textarea   class="form-control">
                                            </textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Urológico		
                                        </label>
                                        <textarea   class="form-control">
                                            </textarea>
                                    </div>
                                </div>
                                <div class="form-group row"> 
                                    <div class="col-md-3">
                                        <label>Rayos X	
                                        </label>
                                        <textarea   class="form-control">
                                            </textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <label>ECG		
                                        </label>
                                        <textarea   class="form-control">
                                            </textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <label>RM/TAC	
                                        </label>
                                        <textarea   class="form-control">
                                            </textarea>
                                    </div>
                                </div>
                      </div>
                    </div>
                  </div> 
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Datos Generales Anestesia
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                        <div class="form-group row"> 
                            <div class="col-md-3">
                                <label>Anestesia
                                </label>
                                <select class="form-select">
                                    <option>Inhalatoria</option>
                                    <option>Circuito C</option>
                                    <option>Circuito A</option>
                                    <option>Circuito CA</option>
                                </select>
                            </div> 
                            <div class="col-md-3">
                                <label for="">TIVA</label>
                                <select class="form-select">  
                                    <option>Intramuscular </option> 
                                    <option>Local </option>
                                    <option>Regional</option> 
                                </select>
                            </div> 
                            <div class="form-group row"> 
                                <div class="col-md-3">
                                    <label for="">Fluidoterapia</label>
                                    <select class="form-select">  
                                        <option>Lactato </option> 
                                        <option>Cloruro </option>
                                        <option>Dextrosa</option> 
                                    </select>
                                </div> 
                                <div class=" col-md-2" > 
                                    <label for="otra"></label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="Otra">
                                </div>
                                <div class=" col-md-1" > 
                                    <label for="otra">ml/h</label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="ml/h">
                                </div>
                                <div class=" col-md-3" > 
                                    <label for="otra">Catéter Nº </label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="Nº">
                                </div>
                                </div> 

                                <div class="form-group row"> 
                                    <div class="col-md-3">
                                        <label for="">Intubación Endotraqueal</label>
                                        <select class="form-select">  
                                            <option>Si</option> 
                                            <option>No</option> 
                                        </select>
                                    </div> 
                                    <div class=" col-md-3" > 
                                        <label for="otra">Tubo Nº</label>
                                        <input type="text" class="form-control" id="otra" name="otra" placeholder="Tubo Nº">
                                    </div>
                                    <div class=" col-md-3" > 
                                        <label for="otra">Problemas</label>
                                        <input type="text" class="form-control" id="otra" name="otra" placeholder="Problemas">
                                    </div> 
                                    </div> 
                    
                </div>
              </div>
            </div> 
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Farmacología: Dosificación
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body"> 
                        <div class="form-group row"> 
                            <div class=" col-md-3" > 
                                <label for="otra">Fármacos Preanestésicos</label> 
                                <label for="otra"></label> 
                            </div> 
                            <div class=" col-md-3" > 
                                <label for="otra">  Fármaco </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="  Fármaco ">
                            </div> 
                            <div class=" col-md-1" > 
                                <label for="otra">  Dosis (mg) </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            <div class=" col-md-1" > 
                                <label for="otra">Dosis (mL)  </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            <div class=" col-md-1" > 
                                <label for="otra">Vía </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            </div> 
                            <div class="form-group row"> 
                                <div class=" col-md-3" > 
                                    <label for="otra">Estado Preinducción</label> 
                                    <label for="otra"></label> 
                                </div> 
                                <div class="col-md-3">
                                    <label for="">Sedación</label>
                                    <select class="form-control">  
                                        <option>Ninguna</option> 
                                        <option>Leve</option> 
                                        <option value="">Moderada</option>
                                        <option value="">Mucha</option>
                                    </select>
                                </div> 
                                <div class="col-md-3">
                                    <label for="">Resistencia</label>
                                    <select class="form-control">  
                                        <option>Ninguna</option> 
                                        <option>Leve</option> 
                                        <option value="">Moderada</option>
                                        <option value="">Mucha</option>
                                    </select>
                                </div> 
                            </div> 
                            <div class="form-group row"> 
                                <div class=" col-md-3" > 
                                    <label for="otra">Fármacos Inductores</label> 
                                    <label for="otra"></label> 
                                </div> 
                                <div class=" col-md-3" > 
                                    <label for="otra">  Fármaco </label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="  Fármaco ">
                                </div> 
                                <div class=" col-md-1" > 
                                    <label for="otra">  Dosis (mg) </label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                                </div>
                                <div class=" col-md-1" > 
                                    <label for="otra">Dosis (mL)  </label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                                </div>
                                <div class=" col-md-1" > 
                                    <label for="otra">Vía </label>
                                    <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                                </div>
                            </div> 
              </div>
            </div>
          </div> 
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Fármacos de Emergencia
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                    <div class="form-group row"> 
                        <div class=" col-md-3" > 
                            <label for="otra">  Fármaco </label>
                            <input type="text" class="form-control" id="otra" name="otra" placeholder="  Fármaco ">
                        </div> 
                        <div class=" col-md-2" > 
                            <label for="otra">  Dosis (mg) </label>
                            <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                        </div>
                        <div class=" col-md-2" > 
                            <label for="otra">Dosis (mL)  </label>
                            <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                        </div>
                        <div class=" col-md-1 " > 
                            <label for="otra">Vía </label>
                            <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                        </div>
                        </div> 
                        <div class="form-group row"> 
                            <div class=" col-md-3" > 
                                <label for="otra">  Fármaco </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="  Fármaco ">
                            </div> 
                            <div class=" col-md-2" > 
                                <label for="otra">  Dosis (mg) </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            <div class=" col-md-2" > 
                                <label for="otra">Dosis (mL)  </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            <div class=" col-md-1 " > 
                                <label for="otra">Vía </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                        </div> 
                        <div class="form-group row"> 
                            <div class=" col-md-3" > 
                                <label for="otra">  Fármaco </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="  Fármaco ">
                            </div> 
                            <div class=" col-md-2" > 
                                <label for="otra">  Dosis (mg) </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            <div class=" col-md-2" > 
                                <label for="otra">Dosis (mL)  </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                            <div class=" col-md-1 " > 
                                <label for="otra">Vía </label>
                                <input type="text" class="form-control" id="otra" name="otra" placeholder="">
                            </div>
                        </div> 
            </div>
          </div>
        </div> 
    
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Datos Generales Anestesia
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body"> 
                <div class="form-group row"> 
                    <div class=" col-md-3" > 
                        <label for="otra">  Posicionamiento </label>
                        <select type="text" class="form-control" id="otra" name="otra" >
                            <option value=""> DCDorsal</option>
                            <option value="">  DCVentral</option>
                            <option value="">DCLtDer</option>
                            <option value="">DCLtIzq</option>
                        </select>
                    </div> 
                    <div class=" col-md-2" > 
                        <label for="otra">  </label>
                        <input type="text" class="form-control" id="otra" name="otra" placeholder="Otro">
                    </div>
                   
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-3" > 
                            <label for="otra">  Monitorización </label>
                            <label for=""></label>
                        </div> 
                        <div class=" col-md-1" > 
                            <label for="otra">  SatO2</label>
                            <section type="text" class="form-control" id="otra" name="otra" placeholder="">
                                <option value="">Lengua</option>
                            </section>
                        </div>
                        <div class=" col-md-2" > 
                            <label for="otra">  </label>
                            <input type="text" class="form-control" id="otra" name="otra" placeholder="Otro">
                               
                        </div>
                        <div class=" col-md-2" > 
                            <label for="otra">Temp</label>
                            <select type="text" class="form-control" id="otra" name="otra" >
                                <option value="">Rectal</option>
                                <option value="">Esofágica</option>
                                <option value="">Presión Art.</option>
                                <option value="">ECG</option>
                            </select>
                        </div> 
                    </div> 
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Control Intra Quirúrgico
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
                <div class="form-group row text-center"> 
                    <div class="col-md-1"></div>
                <div style="width: 70px;">0</div>
                <div style="width: 70px;">5</div>
                <div style="width: 70px;">10</div>
                <div style="width: 70px;">15</div>
                <div style="width: 70px;">20</div>
                <div style="width: 70px;">25</div>
                <div style="width: 70px;">30</div>
                <div style="width: 70px;">35</div>
                <div style="width: 70px;">40</div>
                <div style="width: 70px;">45</div>
                <div style="width: 70px;">50</div>
                <div style="width: 70px;">55</div>
                <div style="width: 70px;">60</div>
                <div style="width: 70px;">65</div>
                <div style="width: 70px;">70</div>
                <div style="width: 70px;">75</div>
                <div style="width: 70px;">80</div>
                </div>
               
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> FC </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                       <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                           
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> FR </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                                  
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> Tº </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                     
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> PA:Sistólica </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                            
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> PA:Diastólica </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                          
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> PA:Media </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                                    
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> Sat O2 </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                                
                    </div> 
                    <div class="form-group row"> 
                        <div class=" col-md-1" > 
                            <label for=""> EtCO2 </label> 
                        </div> 
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>        
                   </div>
                                    <div class="form-group row"> 
                                        <div class=" col-md-1" > 
                                            <label for=""> CAM </label> 
                                        </div> 
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                        <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                                  </div>
                                  <div class="form-group row"> 
                                    <div class=" col-md-1" > 
                                        <label for=""> FÁRMACOS </label> 
                                    </div> 
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                    <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>   
                              </div>
                              <div class="form-group row"> 
                                <div class=" col-md-1" > 
                                    <label for=""> Intra Operat </label> 
                                </div> 
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>    
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>                             
                                <div style="width: 70px;">  <input class="form-control" type="text" name="" id="" >  </div>   
                          </div>
                          <div class="form-group row"> 
                            <div class=" col-md-3" >
                                <label for="">Complicaciones</label>
                                <select class="form-control"  name="" id="">
                                    <option value="">No</option>
                                    <option value="">Respiratorias</option>
                                    <option value="">Arritmias</option>
                                    <option value="">Vasculares</option>
                                    <option value="">Exítus</option>
                                    <option value="">Eutanasia</option>

                                </select>
                            </div>
                                <div class=" col-md-3" >
                                    <label for=""></label>
                            <input class="form-control" type="text" name="" id="" placeholder="Otras">
                                </div>
                          </div>
                            <div class="form-group row"> 
                                <div class=" col-md-3" >
                                    <label for="">Comentarios Anestesiólogo</label>
                                    <label for=""></label>
                            </div> 
                                    <div class=" col-md-5" >
                                        <textarea class="form-control" placeholder="Firma">
                                        </textarea>
                                    </div>
                          </div>
                          <div class="form-group row"> 
                            <div class=" col-md-3" >
                                <label for="">Comentarios Cirujano</label>
                                <label for=""></label>
                        </div> 
                                <div class=" col-md-5" >
                                    <textarea class="form-control"  placeholder="Firma">
                                    </textarea>
                                </div>
                      </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Control Intra Quirúrgico: Procedimientos de Emergencia
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body"> 
                <div class="form-group row"> 
                    <div class=" col-8" > 
                        <textarea name="" id=""  class="form-control"></textarea>
                    </div>                                          
                </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Fármacos Post-Quirúrgicos: Hospital
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
                <div class="form-group row"> 
                    <div class=" col-md-2" > 
                        <label for="">Fármaco </label> 
                    </div>  
                    <div class=" col-md-1" > 
                        <label for="">Dosis (mg) </label> 
                    </div>  
                    <div class=" col-md-1" > 
                        <label for="">Dosis (mL)</label> 
                    </div>  
                    <div class=" col-md-1" > 
                        <label for="">Vía </label> 
                    </div> 
                    <div class=" col-md-1" > 
                        <label for="">Hora</label> 
                    </div>  
                    <div class=" col-md-2" > 
                        <label for="">Responsable</label> 
                    </div>                                       
                </div> 
                <div class="form-group row"> 
                    <div class=" col-md-2"> 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                       <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div> 
                    <div class=" col-md-1" > 
                        <input class="form-control" type="time" name="" id="">
                    </div>  
                    <div class=" col-md-2" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>                                       
                </div> 
                <div class="form-group row"> 
                    <div class=" col-md-2"> 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                       <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div> 
                    <div class=" col-md-1" > 
                        <input class="form-control" type="time" name="" id="">
                    </div>  
                    <div class=" col-md-2" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>                                       
                </div> 
                <div class="form-group row"> 
                    <div class=" col-md-2"> 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                       <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div> 
                    <div class=" col-md-1" > 
                        <input class="form-control" type="time" name="" id="">
                    </div>  
                    <div class=" col-md-2" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>                                       
                </div> 
                <div class="form-group row"> 
                    <div class=" col-md-2"> 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                       <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div> 
                    <div class=" col-md-1" > 
                        <input class="form-control" type="time" name="" id="">
                    </div>  
                    <div class=" col-md-2" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>                                       
                </div> 
                <div class="form-group row"> 
                    <div class=" col-md-2"> 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                       <input class="form-control" type="text" name="" id="">
                    </div>  
                    <div class=" col-md-1" > 
                        <input class="form-control" type="text" name="" id="">
                    </div> 
                    <div class=" col-md-1" > 
                        <input class="form-control" type="time" name="" id="">
                    </div>  
                    <div class=" col-md-2" > 
                        <input class="form-control" type="text" name="" id="">
                    </div>                                       
                </div>  
        </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Control Post-Quirúrgico
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body"> 
                <div class="form-group row"> 
                  
                    <div class=" col-md-3" >
                        <label  for="especie">Estado Consciencia</label>
                        <select class="form-control" id="especie" name="especie"> 
                            <option value="">Óptimo</option>
                            <option value="">Bueno </option>
                            <option value="">Regular</option>
                            <option value="">Malo</option>
                        </select> 
                    </div>
                    <div class=" col-md-3" > 
                        <label for="otra">Tiempo de reacción</label>
                        <input type="text" class="form-control" id="otra" name="otra" placeholder="Tiempo de reacción">
                    </div>
                    <div class=" col-md-3" > 
                        <p class="text-white"> .</p>
                        <label for=""> min</label>
                    </div>
                </div>
                <div class="form-group row"> 
                    <div class=" col-md-2" > 
                        <label for="">Características</label> 
                        <p class="text-white"> .</p>
                    </div>     
                    <div class=" col-md-2" >
                        <label  for="especie">Defeca</label>
                        <select class="form-control" id="especie" name="especie"> 
                            <option value="">Si</option>
                            <option value="">No </option> 
                        </select> 
                        <textarea name="" id="" cols="26" ></textarea>
                    </div>  
                    <div class=" col-md-2" >
                        <label  for="especie">Orina</label>
                        <select class="form-control" id="especie" name="especie"> 
                            <option value="">Si</option>
                            <option value="">No </option> 
                        </select> 
                        <textarea name="" id="" cols="26" ></textarea>
                    </div>  
                    <div class=" col-md-2" >
                        <label  for="especie">Vómito</label>
                        <select class="form-control" id="especie" name="especie"> 
                            <option value="">Si</option>
                            <option value="">No </option> 
                        </select> 
                        <textarea name="" id="" cols="26" ></textarea>
                    </div>  
                    <div class=" col-md-2" >
                        <label  for="especie">Exudado</label>
                        <select class="form-control" id="especie" name="especie"> 
                            <option value="">Si</option>
                            <option value="">No </option> 
                        </select> 
                        <textarea name="" id="" cols="26" ></textarea>
                    </div>
                </div>
                <div class="form-group row"> 
                    <div class="col-md-2">
                        <label>Peso (kg)</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Temp (ºC)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>FC (lpm)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>FR  (rpm)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Pulso (lpm)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Mucosas (color)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>TLLC (seg)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>Deshidrat (%)
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label>O2
                        </label>
                        <select class="form-select">
                            <option>Si</option>
                            <option>No</option> 
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-group row"> 
                    <div class=" col-md-2" > 
                        <label for="">Hora </label> 
                        <input type="time" class="form-control">
                    </div> 
                    <div class=" col-md-2" > 
                        <label for="">Responsable </label> 
                        <input type="text" class="form-control">
                    </div>  
                    <div class=" col-md-2" > 
                        <label for="">Complicaciones </label> 
                        <select type="text" class="form-control">
                            <option value="">No</option>
                            <option value="">Respiratorias</option>
                            <option value="">Arritmias</option>
                            <option value="">Vasculares</option>
                            <option value="">Exítus</option>
                            <option value="">Eutanasia</option>
                        </select>
                    </div> 
                    <div class=" col-md-2" >
                        <label for=""></label>
                     <input type="text" name="" id="" placeholder="Otras" class="form-control">
                    </div>
                </div>
          </div>
        </div>
      </div> 
    </div>

            </div> 
        
    </div>
 </div>
 </div>
 

@endsection