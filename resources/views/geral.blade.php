@extends('templates.main')
@section('title', 'Geral')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_1.css')}}">
@endpush
@section('content')
<div class="content">
        <div class='titles-session'><span class="font">Horário</span></div>
        <div class='div-horarios'>
            <div class="div-form">
            <span class="font">Segunda-feira</span>
                <ul>
                    <li class="font">Física- 08:00 às 8:40</li>
                    <li class="font">Espanhol- 10:50 às 11:30</li>
                    <li class="font">História- 13:30 às 14:15</li>
                    <li class="font">Educação Física- 16:30 às 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Terça-feira</span>
                <ul>
                    <li class="font">Matemática- 8:00 às 9:30</li>
                    <li class="font">Geografia- 10:50 às 11:30</li>
                    <li class="font">Homero- 13:30 às 15:00</li>
                    <li class="font">Homero- 15:30 às 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Quarta-feira</span>
                <ul>
                    <li class="font">Israel- 8:00 às 9:30</li>
                    <li class="font">Israel- 10:00 às 11:30</li>
                    <li class="font">Inglês Técnico- 13:00 às 14:00</li>
                    <li class="font">Homero- 14:30 às 15:30</li>
                    <li class="font">Formação p/cidadania- 16:00 às 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Quinta-feira</span>
                <ul>
                    <li class="font">Inglês- 8:00 às 8:50</li>
                    <li class="font">Química- 10:00 às 11:30</li>
                    <li class="font">Português- 13:30 às 15:00</li>
                    <li class="font">Biologia- 16:15 as 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Sexta-feira</span>
                <ul>
                    <li class="font">Matemática- 8:00 às 9:30</li>
                    <li class="font">Filosofia- 10:45 às 11:30</li>
                    <li class="font">Sociologia- 16:30 às 17:00</li>
                </ul>
            </div>
        </div>
        <div class='titles-session'><span class="font">Atividades</span></div>
        <div class='estatistica-div'>
            <div class="div-form">
            <span class="font">Total</span>
                <ul>
                    <li class="font">{{$Atividades_total}}</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Atribuído</span>
                <ul>
                    <li class="font">{{$Atividades_atribuido}}</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Concluído</span>
                <ul>
                    <li class="font">{{$Atividades_concluido}}</li>
                </ul>
            </div>
        </div>
</div>
@endsection
