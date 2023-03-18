@extends('template')
<div >
  @section('button')
  <a href="{{route('personnels.create') }}" ><button type="button" class="btn btn-primary">Ajouter un personnel</button>
  </a>
  @endsection
</div>
<div class="mt-4">
  @section('titre')
    Liste des EMPLOYERS
  @endsection
</div>
@section('content')
    <div class="container mt-4" >
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Matricule</th>
                <th scope="col">Civilité</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Statut</th>
                <th scope="col">Service</th>
                <th scope="col">Action</th>                
              </tr>
            </thead>
            <tbody>
              @foreach ($personnels as $p)
                <tr>
                  <th scope="col">{{$p->id}} </th>
                  <td >{{$p->matricule}} </td>
                  <td >{{$p->civilite}} </td>
                  <td >{{$p->prenom}} </td>
                  <td >{{$p->nom}} </td>
                  <td >{{$p->telephone}} </td>
                  <td >{{$p->mail}} </td>
                  <td >{{$p->statut}} </td>
                  <td >{{$p->service->nom_service}}</td>
                 
                  <td > <form action=" {{route('personnels.destroy',$p) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                  </form>
                  <a href="{{route('personnels.show', $p) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                  </a>
                  <a href="{{route('personnels.edit', $p) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>    
@endsection