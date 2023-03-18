@extends('template')

@section('titre')
    Modification de la Chambre {{$chambre->nom_chambre}}
@endsection
<br>
@section('content')
    <div class="row">
        <div class="mx-auto" style="width: 200px;">
            <form action="{{route('chambres.update', $chambre)}}" method="post" >
                @csrf
                @method('PUT')
                <div class="mb-5">
                  <label for="nom_chambre">Nom de la chambre</label>
                  <input value="{{old('nom_chambre')}}  " type="text" name="nom_chambre" class="form-control" id="nom_service" aria-describedby="basic-addon1">
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary me-2 ">Modifier</button>
                </div>
                
            </form>
        </div>
    </div>    
@endsection 