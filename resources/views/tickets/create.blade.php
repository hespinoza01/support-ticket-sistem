@extends('master')


@section('title', 'Create Ticket')

@section('content')
    <div class="row">
        <form action="{{ url()->current() }}" method="POST" class="col s6 offset-l3 card ticket-create-form" autocomplete="off">
            <h5 class="col s10 offset-s1">Enviar un nuevo ticket</h5>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="input-field col s10 offset-s1">
                {{-- Form::text('', null, ['class' => 'validate', 'id' => 'title']) }} --}}
                {{-- Form::label('title', 'Título') --}}
                <input id="title" name="title" type="text" class="validate" value="{{ old('title') }}">
                <label for="title">Título</label>
            </div>

            <div class="input-field col s10 offset-s1">
                {{-- Form::textarea('', null, ['class' => 'materialize-textarea', 'id' => 'content']) --}}
                {{-- Form::label('content', 'Contenido') --}}
                <textarea id="content" name="content" class="materialize-textarea">{{ old('content') }}</textarea>
                <label for="content">Contenido</label>
                <span class="helper-text">No dude en consultarnos cualquier duda</span>
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

            <button class="waves-effect waves-light green btn col s2 offset-s9">Enviar</button>
        </form>
    </div>
@endsection()
