@extends('template')
@section('titre')
    Modification de l'employer {{$personnel->prenom}} {{$personnel->nom}} 
@endsection
@section('content')
    <div class="row">
        <div class="mx-auto" >
            <form action="{{route('personnels.update',$personnel)}}" method="post" class="form_create" >
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6">
                        <div class="mb-3">
                            <label for="matricule">Matricule</label>
                            <input value="{{old('matricule')}}  " type="text" name="matricule" class="form-control" id="matricule" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                        <label for="civilite">Civilité</label>
                        <select name="civilite" class="form-select">
                                <option value="1">...</option>
                                <option value="2">Mr</option>
                                <option value="3">Mme</option>
                                <option value="4">Mlle</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="prenom">Prénom</label>
                            <input value="{{old('prenom')}}  " type="text" name="prenom" class="form-control" id="prenom" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3">
                            <label for="nom_patient">Nom</label>
                            <input value="{{old('nom')}}  " type="text" name="nom" class="form-control" id="nom" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telephone">Téléphone</label>
                            <input value="{{old('telephone')}}  " type="tel" name="telephone" class="form-control" id="telephone" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                          
                        </div>
                        <div class="mb-3">
                            <label for="mail_patient">E-MAIL</label>
                            <input value="{{old('mail')}}  " type="text" name="mail" class="form-control" id="mail" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                      </div>
                      <div class="mb-3">
                            <label for="statut">STATUT</label>
                            <input value="{{old('statut')}}  " type="text" name="statut" class="form-control" id="statut" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                      </div>
                      <div class="mb-3">
                        <label for="nom_service">SERVICE</label>
                        <select name="service_id" class="form-select">
                          <option value="">...</option>
                          @foreach ($services as $s) 
                              <option value="{{$s->id}}">{{$s->nom_service}}</option>
                          @endforeach
                      </select> 
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="d-grid gap-2 mb-3">
                      <button type="submit" class="btn btn-primary  me-2 ">Ajouter</button></div>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>    
@endsection
