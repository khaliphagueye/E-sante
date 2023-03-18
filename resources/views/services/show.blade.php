@extends('template')

    <div class="mt-4">
        @section('titre')
          Service {{$service->nom_service}}
        @endsection
      </div>
      @section('content')
          <div class="row">
              <div class="col-md-6 p-3 m-0 border-0 bd-example form_create">
      
                  <!-- Example Code -->
                  
                  <ul class="list-group ">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          Id du Service : {{$service->id}}
                          <span class="badge bg-primary rounded-pill">#</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          Nom du Service : {{$service->nom_service}}
                          <span class="badge bg-primary rounded-pill">#</span>
                      </li>
                  
                  </ul>
                  
                  <!-- End Example Code -->
              </div>
          </div>
      @endsection
