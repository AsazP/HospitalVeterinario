@extends('layouts.app')

@section('content')
<div class="container"> 
    <!---->
    <div class="row">
        <hr>
    </div>
    <div  class="list-group">
        <a href="{{ route('turno') }}" class="list-group-item border-primary mb-1 flex-column align-items-start ">

            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><button type="button" class="btn btn-outline-primary">+</button> Nuevo Turno
                </h5>
            </div>

        </a>
      <div id="datos">
        
      </div>
    </div>
     <!---->
</div>
@endsection
