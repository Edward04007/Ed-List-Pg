@extends('templates.main')
@section('title', 'Perfil')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_7.css')}}">
@endpush
@section('content')
<div class="content">
    <div class="div-form form-style">
        <legend class="font">Perfil</legend>
        <form method="POST" action="{{route('perfil.FotoUpdate')}}">
            @csrf
            <input type="text" value="{{session('UsuarioNome')}}" readonly>
            <input type="url" name="image" placeholder="Link da foto de perfil">
            <input type="password" placeholder="Senha atual" name="pass">
            <button type="submit">Atualizar</button>
        </form>
    </div>
    <div class="div-form form-style">
        <legend class="font">Senha</legend>
        <form method="POST" action="{{route('perfil.SenhaUpdate')}}">
            @csrf
            <input type="password" placeholder="Senha atual" name="pass">
            <input type="password" maxlength="32" placeholder="Nova senha" name="passNow">
            <button type="submit">Atualizar</button>
        </form>
    </div>
</div>
@endsection
