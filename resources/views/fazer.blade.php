@extends('templates.main')
@section('title', 'Atividades')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_3.css')}}">
@endpush
@section('content')
<div class="bg-img">
    <img src='{{session('UsuarioFoto')}}'alt='foto de perfil'>
    <figcaption>{{session('UsuarioNome')}}</figcaption>
</div>
<nav class="menu-op">
    <ul>
        <li><a>Atribuído</a></li>
        <li><a rel='prev' href="{{Route('feito.lista_concluido')}}">Concluído</a></li>
    </ul>
</nav>
<section class="conteudo">
    <div class="links">
        <a href="{{$ats->previousPageUrl()}}" class="fas fa-angle-left"></a>
        <a href="{{$ats->nextPageUrl()}}" class="fas fa-angle-right"></a>
    </div>
    @forelse ($ats as $ats)
    <form method='POST' action='{{Route('update.update', $ats->pk_lista)}}'>
        @csrf
        @method('put')
        <span>{{$ats->materia}}</span>
        <div class='text'>
            <div>
                <p>Atividade</p>
                <p>Entregar</p>
            </div>
            <div>
                <a target='_blank' rel='external' href='{{$ats->url}}'>Visualizar</a>
                <p>{{$ats->data_entrega}}</p>
            </div>
        </div>
        <button type='submit'>Concluído!</button>
    </form>
    @empty
    <span class="empty">Parece que você fez tudo!</span>
    @endforelse
</section>
@endsection
