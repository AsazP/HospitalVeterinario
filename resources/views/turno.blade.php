@extends('layouts.app')
@section('content')
<div class="container card mt-5">
    <div  class="container mt-3 mb-3" >
  <div class="card-header text-center primary">HOSPITAL VETERINARIO</div>
  <form>
    
        <legend>Separación de citas</legend>
        <div class="mb-3">
          <label for="Select" class="form-label">Tipo de servicio</label>
          <select id="disabledSelect" class="form-select">
            <option>Consulta externa</option>
            <option>Medicina Preventiva</option>
            <option>Cirujias de esterilización</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="Select" class="form-label">Horario de asistencia</label>
          <select id="disabledSelect" class="form-select">
            <option>07:30 am - 08:30 am</option>
            <option>08:30 am - 09:30 am</option>
            <option>09:30 am - 10:30 am</option>
            <option>10:30 am - 11:30 am</option>
            <option>11:30 am - 12:30 am</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="disabledTextInput" class="form-label">Comentario</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Comentario...">
        </div>
     
        <div class="mb-3">
          <div class="form-check">
            
            <label class="form-check-label" for="disabledFieldsetCheck">
              Costo total de la cita: $10
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Aceptar</button>
     
    </form>
  </div>
</div>
@endsection