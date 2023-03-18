@extends('template')

@section('titre')
    AJOUT D'UNE CHAMBRE
@endsection
<br>
@section('content')
    <div class="row">
        <div class="mx-auto" >
            <form action="{{route('chambres.store')}}" method="post" class="form_create" >
                @csrf
                <div class="mb-5">
                  <label for="nom_chambre">Nom de la Chambre</label>
                  <input value="{{old('nom_chambre')}}  " type="text" name="nom_chambre " class="form-control text-white" id="nom_chambre" aria-describedby="basic-addon1">
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary me-2 ">Ajouter</button>
                </div>
                
            </form>
        </div>
    </div>    
@endsection 