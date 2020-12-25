@extends('templates.main')
@section('title', 'Geral')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_1.css')}}">
@endpush
@section('content')
<nav class="menu-op">
        <span>Geral</span>
    </nav>
    <section class="conteudo">
        <div class='titles-session'><span>Horário</span></div>
        <div class='div-horarios'>
            <div>
            <span>Segunda-feira</span>
                <ul>
                    <li>Física- 08:00 às 8:40</li>
                    <li>Espanhol- 10:50 às 11:30</li>
                    <li>História- 13:30 às 14:15</li>
                    <li>Educação Física- 16:30 às 17:00</li>
                </ul>
            </div>
            <div>
            <span>Terça-feira</span>
                <ul>
                    <li>Matemática- 8:00 às 9:30</li>
                    <li>Geografia- 10:50 às 11:30</li>
                    <li>Homero- 13:30 às 15:00</li>
                    <li>Homero- 15:30 às 17:00</li>
                </ul>
            </div>
            <div>
            <span>Quarta-feira</span>
                <ul>
                    <li>Israel- 8:00 às 9:30</li>
                    <li>Israel- 10:00 às 11:30</li>
                    <li>Inglês Técnico- 13:00 às 14:00</li>
                    <li>Homero- 14:30 às 15:30</li>
                    <li>Formação p/cidadania- 16:00 às 17:00</li>
                </ul>
            </div>
            <div>
            <span>Quinta-feira</span>
                <ul>
                    <li>Inglês- 8:00 às 8:50</li>
                    <li>Química- 10:00 às 11:30</li>
                    <li>Português- 13:30 às 15:00</li>
                    <li>Biologia- 16:15 as 17:00</li>
                </ul>
            </div>
            <div>
            <span>Sexta-feira</span>
                <ul>
                    <li>Matemática- 8:00 às 9:30</li>
                    <li>Filosofia- 10:45 às 11:30</li>
                    <li>Sociologia- 16:30 às 17:00</li>
                </ul>
            </div>
        </div>
        <div class='titles-session'><span>Atividades</span></div>
        <div class='estatistica-div'>
            <div>
            <span>Total</span>
                <ul>
                    <li>{{$Atividades_total}}</li>
                </ul>
            </div>
            <div>
            <span>Atribuído</span>
                <ul>
                    <li>{{$Atividades_atribuido}}</li>
                </ul>
            </div>
            <div>
            <span>Concluído</span>
                <ul>
                    <li>{{$Atividades_concluido}}</li>
                </ul>
            </div>
        </div>
        <div class='titles-session'><span>Alunos</span></div>
        <div class='alunos-div'>
            <div>
                @foreach ($lista as $lista)
                <figure>
                    <img src="{{$lista->foto}}" alt='foto de perfil'>
                </figure>
                @endforeach
            </div>
        </div>
    </section>
@endsection
