@extends('painel.templates.template')

@section('content')

@if(isset($product))
<h1 class="title-pg">Editar produto</h1>
@else
<h1 class="title-pg">Cadastrar produto</h1>
@endif

@if( isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach()
    </div>
@endif

@if(isset($product))
<!-- <form class="form" method="post" action="{{route('produtos.update', $product->id)}}">
    {!! method_field('PUT') !!} -->
    {!! Form::model($product, ['route' => ['produtos.update', $product->id], 'class' => 'form', 'method' => 'put' ]) !!}
@else
<!-- <form class="form" method="post" action="{{route('produtos.store')}}"> -->
    {!! Form::open(['route' => 'produtos.store', 'class' => 'form']) !!}
@endif
    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
    <!-- {!! csrf_field() !!} -->
    <div class="form-group">
        @if(isset($product))
            <!-- <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{old('name', $product->name)}}"> -->
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nome:'])!!}
        @else
            <!-- <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{old('name')}}"> -->
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nome:'])!!}
        @endif
    </div>

    <div class="form-group">
        <label>
            <!-- <input type="checkbox" name="active" value="1" @if(isset($product) && $product->active == '1') checked @endif> -->
            {!! Form::checkbox('active')!!}
            Ativo?
        </label>
    </div>

    <div class="form-group">
        @if(isset($product))
            <!-- <input type="text" name="number" placeholder="Number:" class="form-control" value="{{old('number', $product->number)}}"> -->
            {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Número:'])!!}
        @else
            <!-- <input type="text" name="number" placeholder="Number:" class="form-control" value="{{old('number')}}"> -->
            {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Número:'])!!}
        @endif
    </div>

    <div class="form-group">
        <!-- <select name="category" class="form-control">
            <option value="">Escolha a categoria</option>
            @foreach($categorys as $category)
                <option value="{{$category}}"
                    @if(isset($product) && $product->category == $category )
                        selected
                    @endif
                >{{$category}}</option>
            @endforeach
        </select> -->
        {!! Form::select('category', $categorys, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        @if(isset($product))
            <!-- <textarea name="description" placeholder="Descrição" class="form-control">{{old('description', $product->description)}}</textarea> -->
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'description:'])!!}
        @else
            <!-- <textarea name="description" placeholder="Descrição" class="form-control">{{old('description')}}</textarea> -->
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'description:'])!!}
        @endif
    </div>

    @if(isset($product))
        <!-- <button class="btn btn-primary">Editar</button> -->
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    @else
        <!-- <button class="btn btn-primary">Cadastrar</button> -->
        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
    @endif
</form>
{!! Form::close() !!}
@endsection