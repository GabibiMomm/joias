@extends('layout.app')
@section('title','Alterar Produto')
@section('content')
    <h1>Alterar Produto</h1>
    <br>
    <br>
    {{Form::open(['route' => ['joias.update',$joia->id], 'method' => 'PUT','enctype'=>'multipart/form-data'])}}
    <div class="div-create-categoria">
        {{Form::label('nome', 'Nome')}}
        <br>    
        {{Form::text('nome','',['class'=>' form-create-categoria','required','placeholder'=>'Nome do Produto'])}}
        <br>
        <br>
        {{Form::label('descricao', 'Descrição')}}
        <br>    
        {{Form::text('descricao','',['class'=>' form-create-categoria','required','placeholder'=>'Descrição'])}}
        <br>
        <br>
        {{Form::label('preco', 'Preço')}}
        <br>    
        {{Form::number('preco','',['class'=>' form-create-categoria','required','placeholder'=>'Preço', 'step'=>'0.01'])}}
        <br>
        <br>
        {{Form::label('categoria', 'Categoria')}}
        <br>
        {{Form::text('categoria','',['class'=>' form-create-categoria','required','placeholder'=>'Categoria da Jóia', 'list' => 'listcategorias'])}}
        <datalist id='listcategorias'>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
            @endforeach
        </datalist>
        <br>
        <br>
        {{Form::label('imagem', 'Imagem')}}
        <br>
        {{Form::file('imagem',['class'=>'form-control'])}}
        <br>
        <div>
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        <a href="{{url('joias/')}}" class="btn btn-secondary">Voltar</a>
        </div>
    {{Form::close()}}
    </div> 

@endsection