@extends('master')


@section('title', 'Eliminar Ticket')

@section('content')
    <div class="row mg-top">
        <form class="card col s6 offset-s3 pd pd-bottom-2" action="{{ action('TicketsController@delete', $ticket->slug) }}" method="POST">
            <h5 class="col s10 offset-s1 center-align mg-bottom-2">¿Desea eliminar el ticket <strong>{{ $ticket->slug }}</strong>?</h5>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="col s6 offset-s3">
                <a class="waves-effect waves-green btn grey lighten-5 green-text" href="{{ action('TicketsController@show', $ticket->slug) }}">No</a>
                <button class="waves-effect waves-light btn red lighten-1 right">Sí, eliminar</button>
            </div>
        </form>
    </div>
@endsection
