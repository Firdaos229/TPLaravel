@extends('main')

@section('title', 'Liste des marchés')

@section('content')
<div class="row">
 @foreach ($marches as $marche)
    <div class="card col" style="width:30%; margin-left:3%;">
        <img src="{{asset('storage/'.$marche->image)}}" class="card-img-top" alt="aidjedo">
        <div class="card-body">
            <h5 class="card-title">{{$marche->nomMarche}}</h5>
            <p class="card-text">Capacité : <span>{{$marche->capacite}} places</span></p>
        </div>
    </div>
 @endforeach

</div>
@endsection
