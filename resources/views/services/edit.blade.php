@extends('template')

@section('titre')
    Modification du Service {{$service->nom_service}}
@endsection
<br>
@section('content')
    <div class="row">
        <div class="mx-auto" style="width: 200px;">
            <form action="{{route('services.update', $service)}}" method="post" >
                @csrf
                @method('PUT')
                <div class="mb-5">
                  <label for="nom_service">Nom du service</label>
                  <input value="{{old('nom_service')}}  " type="text" name="nom_service" class="form-control" id="nom_service" aria-describedby="basic-addon1">
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary me-2 ">Modifier</button>
                </div>
                
            </form>
        </div>
    </div>    
@endsection 