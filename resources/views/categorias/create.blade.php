@extends('layout.app')
@section('title','Criar nova Categoria')
@section('content')
<h1>Criar nova Categoria</h1>
<br/>
<br>
{{Form::open(['route' => 'categorias.store', 'method' => 'POST'])}}
<div class="div-create-categoria">
    {{Form::label('descricao', 'Descrição')}}
        <br>    
        {{Form::text('descricao','',['class'=>' form-create-categoria','required','placeholder'=>'Nome da Categoria'])}}
        <br/>
        <div>
            {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
            <a href="{{url('categorias/')}}" class="btn btn-secondary">Voltar</a>
        </div>
        
    {{Form::close()}}
</div>
@endsection