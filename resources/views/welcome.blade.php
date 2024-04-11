@extends('main')

@section('title', 'Accueil | marché Bénin')

@section('content')
<div class="container">
    <div class="divider"></div>
    <div class="heading">

    </div>

    <div class="row">

        <div class=" col" >
                <h2 class="card-title" style="text-align: center;">
                    Bienvenu sur le programme de construction des marchés du gouvernement Béninois!
                </h2>
             <br><br><br>
                <div class="col" style="display:flex; justify-content: center;">
                    <a href="/enregistrer" style="margin-right:2%;" class="btn btn-info" title="je suis admin">Ajouter un marché</a>
                    <a href="/liste" class="btn btn-danger">Consulter les marchés construits</a>
                </div>

        </div>

</div>
@endsection

