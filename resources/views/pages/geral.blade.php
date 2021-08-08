@extends('templates.main')
@section('title', 'Geral')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_1.css')}}">
@endpush
@section('content')
        <div class='titles-session'><span class="font">Horário</span></div>
        <div class='div-horarios'>
            <div class="div-form">
            <span class="font">Segunda-feira</span>
                <ul>
                    <li class="font">Estágio - 08:00 ás 11:30</li>
                    <li class="font">História - 13:30 ás 15:00</li>
                    <li class="font">Matemática - 15:30 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Terça-feira</span>
                <ul>
                    <li class="font">Estágio - 08:00 ás 11:30</li>
                    <li class="font">Geografia - 13:30 ás 15:00</li>
                    <li class="font">Química - 15:30 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Quarta-feira</span>
                <ul>
                    <li class="font">Estágio - 08:00 ás 11:30</li>
                    <li class="font">Sociologia - 13:30 ás 14:15</li>
                    <li class="font">Inglês - 14:15 ás 15:00</li>
                    <li class="font">Ed.Física -  15:30 ás 16:15</li>
                    <li class="font">Espanhol - 16:15 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Quinta-feira</span>
                <ul>
                    <li class="font">Estágio - 08:00 ás 11:30</li>
                    <li class="font">Física - 13:30 ás 15:00</li>
                    <li class="font">Redação - 15:30 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Sexta-feira</span>
                <ul>
                    <li class="font">Rev. Química - 08:00 ás 08:45</li>
                    <li class="font">F.P.Cidadania - 08:45 ás 09:30</li>
                    <li class="font">Biologia - 10:00 ás 11:30</li>
                    <li class="font">Matemática - 13:30 ás 14:15</li>
                    <li class="font">Filosia - 14:15 ás 15:00</li>
                    <li class="font">Português - 15:30 ás 17:00</li>
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
        <div class='titles-session'><span class="font">Vídeos</span></div>
        <div class='estatistica-div'>
            <div class="div-form">
            <span class="font">Total</span>
                <ul>
                    <li class="font">{{$videos_total}}</li>
                </ul>
            </div>
        </div>
@endsection
