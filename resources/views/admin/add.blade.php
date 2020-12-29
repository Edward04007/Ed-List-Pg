@extends('templates.main')
@section('title', 'Adminstração')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_4.css')}}">
@endpush
@section('content')
    <div class="div-form form-style"> {{-- Atividades --}}
        <legend class="font">Adicionar Atividades</legend>
        <form method="POST" action="{{route('lista.insertLista')}}">
            @csrf
            <select require name="disc">
                <option>Disciplina</option>
                @foreach ($discs as $disc)
                <option value="{{$disc->pk_disciplina}}">{{$disc->materia}}</option>
                @endforeach
            </select>
            <input type="text" autocomplete="off" name="url" require placeholder="Página ou link da atividade">
            <input type="date" require name="dataEntrega">
            <button type="submit">Adicionar</button>
        </form>
    </div>
    <div class="div-form form-style">{{-- Aluno --}}
        <legend class="font">Adicionar aluno</legend>
        <form method="POST" action="{{route('aluno.insertAluno')}}">
            @csrf
            <input type="url" placeholder="link da foto" require name="url_foto">
            <input type="text" autocomplete="off" require name="aluno_novo" placeholder="Nome do aluno">
            <input type="password" maxlength="8" require placeholder="Senha" name='passw'>
            <button type="submit">Adicionar</button>
        </form>
    </div>
    <div class="div-form form-style"> {{-- Video --}}
        <legend class="font">Adicionar Vídeos</legend>
        <form method="POST" action="{{route('video.insertvideo')}}">
            @csrf
            <select require name="discip">
                <option>Disciplina</option>
                @foreach ($discs as $disc)
                <option value="{{$disc->pk_disciplina}}">{{$disc->materia}}</option>
                @endforeach
            </select>
            <input type="url" autocomplete="off" name="url_video" require placeholder="Link do video">
            <input type="date" require name="doDia">
            <button type="submit">Adicionar</button>
        </form>
    </div>
@endsection
