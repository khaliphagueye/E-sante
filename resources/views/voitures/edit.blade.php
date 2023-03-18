@extends('template')
@section('titre')
    Modification de la voiture {{$voiture->immatriculation}}  
@endsection
@section('content')
    <div class="row">
        <div class="mx-auto" >
            <form action="{{route('voitures.update',$voiture)}}" method="post" class="form_create" >
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6">
                        <div class="mb-3">
                            <label for="immatriculation">Immatriculation</label>
                            <input value="{{old('immatriculation')}}  " type="text" name="immatriculation" class="form-control" id="matricule" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                        
                        <div class="mb-3">
                            <label for="marque">Marque</label>
                            <input value="{{old('marque')}}  " type="text" name="marque" class="form-control" id="prenom" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <label for="personnel_id">Personnel</label>
                            <input value="{{old('nom')}} {{old('nom')}} " type="text" name="nom" class="form-control" id="nom" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="d-grid gap-2 mb-3">
                      <button type="submit" class="btn btn-primary  me-2 ">Modifier</button></div>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>    
@endsection
