@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">Listagem dos produtos</h1>

    <a href="{{route('produtos.create')}}">
        <button type="button" class="btn btn-success">Cadastrar</button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th class="c" width="200px">Ações</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td class="c">
                    <a href="" class="actions edit">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </a>
                    <a href="" class="actions delete">
                        <button type="button" class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
