@extends('template')

@section('titre')
    AJOUT D'UN LIT
@endsection
<br>
@section('content')
    <div class="row">
        <div class="mx-auto" >
            <form action="{{route('lits.store')}}" method="post" class="form_create" >
                @csrf
                <div class="mb-3">
                  <label for="numero_lit">Nom du lit</label>
                  <input value="{{old('numero_lit')}}  " type="text" name="numero_lit" class="form-control" id="numero_lit" style="background-color: white; border-radius: 6px" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="nom_chambre">Nom de la Chambre</label>
                    <select name="chambre_id" class="form-select">
                        <option value="">...</option>
                        @foreach ($chambres as $c)
                            <option value="{{$c->id}}">{{$c->nom_chambre}}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-2 ">Ajouter</button>
                </div>
                
            </form>
        </div>
    </div>    
@endsection 