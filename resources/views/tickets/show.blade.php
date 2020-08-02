@extends('master')


@section('title', 'Detalle Ticket')

@section('content')
    <div class="row">
        <div class="col s6 offset-s3 card mg-top pd-bottom-2">
            <div class="col s10 offset-s1 pd-top-2 pd-bottom">
                <a href="{{ action('TicketsController@index') }}" class="green-text valign-wrapper mg-bottom-2"><i class="tiny material-icons">arrow_back</i>Ver todos los tickets</a>
                <h5 class="mg-bottom-2">{{ $ticket->title }}</h5>
                <p><strong>Estado : </strong>{{ $ticket->status ? 'Pendiente' : 'Resuelto' }}</p>
                <p class="mg-bottom-2">{{ $ticket->content }}</p>

                <div class="col s6 offset-s7">
                    <a class="waves-effect waves-green grey lighten-5 green-text btn mg-right" href="{{ action('TicketsController@checkdelete', $ticket->slug) }}">Eliminar</a>
                    <a class="waves-effect waves-light green btn" href="{{ action('TicketsController@edit', $ticket->slug)  }}">Editar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
