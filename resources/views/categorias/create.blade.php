@extends('layouts.app')
@section('title','Criar novo Contato')
@section('content')
    <h1>Criar novo Contato</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <br />
    {{Form::open(['route' => 'contatos.store', 'method' => 'POST','enctype'=>'multipart/form-data'])}}
        {{Form::label('descricao', 'Descrição')}}
        {{Form::text('descrição','',['class'=>'form-control','required','placeholder'=>'Descrição'])}}
        <br />
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)', 'class'=>'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection