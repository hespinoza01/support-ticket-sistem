@extends('master')


@section('title', 'Ver tickets')

@section('content')
    <div class="row mg-top">
        <div class="col s8 offset-s2 card pd-top pd-bottom">
            <h5 class="center-align">Tickets</h5>

            @if( $tickets->isEmpty() )
                <p class="center-align">Todavía no hay tickets guardadas :(</p>
            @else
                <table class="col s10 offset-s1 mg-top mg-bottom striped responsive-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                            <tr class="ticket-item">
                                <td>{{ $ticket->id }}</td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->status ? 'Pendiente' : 'Resuelto' }}</td>
                                <td>
                                    <a href="{{ action('TicketsController@show', $ticket->slug) }}" class="valign-wrapper green btn-small waves-effect waves-light btn-detail">
                                        <i class="tiny material-icons right">arrow_forward</i>
                                        ver detalle
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
