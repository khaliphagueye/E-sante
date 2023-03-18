@extends('template')
@section('titre')
    Nouvelle voiture 
@endsection
@section('content')
    <div class="row">
        <div class="mx-auto" >
            <form action="{{route('voitures.store')}}" method="post" class="form_create" >
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="immatriculation">Immatriculation</label>
                      <input value="{{old('immatriculation')}}  " type="text" name="immatriculation" class="form-control" id="matriculation" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-3">
                      <label for="marque">Marque</label>
                      <input value="{{old('marque')}}  " type="text" name="marque" class="form-control" id="marque" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-3">
                        <label for="prenom">Personnel</label>
                        <select name="personnel_id" class="form-select">
                          <option value="">...</option>
                          @foreach ($personnels as $p) 
                              <option value="{{$p->id}}">{{$p->prenom}} {{$p->nom}}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="d-grid gap-2 mb-3">
                      <button type="submit" class="btn btn-primary  me-2 ">Ajouter</button></div>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>    
@endsection
