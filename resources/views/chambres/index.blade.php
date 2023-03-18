@extends('template')
<div >
  @section('button')
  <a href="{{route('chambres.create') }}" ><button type="button" class="btn btn-primary">Ajouter une chambre</button>
  </a>
  
  @endsection
</div>
<div class="mt-4">
  @section('titre')
    Liste des chambres
  @endsection
</div>
@section('content')
    <div class="container mt-4" >
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom de la Chambre</th>
                <th scope="col">Action</th>                
              </tr>
            </thead>
            <tbody>
              @foreach ($chambres as $c)
                <tr>
                  <th scope="col">{{$c->id}} </th>
                  <td >{{$c->nom_chambre}} </td>
                  <td > <form action=" {{route('chambres.destroy',$c) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                  </form>
                  <a href="{{route('chambres.show', $c) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                  </a>
                  <a href="{{route('chambres.edit', $c) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>    
@endsection