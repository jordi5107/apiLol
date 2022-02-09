@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
    </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              @foreach($champions as $champion)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://ddragon.leagueoflegends.com/cdn/12.1.1/img/champion/{{$champion->image_full}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$champion->name}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a type="button" href="{{route('champion.show', $champion->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
            
            
        </div>
    </div>
@endsection
