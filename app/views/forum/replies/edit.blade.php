@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
    <div class="header">
        <h1>Editar sua Resposta</h1>
    </div>

    <div class="reply-form">
        {{ Form::model($reply->resource) }}
            <div class="form-row">
                <label class="field-title">Responder</label>
                {{ Form::textarea("body", null, ['class' => '_tab_indent']) }}
                {{ $errors->first('body', '<small class="error">:message</small>') }}
                <small><a href="http://duvidas.laravel.com.br/forum/02-27-2014-como-usar-marcacoes-formatando-seu-post" target="_BLANK">Aprenda a usar as Marcações.</a></small>
            </div>

            <div class="form-row">
                {{ Form::button('Salvar', ['type' => 'submit', 'class' => 'button']) }}
            </div>
        {{ Form::close() }}
    </div>
@stop
{{-- “What do you think you are, for Chrissake, crazy or somethin'? Well you're not! You're not! You're no crazier than the average asshole out walkin' around on the streets and that's it. ”  --}}