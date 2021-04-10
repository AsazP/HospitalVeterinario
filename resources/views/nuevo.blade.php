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
                    <div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12 
                    text-center" >
                        <label>Formulario </label>
                        <input type="text" class="form-control" disabled value="12">
                        <br>
                    </div>
                    <div class="row g-6 " >
                       
                    <!--Collapse-->
                    <div id="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                CARACTERISTICAS
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body"> 
                                                <div class="row g-6">
                                                    
                                                     <div class="col-auto">
                                                    <label>Estado conciencia</label>
                                                   
                                                        </div>
                                                         <div class="col-auto">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Óptimo</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Bueno</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Regular</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Malo</label>
                                                    </div>
                                                </div>
                                                        <br>
                                                     
                                                        <div class="row" >
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <label>DEFECA
                                                                </label>
                                                                <select class="form-select">
                                                                    <option>Si</option>
                                                                    <option>No</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <label>ORINA
                                                                </label>
                                                                <select class="form-select">
                                                                    <option>Si</option>
                                                                    <option>No</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <label>VÓMITO
                                                                </label>
                                                                <select class="form-select">
                                                                    <option>Si</option>
                                                                    <option>No</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div  class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <label>EXUADO
                                                                </label>
                                                                <select class="form-select">
                                                                    <option>Si</option>
                                                                    <option>No</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                            <div class="row g-6">
                                                                <div class="col-auto">
                                                                    <label>Peso (kg)</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>Temp (ºC)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>FC (lpm)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>FR  (rpm)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>Pulso (lpm)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>Mucosas (color)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>TLLC (seg)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>Deshidrat (%)
                                                                    </label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-auto">
                                                                    <label>O2
                                                                    </label>
                                                                    <select class="form-select">
                                                                        <option>Si</option>
                                                                        <option>No</option>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-lg6 col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Hora</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <label>Responsable</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                            
                                                            </div>
                                                        
                                                                
                                
                                </div>
                            </div>
                          </div>
                        
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ALTA MÉDICA
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <form>
                                    <div class="row g-6">
                                         <div class="col-auto"> 
                                    <div class="row g-6">
                                    <div class="col-auto">
                                        <label>Estado conciencia</label>
                                       
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Óptimo</label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Bueno</label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Regular</label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Malo</label>
                                    </div>
                                    <div class="col-auto">
                                        <label>Tiempo reaccion </label> <input type="text" ><label>min</label>
                                    </div>
                
                                     </div>
                                    <div class="row">
                                    <div class="col-lg6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Camina
                                        </label>
                                        <select class="form-select">
                                            <option>Si</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Signos de dolor
                                        </label>
                                        <select class="form-select">
                                            <option>Si</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                
                                    </div>
                                    <div class="row g-6">
                                    <div class="col-auto">
                                        <label>Peso (kg)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>Temp (ºC)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>FC (lpm)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>FR  (rpm)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>Pulso (lpm)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>Mucosas (color)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>TLLC (seg)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <label>Deshidrat (%)
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                 </div> 
                                    <div class="row">
                                    <div class="col-lg6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Hora</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Responsable</label>
                                        <input type="text" class="form-control">
                                    </div>
                
                                    </div>
                                    
                                  
                               
                                        </div>
                           
                                
                                </form>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                TRATAMIENTO ESTABLECIDO: DOMICILIO
                            </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <form>
                                               
                                    <div>
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Fármaco</th>
                                            <th scope="col">Dosis (mg)</th>
                                            <th scope="col">Dosis</th>
                                            <th scope="col">Vía</th>
                                            <th scope="col">Frecuencia</th>
                                            <th scope="col">Presentación</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                
                                        </tbody>
                                      </table>
                                      
                                    </div>
                                    
                           
                                
                                </form>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  RECOMENDACIONES PROPIETARIO
                              </button>
                              </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="card-body">
                                <form>
                                    <div class="">
                                
                                         <textarea   class="form-control">
                                        </textarea>
                                     </div> 
                           
                                
                                </form> 
                              </div>
                            </div>
                          </div>
                      </div>
                  
                    <!--End Collapse-->
                  
                    
                </form> 
    </div>

@endsection