@extends('layout.app')
@section('title','Listagem de Jóias')
@section('content')
<h1>Listagem de Jóias</h1>
<div class="row">
    <div class="col-sm-3">
        <a class="btn btn-success" href="{{url('joias/create')}}">Criar</a>
    </div>
    <br>
    <br>
</div>
<table class="table table-striped tabela-index-categoria">
    <tr class="tr-index-categoria">
        <td class="td-index-categoria">ID</td>
        <td class="td-index-categoria">Nome</td>
        <td class="td-index-categoria">Categoria</td>
        <td class="td-index-categoria">Descrição</td>
        <td class="td-index-categoria">Preço</td>
    </tr>
    @foreach ($joias as $joia)
        <tr class="tr-index-categoria">
            <td class="td-index-categoria">{{$joia->id}}</td>
            <td class="td-index-categoria">
                <a href="{{url('joias/'.$joia->id)}}">{{$joia->nome}}</a>
            </td>
            <td class="td-index-categoria">{{$joia->categoria}}</td>
            <td>{{$joia->descricao}}</td>
            <td>{{$joia->preco}}</td>
        </tr>
    @endforeach
</table>
@endsection