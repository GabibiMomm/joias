@extends('layout.app')
@section('title','Jóia - {{$joia->nome}}')
@section('content')
    <h1>Jóia - {{$joia->nome}}</h1>
    <ul class="ul">
        <h4>
            <li>ID: {{$joia->id}}</li>
            <li>Nome: {{$joia->nome}}</li>
            <li>Categoria: {{$joia->categoria}}</li>
            <li>Imagem: {{$joia->imagem}}</li>
            <li>Preço: {{$joia->preco}}</li>
        </h4>
        <div class='imagem'>
            <img src="{{url('imagens/'.$joia->imagem)}}">
        </div>
        <br>
        <br>
    </ul>
    {{Form::open(['route' => ['joias.destroy',$joia->id],'method' => 'DELETE'])}}
    <a href="{{url('joias/'.$joia->id.'/edit')}}" class="btn btn-success">Alterar</a>
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    <a href="{{url('joias/')}}" class="btn btn-secondary">Voltar</a>
    {{Form::close()}}
    
@endsection