@extends('master')


@section('title', 'Detalle Ticket')

@section('content')
    <div class="row">
        <div class="col s6 offset-s3 card mg-top pd-bottom-2">
            <div class="col s10 offset-s1 pd">
                <h5 class="mg-bottom-2">{{ $ticket->title }}</h5>
                <p><strong>Estado : </strong>{{ $ticket->status ? 'Pendiente' : 'Resuelto' }}</p>
                <p class="mg-bottom-2">{{ $ticket->content }}</p>

                <a class="waves-effect waves-light green btn mg-right" href="#">Editar</a>
                <a class="waves-effect waves-green grey lighten-5 green-text btn" href="#">Eliminar</a>
            </div>
        </div>
    </div>
@endsection
