@extends('paginamestre')
@section('Titulo')
Projeto 1
@endsection
<img style="text-align:center" src="{{asset('imagens/aedah.jpg')}}">
@section('Cabecalho')
Formulario enviado
@endsection
@section('Corpo')
<div style="text-align: center">
Nome: {{$nome}}<br>
Idade:{{$idade}}<br>
Marca Favorita:{{$marcafav}}<br>
Tem carta:{{$carta}}<br>
</div>
@endsection