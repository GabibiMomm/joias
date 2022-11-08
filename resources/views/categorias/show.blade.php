@extends('layout.app')
@section('title','Categoria - {{$categoria->descricao}}')
@section('content')
    <h1>Categoria - {{$categoria->descrica}}</h1>
    <ul class="ul">
        <h4>
            <li>ID: {{$categoria->id}}</li>
            <li>Nome: {{$categoria->descricao}}</li>
        </h4>
    </ul>
    {{Form::open(['route' => ['categorias.destroy',$categoria->id],'method' => 'DELETE'])}}
    <a href="{{url('categorias/'.$categoria->id.'/edit')}}" class="btn btn-success">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('categorias/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
@endsection