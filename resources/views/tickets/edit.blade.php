@extends('master')


@section('title', 'Editar Ticket')

@section('content')
    <div class="row">
        <form action="{{ url()->current() }}" method="POST" class="col s6 offset-l3 card ticket-create-form" autocomplete="off">

            @if( session('status') )
                <p class="success-alert col s10 offset-s1 green-text">
                    {{ session('status') }} <br>
                    <a href="{{ action('TicketsController@index') }}" class="text-decoration green-text"><strong>Ver todos los tickets</strong></a>.
                </p>
            @endif

            <h5 class="col s10 offset-s1">Editar ticket</h5>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="input-field col s10 offset-s1">
                {{-- Form::text('', null, ['class' => 'validate', 'id' => 'title']) }} --}}
                {{-- Form::label('title', 'Título') --}}
                <input id="title" name="title" type="text" class="validate" value="{{ $ticket->title }}">
                <label for="title">Título</label>
            </div>

            <div class="input-field col s10 offset-s1">
                {{-- Form::textarea('', null, ['class' => 'materialize-textarea', 'id' => 'content']) --}}
                {{-- Form::label('content', 'Contenido') --}}
                <textarea id="content" name="content" class="materialize-textarea">{{ $ticket->content }}</textarea>
                <label for="content">Contenido</label>
            </div>

            <div class="col s10 offset-s1">
                <label class="valign-wrapper">
                    <input id="status" name="status" class="filled-in" type="checkbox" {{ $ticket->status ? '' : 'checked' }}>
                    <span class="green-text">¿Resolver este ticket?</span>
                </label>
            </div>

            @if(count($errors->all()) > 0)
                <div class="col s10 offset-s1 errors-container">
                    <p>Error el procesar la petición</p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>* {{ $error }}</li>
                        @endforeach()
                    </ul>
                </div>
            @endif

            <div class="col s5 offset-s6">
                <a href="{{ action('TicketsController@show', $ticket->slug) }}" class="waves-effect waves-green grey lighten-5 green-text btn mg-right">Cancelar</a>
                <button class="waves-effect waves-light green btn">Guardar</button>
            </div>
        </form>
    </div>
@endsection
