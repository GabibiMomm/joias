@extends('layout.app')
@section('title','Listagem de Restaurantes')
@section('content')
<h1>Listagem de categorias</h1>
<div class="row">
    <div class="col-sm-3">
        <a class="btn btn-success" href="{{url('categorias/create')}}">Criar</a>
    </div>
    <br>
    <br>
</div>
<table class="table table-striped tabela-index-categoria">
    <tr class="tr-index-categoria">
        <td class="td-index-categoria">ID</td>
        <td class="td-index-categoria">Nome</td>
    </tr>
    @foreach ($categorias as $categoria)
        <tr class="tr-index-categoria">
            <td class="td-index-categoria">{{$categoria->id}}</td>
            <td class="td-index-categoria">
                <a href="{{url('categorias/'.$categoria->id)}}">{{$categoria->descricao}}</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection