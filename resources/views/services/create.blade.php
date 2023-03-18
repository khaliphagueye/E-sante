@extends('template')

@section('titre')
    AJOUT D'UN SERVICE
@endsection
<br>
@section('content')
    <div class="row">
        <div class="mx-auto" style="padding: 20px;margin: 2%;">
            <form class="form_create" action="{{route('services.store')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label class="mb-2" for="nom_service">Nom du service</label>
                  <input value="{{old('nom_service')}}  " type="text" name="nom_service" class="form-control" id="nom_service" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-2" style="padding: 12px 24px">Ajouter</button>
                </div>
                
            </form>
        </div>
    </div>    
@endsection 