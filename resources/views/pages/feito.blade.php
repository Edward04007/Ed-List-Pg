@extends('templates.main')
@section('title', 'Atividades')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_2.css')}}">
@endpush
@section('content')
    <div class="links">
        <a href="{{$ats->previousPageUrl()}}" class="fas fa-angle-left font"></a>
        <a href="{{$ats->nextPageUrl()}}" class="fas fa-angle-right font"></a>
    </div>
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
@endsection
