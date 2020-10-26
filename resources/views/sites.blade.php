@extends('paginamestre')
@section('Titulo')
Contactos
@endsection
<img style="text-align:center" src="{{asset('imagens/aedah.jpg')}}">
@section('Cabecalho')
Sites
@endsection
@section('Corpo')
@foreach ($sites as $numero)
    <div style="text-align: center">
    <p><a href="{{$numero}}" target="_blank"><h5>{{$numero}}</h5></a></p>
    </div>
@endforeach
@endsection