@extends('layouts.main')

@section('title','teste 4')

@section('content')


@if($busca)
<p> O usuario está buscando por: {{$busca}}</p>

@else

<p> O usuario não fez nenhuma busca</p>

@endif

@endsection