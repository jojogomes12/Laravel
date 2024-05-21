
@extends('layouts.main')

@section('title','Bloodfans')

@section('content')
 {{-- <img src="/images/f2.jpg" alt="imagem 1"> --}}
<h1>Teste de estilo</h1>
@foreach ($list as $l)
<p>{{$loop->index}}</p>
<p>{{$l}}</p>
@endforeach



@php

$n=10

@endphp
<!--  Esse é o comentario no HTML 5 -->
{{-- Esse é o comentario dentro do Blade--}}
<p> o VALOR DE N É :{{$n}}</p>
@endsection
