@extends('layouts.main')
@section('title', $event->nome)
@section('content')
    <div class="container">
        <div class="row">
            <div class="img-container" id="img-container">
                <img src="/img/event/{{ $event->img }}" alt="">
            </div>
            <div class="info-container" id="info-container">
                <h1>{{ $event->nome }}</h1>
                <p class="p">{{ $event->city }}</p>
                <p class="p">X participantes</p>
                <p class="p">Dono do evento</p>
                <a href="#" class="btn">Confirmar presença</a>
                <ul>
                    <label for="">O evento conta com:</label>
                    @if (isset($event->itens))

                        @foreach ($event->itens as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="descrition_info" id="descrition-info">
                <h3>Sobre o evento</h3>
                <p>{{ $event->descrition }}</p>
            </div>
        </div>
    </div>

@endsection
