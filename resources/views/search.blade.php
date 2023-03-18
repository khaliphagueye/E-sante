@extends('template')
@section('content')
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Résultat de recherche pour:
                <small>{{$key}}</small>

            </h1>
            {{-- <ul class="list-group ">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nom : {{$patients->nom_patient}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Prenom : {{$patients->prenom_patient}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    CNI : {{$patients->cni_patient}}
                    <span class="badge bg-primary rounded-pill">#</span>
                </li>
            
            </ul> --}}

            {{-- @include('_partials.posts-list') --}}

        </div>
        {{-- @include('_partials.sidebar') --}}
    </div>
@endsection