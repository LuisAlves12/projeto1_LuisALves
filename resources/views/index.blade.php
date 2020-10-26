@extends('paginamestre')
@section('Titulo')
Projeto 1
@endsection
<img style="text-align:center" src="{{asset('imagens/aedah.jpg')}}">
@section('Cabecalho')
Formulário de uma pessoa
@endsection
@section('Corpo')
<div style="text-align:center">
<form method="post" action="{{route('view.formulario')}}">
    @csrf
<label for="nome">Nome</label>
<input type="text" name="nome">
<label for="idade">Idade</label>
<input type="text" name="idade">
<label for="marcafav">Marca Favorita</label>
<select name="marcafav">
    <option value="ktm">KTM</option>
    <option value="yamaha">YAMAHA</option>
    <option value="ajp">AJP</option>
</select>
<label for="carta">Tem Carta</label>
<select name="carta">
    <option value="sim">SIM</option>
    <option value="nao">NÃO</option>
</select>
<br><br><button type="submit">Enviar</button>
</form>
</div>
@endsection