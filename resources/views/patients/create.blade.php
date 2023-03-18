@extends('template')
@section('titre')
    Nouveau patient 
@endsection
@section('content')
    <div class="row">
        <div class="mx-auto" >
            <form action="{{route('patients.store')}}" method="post" class="form_create" >
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="civilite_patient">Civilité</label>
                      <select name="civilite_patient" class="form-select text-dark">
                            <option value="1">...</option>
                            <option value="2">Mr</option>
                            <option value="3">Mme</option>
                            <option value="4">Mlle</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="cni_patient">Numéro CNI</label>
                      <input value="{{old('cni_patient')}}  " type="text" name="cni_patient" class="form-control text-dark" id="cni_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-3">
                      <label for="prenom_patient">Prénom</label>
                      <input value="{{old('prenom_patient')}}  " type="text" name="prenom_patient" class="form-control text-dark" id="prenom_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-3">
                      <label for="nom_patient">Nom</label>
                      <input value="{{old('nom_patient')}}  " type="text" name="nom_patient" class="form-control text-dark" id="nom_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-3">
                      <label for="telephone_patient">Téléphone</label>
                      <input value="{{old('telephone_patient')}}  " type="tel" name="telephone_patient" class="form-control text-dark" id="telephone_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="mail_patient">E-MAIL</label>
                        <input value="{{old('mail_patient')}}  " type="text" name="mail_patient" class="form-control text-dark" id="mail_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                      </div>
                      <div class="mb-3">
                        <label for="groupe_sanguin_patient">GROUPE SANGUIN</label>
                        <select name="groupe_sanguin_patient" class="form-select text-dark">
                              <option value="1">...</option>
                              <option value="2">AB+</option>
                              <option value="3">AB-</option>
                              <option value="4">A+</option>
                              <option value="2">A-</option>
                              <option value="3">B+</option>
                              <option value="4">B-</option>
                              <option value="3">O+</option>
                              <option value="4">O-</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="adresse_patient">ADRESSE</label>
                        <input value="{{old('adresse_patient')}}  " type="text" name="adresse_patient" class="form-control text-dark" id="adresse_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                      </div>
                      <div class="mb-3">
                        <label for="ville_patient">VILLE</label>
                        <input value="{{old('ville_patient')}}  " type="text" name="ville_patient" class="form-control text-dark" id="ville_patient" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                      </div>
                      <div class="mb-3">
                        <label for="nom_chambre">CHAMBRE</label>
                        <select name="chambre_id" class="form-select text-dark">
                          <option value="">...</option>
                          @foreach ($chambres as $c) 
                              <option value="{{$c->id}}">{{$c->nom_chambre}}</option>
                          @endforeach
                      </select> 
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                    <label for="numero_lit">LIT</label>
                        <select name="lit_id" class="form-select text-dark">
                          <option value="">...</option>
                          @foreach ($lits as $l) 
                              <option value="{{$l->id}}">{{$l->numero_lit}}</option>
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
