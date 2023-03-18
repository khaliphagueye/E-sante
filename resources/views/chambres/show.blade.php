@extends('template')
<div class="mt-4">
  @section('titre')
    Chambre {{$chambre->nom_chambre}}
  @endsection
</div>
@section('content')
    <div class="row">
        <div class="col-md-6 p-3 m-0 border-0 bd-example form_create">

            <!-- Example Code -->
            
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Id de la chambre : {{$chambre->id}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nom de la chambre : {{$chambre->nom_chambre}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
            
            </ul>
            
            <!-- End Example Code -->
        </div>
    </div>
@endsection