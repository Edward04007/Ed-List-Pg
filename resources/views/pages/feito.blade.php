@extends('templates.main')
@section('title', 'Atividades')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_2.css')}}">
@endpush
@section('content')
    @if ($ats == '')
    @else
    <div class="links">
        <a href="{{$ats->previousPageUrl()}}" class="fas fa-angle-left font"></a>
        <a href="{{$ats->nextPageUrl()}}" class="fas fa-angle-right font"></a>
    </div>
    @endif
    @forelse ($ats as $ats)
    <article class="div-form">
        <span class="font">{{$ats->materia}}</span>
            <div class='text'>
                <div class="div-span">
                    <span class="font">Atividade</span>
                    <span class="font">Entregar</span>
                    <span class="font">Enviada</span>
                </div>
                <div class="div-result">
                    <a class="font" target='_blank' rel='external' href='{{$ats->url}}'>Visualizar</a>
                    <time class="font">{{$ats->data_entrega}}</time>
                    <time class="font">{{$ats->data_entregue}}</time>
            </div>
        </div>
    </article>
    @empty
    <span class="empty font">Oops.. Nadinha!</span>
    @endforelse
    @if ($ats == '')
    @else
    <div class="orderBy">
        <form action="{{route('filtrar.filtrar_concluido')}}" method="post">
            <legend class="font">Filtrar por</legend>
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
    @endif
@endsection
