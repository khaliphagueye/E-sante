@extends('template')
<div >
  @section('button')
  <a href="{{route('voitures.create') }}" ><button type="button" class="btn btn-primary">Ajouter une voiture</button>
  </a>
  @endsection
</div>
<div class="mt-4">
  @section('titre')
    Liste des Voitures 
  @endsection
</div>
@section('content')
    <div class="container mt-4" >
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Matriculation</th>
                <th scope="col">Marque</th>
                <th scope="col">Personnel</th>
                <th scope="col">Action</th>               
              </tr>
            </thead>
            <tbody>
              @foreach ($voitures as $v)
                <tr>
                  <th scope="col">{{$v->id}} </th>
                  <td >{{$v->immatriculation}} </td>                  
                  <td >{{$v->marque}} </td>
                  <td >{{$v->personnel->nom}} {{$v->personnel->prenom}}</td>
                  <td > <form action=" {{route('voitures.destroy',$v) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                  </form>
                  <a href="{{route('voitures.show', $v) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                  </a>
                  <a href="{{route('voitures.edit', $v) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                  </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>    
@endsection