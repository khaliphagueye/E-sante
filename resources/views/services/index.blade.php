@extends('template')

<div >
  @section('button')
  <a href="{{route('services.create') }}" ><button type="button" class="btn btn-primary">Ajouter un service</button>
  </a>
  @endsection
</div>
  <div >
    @section('titre')
      Liste des Services
    @endsection
  </div>
  @section('content')
      <div class="container mt-4" >
          <table class="table">
              <thead>
                <tr style="background-color: rgb(186, 190, 238); border-raduis:6px">
                  <th scope="col">#</th>
                  <th scope="col">Nom du service</th>
                  <th scope="col">Action</th>                
                </tr>
              </thead>
              <tbody>
                @foreach ($services as $s)
                  <tr>
                    <th scope="col">{{$s->id}} </th>
                    <td >{{$s->nom_service}} </td>
                    <td > <form action=" {{route('services.destroy',$s) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                    </form>
                    <a href="{{route('services.show', $s) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                    </a>
                    <a href="{{route('services.edit', $s) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>    
  @endsection
