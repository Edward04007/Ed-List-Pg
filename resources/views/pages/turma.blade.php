@extends('templates.main')
@section('title', 'Turma')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_6.css')}}">
@endpush
@section('content')
    @foreach ($listas as $lista)
    <article class="div-form">
        <div>
            <img src="{{$lista->foto}}" alt="Foto de perfil">
        </div>
        <figcaption class="font">{{$lista->nome}}</figcaption>
    </article>
    @endforeach
    <div class="links">
        <a href="{{$listas->previousPageUrl()}}" class="fas fa-angle-left font"></a>
        <a href="{{$listas->nextPageUrl()}}" class="fas fa-angle-right font"></a>
    </div>
@endsection
