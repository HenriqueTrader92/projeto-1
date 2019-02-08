@extends('site.template.template1')

@section('content')

<h1>Home Page do Site</h1>

@if( $var1 == '123')
    <p>É igual</p>
@else
    <p>É diferente</p>
@endif

@unless($var1 == 1234)
    <p>Não é igual... unless</p>
@endunless

{{--
@for( $i = 0; $i < 10; $i++)
    <p>For: {{$i}}</p>
@endfor
--}}

{{--
@foreach($arrayData as $array)
    <p>foreach: {{$array}}</p>
@endforeach
--}}

@forelse($arrayData as $array)
    <p>forelse: {{$array}}</p>
@empty
    <p>Não eistem itens</p>
@endforelse

@include('site.includes.sidebar', compact('var1'))

@endsection