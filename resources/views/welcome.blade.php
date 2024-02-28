@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <div class="top">
        <h2 class="titlo">Busque Eventos</h2>
        <form action="#" method="post">
            <input type="text" name="txtBusca" id="txtBusca" class="input" placeholder="pesqusar eventos">
        </form>
    </div>
    <div class="events-container">
        <h2>Proximos Eventos</h2>
        <p>veja os eventos dos proximos dias</p>
        <div id="card-container" class="row">
            @foreach ($events as $item)
                <div class="card">
                    <img src="/img/events/{{$item->img}}" alt="{{ $item->nome }}">
                    <div class="card-body">
                        <p class="data">{{$item->date}}</p>
                        <h5 class="title">{{ $item->nome }}</h5>
                        <p class="card-participant">X-participantes</p>
                        <a href="/events/{{$item->id}}" class="btn">Saiba mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
