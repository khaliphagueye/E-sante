@extends('template')
<div class="row ">
  @section('research')
    <div class="col-4">
      <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form class="nav-link mt-2  mt-md-0 d-none d-lg-flex search" action="/search">
            @csrf
            @method('GET')
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Rechercher..." name="q">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
              </div>
          </form>
        </li>
      </ul>
    </div>
  @endsection
</div>
<div >
  @section('button')
  <a href="{{route('patients.create') }}" ><button type="button" class="btn btn-primary">Ajouter un patient</button>
  </a>
  @endsection
</div>

<div class="mt-4">
  @section('titre')
    Liste des Services
  @endsection
</div>
<div class="row">
  <div class="col-12">
    @section('content')
      <div class="container mt-4" >
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Civilité</th>
                <th scope="col">CNI</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom du lit</th>
                <th scope="col">Téléphone</th>
                {{-- <th scope="col">E-mail</th> --}}
                <th scope="col">GS</th>
                <th scope="col">Adresse</th>
                {{-- <th scope="col">Ville</th> --}}
                {{-- <th scope="col">Chambre</th>
                <th scope="col">Lit</th> --}}
                <th scope="col">Action</th>                
              </tr>
            </thead>
            <tbody>
              @foreach ($patients as $p)
                <tr>
                  <th scope="col">{{$p->id}} </th>
                  <td >{{$p->civilite_patient}} </td>                  
                  <td >{{$p->cni_patient}} </td>
                  <td >{{$p->prenom_patient}} </td>
                  <td >{{$p->nom_patient}} </td>
                  <td >{{$p->telephone_patient}} </td>
                  {{-- <td >{{$p->mail_patient}} </td> --}}
                  <td >{{$p->groupe_sanguin_patient}} </td>
                  <td >{{$p->adresse_patient}} </td>
                  {{-- <td >{{$p->ville_patient}} </td> --}}
                  {{-- <td >{{$p->chambre_id}} </td>
                  <td >{{$p->lit_id}} </td> --}}
                  <td >
                    <form action=" {{route('patients.destroy',$p) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                    </form>
                    <a href="{{route('patients.show', $p) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                    </a>
                    <a href="{{route('patients.edit', $p) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                    </a>
                  </td>
                </tr>


              <tr>
                <th scope="col">{{$p->id}} </th>
                <td >{{$p->civilite_patient}} </td>                  
                <td >{{$p->cni_patient}} </td>
                <td >{{$p->prenom_patient}} </td>
                <td >{{$p->nom_patient}} </td>
                <td >{{$p->telephone_patient}} </td>
                <td >{{$p->mail_patient}} </td>
                <td >{{$p->groupe_sanguin_patient}} </td>
                <td >{{$p->adresse_patient}} </td>
                <td >{{$p->ville_patient}} </td>
                <td >{{$p->chambre_id}} </td>
                <td >{{$p->lit_id}} </td>
                <td >
                  <form action=" {{route('patients.destroy',$p) }} " onclick="return confirm('Supprimer?') " method="POST" class="d-inline" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                  </form>
                  <a href="{{route('patients.show', $p) }}" ><button class=" btn btn-primary"><i class="fas fa-eye"></i></button>
                  </a>
                  <a href="{{route('patients.edit', $p) }}" ><button class=" btn btn-warning"><i class="fas fa-edit"></i></button>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>    
    @endsection
  </div>
</div>