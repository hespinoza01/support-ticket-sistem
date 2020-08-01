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
                            <th>Contenido</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->id }}</td>
                                <td><a href="{{ action('TicketsController@show', $ticket->slug) }}">{{ $ticket->title }}</a></td>
                                <td>{{ $ticket->status ? 'Pendiente' : 'Resuelto' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
