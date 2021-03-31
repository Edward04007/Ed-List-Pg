@extends('templates.main')
@section('title', 'Gravações')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_5.css')}}">
@endpush
@section('content')
    <div class="links">
        @if ($listas_videos->previousPageUrl() != null)
        <a href="{{$listas_videos->previousPageUrl()}}" class="fas fa-angle-left font"></a>
        @endif
        @if ($listas_videos->nextPageUrl() != null)
        <a href="{{$listas_videos->nextPageUrl()}}" class="fas fa-angle-right font"></a>
        @endif
    </div>
    <div class="div-background">
        @forelse ($listas_videos as $listar_video)
        <article class="div-form">
            <span class="font">{{$listar_video->materia}}</span>
            <div class='text'>
                <div class="div-span">
                    <span class="font">Vídeo</span>
                    <span class="font">Do dia</span>
                </div>
                <div class="div-result">
                    <a class="font" target='_blank' rel='external' href='{{$listar_video->url_video}}'>Assistir</a>
                    <time class="font">{{$listar_video->data_gravado_em}}</time>
                </div>
            </div>
        </article>
        @empty
        <span class="empty font">Oops.. Nadinha!</span>
        @endforelse
    </div>
    @if ($listar_video != '')
    <div class="orderBy">
        <form action="{{Route('filtrar.record_filtre')}}" method="GET">
            <legend class="font">Filtrar por:</legend>
            <div>
                <select require name="disc">
                    <option value="todas">Disciplinas</option>
                    @foreach ($discs as $disc)
                    <option value="{{$disc->fk_disciplina}}">{{$disc->materia}}</option>
                    @endforeach
                </select>
                @csrf
                <button type="submit">Filtrar</button>
            </div>
        </form>
    </div>
    @endif
@endsection
