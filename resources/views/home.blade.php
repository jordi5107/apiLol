@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Champions del LOL</h1>
          <p class="lead text-muted">League of Legends és un joc d'estratègia per equips en què dos equips de cinc campions s'enfronten per veure qui destrueix abans la base de l'altre. Tria entre un elenc de 140 campions per fer jugades èpiques, assassinar rivals i enderrocar torretes per alçar-te amb la victòria.</p>
        </div>
    </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              @foreach($champions as $champion)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <a href="{{route('champion.show', $champion->id)}}">
                <img class="card-img-top" src="https://ddragon.leagueoflegends.com/cdn/12.3.1/img/champion/{{$champion->image_full}}" alt="Card image cap">
                </a>
                <div class="card-body">
                  <p class="card-text">{{$champion->name}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a type="button" href="{{route('champion.show', $champion->id)}}" class="btn btn-sm btn-outline-secondary">Veure Campió</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>
@endsection
