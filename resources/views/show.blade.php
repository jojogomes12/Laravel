@extends('layouts.main')
@section('title','visualizar dependencias')
@section('content')
    
@if($user)
@foreach ($user as $u)
{{$u}}
@else
<p>não tem nada para ver aqui</p>
@endif    
@endforeach



@endsection