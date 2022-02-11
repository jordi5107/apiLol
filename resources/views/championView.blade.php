@extends('layouts.app')

@section('content')
<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{$champion->name}}_0.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Campio</div>
                        <h1 class="display-5 fw-bolder">{{$champion->name}}</h1>
                        <p class="lead">{{$champion->blurb}}</p>
                    </div>
                </div>
            </div>
        </section>  
@endsection
