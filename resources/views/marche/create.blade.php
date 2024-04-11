@extends('main')

@section('title', 'Formulaire Ajout de marché')

@section('content')
        <div class="row">
             <div class="col-lg-15 col-lg-offset-1">
                            @if(session('status'))
                               <div class="alert alert-success">
                                    {{ session('status') }}
                               </div>
                            @endif

                <form  id="contact-form" method="post" action="{{route('marche.store')}}" role="form" enctype="multipart/form-data">
                             @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Nom du marché <span class="blue">*</span></label>
                            <input type="text" id="firstname" name="nomMarche" class="form-control" placeholder="Nom du marché" >
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="message">Description <span class="blue"> *</span></label>
                            <textarea name="description" class="form-control" placeholder="Nom du groupe" id="message" cols="30" rows="4"></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="ville">Ville <span class="blue"> *</span></label>
                             <select name="ville" id="">
                                @foreach ($villes as $ville)
                                  <option value="{{$ville->idVille}}"> {{$ville->nomVille}} </option>
                                @endforeach

                             </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Capacité du marché <span class="blue"> *</span></label>
                            <input type="text" id="name" name="capacite" class="form-control" placeholder="Capacité du marché" >
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Adresse <span class="blue"> *</span></label>
                            <input type="text" id="email" name="adresse" class="form-control" placeholder="Adresse" >
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="phone">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre Téléphone" >
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="img">Image</label>
                            <input type="file" id="img" name="img" class="form-control" >
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <p class="blue"><strong>*ces informations sont requises</strong></p>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="button1" value="Annuler">
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="button1" value="Enregistrer">
                        </div>
                    </div>
                    <p class="thank-you" style="display:"></p>
                </form>
             </div>
        </div>
@endsection
