@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Listagem dos produtos</h1>

<button type="button" class="btn btn-success">Cadastrar</button>

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th class="c" width="200px">Ações</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td class="c">
            <a href="" class="actions edit">
                <button type="button" class="btn btn-primary">Edite</button>
            </a>
            <a href="" class="actions delete">
                <button type="button" class="btn btn-primary">Delete</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
