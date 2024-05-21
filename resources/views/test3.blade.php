

@extends('layouts.main')
@section('title','teste 3')

@section('content')

@if ($id)
<h1> O id é {{$id}}</h1>

@else
<h1> O id é nulo</h1>

@endif


@endsection