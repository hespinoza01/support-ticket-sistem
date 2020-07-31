@extends('master')


@section('title', 'Create Ticket')

@section('content')
    <div class="row">
        <form action="" class="col s6 offset-l3 card ticket-create-form">
            <h5 class="col s10 offset-s1">Enviar un nuevo ticket</h5>
            <div class="input-field col s10 offset-s1">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Título</label>
            </div>

            <div class="input-field col s10 offset-s1">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Contenido</label>
                <span class="helper-text">No dude en consultarnos cualquier duda</span>
            </div>

            <button class="waves-effect waves-light green btn col s2 offset-s9">Enviar</button>
        </form>
    </div>
@endsection()
