@extends('paginamestre')
@section('Titulo')
Projeto 1
@endsection
<img style="text-align:center" src="{{asset('imagens/aedah.jpg')}}">
@section('Cabecalho')
Empresas
@endsection
@section('Corpo')
Algumas das mais famosas empresas fabricantes de motas utilizadas em Potugal são <br>
<h4>a ajp</h4><br>
<img style="height:200px;width:300px;" src="{{asset('imagens/ajp.png')}}"><br>
<h4>a ktm</h4>
<img src="{{asset('imagens/ktm.png')}}"><br>
<h4>a yamaha</h4>
<img style="height:500px;width:600px;" src="{{asset('imagens/yamaha.jpg')}}"><br>
@endsection