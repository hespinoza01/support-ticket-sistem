@extends('master')


@section('title', 'Detalle Ticket')

@section('content')
    <div class="row">
        <!-- Contenedor para los detalles del ticket -->
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

    <!-- Lista de comentarios -->
    @if(count($comments) > 0)
        <div class="row">
            <div class="col s6 offset-s3 card pd-bottom-2">
                <h5 class="col s10 offset-s1 pd-bottom-2">Comentarios</h5>
                @foreach($comments as $comment)
                    <div class="col s10 offset-s1 divider"></div>
                    <p class="col s10 offset-s1">{{ $comment->content }}</p>
                @endforeach
                <div class="col s10 offset-s1 divider"></div>
            </div>
        </div>
    @endif

    <div class="row">
        <!-- Contenedor para el formulario de los comentarios -->
        <div class="col s6 offset-s3 card pd-bottom-2">
            <form class="col s10 offset-s1 pd-top-2" action="{{ action('CommentsController@newComment') }}" method="POST">
                @if( session('status') )
                    <p class="success-alert col s12 green-text pd">{{ session('status') }}</p>
                @endif

                <h5>Responder</h5>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="post_id" value="{{ $ticket->id }}">

                <div class="input-field col s12 mg-top-2">
                    <textarea id="content" name="content" class="materialize-textarea">{{ old('content') }}</textarea>
                    <label for="content">Contenido</label>
                </div>

                @if(count($errors->all()) > 0)
                    <div class="col s12 errors-container">
                        <p>Error el procesar la petición</p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>* {{ $error }}</li>
                            @endforeach()
                        </ul>
                    </div>
                @endif

                <div class="col s7 offset-s6">
                    <button type="reset" class="waves-effect waves-green grey lighten-5 green-text btn mg-right">Cancelar</button>
                    <button type="submit" class="waves-effect waves-light green btn">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
