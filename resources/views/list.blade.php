@extends('main')

@section('title', 'Liste des marchés')

@section('content')
  <a href="/enregistrer" class="btn btn-secondary">Ajouter un nouveau marché</a>
  <br><br>
<div class="row">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

 @foreach ($marches as $marche)
    <div class="card col" style="width:30%; margin-left:3%;">
        <img src="{{asset('storage/'.$marche->image)}}" class="card-img-top" alt="aidjedo">
        <div class="card-body">
            <h5 class="card-title">{{$marche->nomMarche}}</h5>
            <p class="card-text">Capacité : <span>{{$marche->capacite}} places</span></p>
            <p class="card-text">Ville : <span>{{$marche->ville->nomVille}}</span></p>
            <div >
               <a href="{{route('marche.edit',$marche->idMarche)}}" class="btn btn-info">Modifier</a>
               <form action="{{route('marche.delete', $marche->idMarche)}}" method="post">
                  @csrf
                  <input type="submit" class="btn btn-danger" value="Supprimer">
               </form>
            </div>
        </div>
    </div>
 @endforeach

     {{$marches->links()}}
</div>
@endsection
