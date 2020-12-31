@extends('templates.main')
@section('title', 'Gravações')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_5.css')}}">
@endpush
@section('content')
    @if ($listas != '')
    <div class="links">
        <a href="{{$listas->previousPageUrl()}}" class="fas fa-angle-left font"></a>
        <a href="{{$listas->nextPageUrl()}}" class="fas fa-angle-right font"></a>
    </div>
    @else
    @endif
    @forelse ($listas as $lista)
    <article class="div-form">
        <span class="font">{{$lista->materia}}</span>
            <div class='text'>
                <div class="div-span">
                    <span class="font">Vídeo</span>
                    <span class="font">Do dia</span>
                </div>
                <div class="div-result">
                    <a class="font" target='_blank' rel='external' href='{{$lista->url_video}}'>Assistir</a>
                    <time class="font">{{$lista->data_gravado_em}}</time>
            </div>
        </div>
    </article>
    @empty
    <span class="empty font">Oops.. Nadinha!</span>
    @endforelse
    @if ($listas != '')
    <div class="orderBy">
        <form action="{{route('filtrar_disciplina.record_filtre')}}" method="post">
            <legend class="font">Filtrar por:</legend>
            <div>
                <select require name="disc">
                    <option value="todas">Disciplinas</option>
                    @foreach ($discs as $disc)
                    <option value="{{$disc->pk_disciplina}}">{{$disc->materia}}</option>
                    @endforeach
                </select>
                @csrf
                <button type="submit">Filtrar</button>
            </div>
        </form>
    </div>
    @else
    @endif
@endsection
