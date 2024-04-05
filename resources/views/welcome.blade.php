@extends('main')

@section('title', 'Accueil | marché Bénin')

@section('content')
<div class="container">
    <div class="divider"></div>
    <div class="heading">

    </div>

    <div class="row">

        <div class="card col" style="width:30%; margin-left:3%;">
           <img src="{{asset('images/marche.jpg')}}" class="card-img-top" alt="aidjedo">
            <div class="card-body">
                <h5 class="card-title">Aidjedo</h5>
                <p class="card-text">Capacité : <span>1000 places</span></p>
            </div>
        </div>

        <div class="card col" style="width:30%; margin-left:3%;">
           <img src="{{asset('images/marche.jpg')}}" class="card-img-top" alt="aidjedo">
            <div class="card-body">
                <h5 class="card-title">Aidjedo</h5>
                <p class="card-text">Capacité : <span>1000 places</span></p>
            </div>
        </div>

        <div class="card col" style="width:30%; margin-left:3%;">
           <img src="{{asset('images/marche.jpg')}}" class="card-img-top" alt="aidjedo">
            <div class="card-body">
                <h5 class="card-title">Aidjedo</h5>
                <p class="card-text">Capacité : <span>1000 places</span></p>
            </div>
        </div>

        
    </div>  
    
</div>
@endsection

