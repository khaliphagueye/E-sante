@extends('template')
<div class="mt-4">
  @section('titre')
    Voiture d'immatriculation  {{$voiture->immatriculation}}
  @endsection
</div>
@section('content')
    <div class="row">
        <div class="col-md-6 p-3 m-0 border-0 bd-example form_create">

            <!-- Example Code -->
            
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Id : {{$voiture->id}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Immatriculation : {{$voiture->immatriculation}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Marque  : {{$voiture->marque}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Personnel : {{$voiture->Personnel->nom}} {{$voiture->Personnel->prenom}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
            
            </ul>
            
            <!-- End Example Code -->
        </div>
    </div>
@endsection