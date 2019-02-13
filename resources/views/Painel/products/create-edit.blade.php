@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Cadastrar produto</h1>

@if( isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach()
    </div>
@endif

@if(isset($product))
<form class="form" method="post" action="{{route('produtos.update', $product->id)}}">
    {!! method_field('PUT') !!}
@else
<form class="form" method="post" action="{{route('produtos.store')}}">
@endif
    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
    {!! csrf_field() !!}
    <div class="form-group">
        @if(isset($product))
            <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{old('name', $product->name)}}">
        @else
            <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{old('name')}}">
        @endif
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="active" value="1" @if(isset($product) && $product->active == '1') checked @endif>
            Ativo?
        </label>
    </div>

    <div class="form-group">
        @if(isset($product))
            <input type="text" name="number" placeholder="Number:" class="form-control" value="{{old('number', $product->number)}}">
        @else
            <input type="text" name="number" placeholder="Number:" class="form-control" value="{{old('number')}}">
        @endif
    </div>

    <div class="form-group">
        <select name="category" class="form-control">
            <option value="">Escolha a categoria</option>
            @foreach($categorys as $category)
                <option value="{{$category}}"
                    @if(isset($product) && $product->category == $category )
                        selected
                    @endif
                >{{$category}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        @if(isset($product))
            <textarea name="description" placeholder="Descrição" class="form-control">{{old('description', $product->description)}}</textarea>
        @else
            <textarea name="description" placeholder="Descrição" class="form-control">{{old('description')}}</textarea>
        @endif
    </div>

    <button class="btn btn-primary">Cadastrar</button>
</form>

@endsection