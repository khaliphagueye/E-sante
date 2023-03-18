@extends('template')
<div >
  @section('button')
  <a href="{{route('lits.create') }}" ><button type="button" class="btn btn-primary">Ajouter un lit</button>
  </a>
  @endsection
</div>
<div class="mt-4">
  @section('titre')
    Liste des Lits
  @endsection
</div>
@section('content')
    <div class="container mt-4" >
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Numero du lit</th>
                <th scope="col">Nom de la chambre</th>
                <th scope="col">Action</th>                
              </tr>
            </thead>
            <tbody>
              @foreach ($lits as $l)
                <tr>
                  <th scope="col">{{$l->id}} </th>
                  <td >{{$l->numero_lit}} </td>
                 
                    <td >
                        {{$l->chambre->nom_chambre}}
                    </td>
                 
                  <td > <form action=" {{route('lits.destroy',$l) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                  </form>
                  <a href="{{route('lits.show', $l) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                  </a>
                  <a href="{{route('lits.edit', $l) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>    
@endsection