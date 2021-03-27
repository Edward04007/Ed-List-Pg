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
                    <li class="font">Química - 08:00 ás 09:30</li>
                    <li class="font">História - 10:00 ás 11:30</li>
                    <li class="font">Matemática - 13:30 ás 15:00</li>
                    <li class="font">Lab.Software - 15:30 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Terça-feira</span>
                <ul>
                    <li class="font">Geografia - 08:00 ás 09:30</li>
                    <li class="font">Lab.Web - 10:00 ás 11:30</li>
                    <li class="font">Lab.Hardware - 13:30 ás 15:00</li>
                    <li class="font">Lab.Software - 15:30 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Quarta-feira</span>
                <ul>
                    <li class="font">Ed.Física - 08:00 ás 08:45</li>
                    <li class="font">Sociologia - 08:45 ás 09:30</li>
                    <li class="font">Redação - 10:00 ás 11:30</li>
                    <li class="font">Espanhol - 13:30 ás 14:15</li>
                    <li class="font">Inglês - 14:15 ás 15:00</li>
                    <li class="font">Lab.Hardware - 15:30 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Quinta-feira</span>
                <ul>
                    <li class="font">Física - 08:00 ás 09:30</li>
                    <li class="font">P.Formação - 10:00 ás 11:30</li>
                    <li class="font">Lab.Web - 13:30 ás 15:00</li>
                    <li class="font">Português - 15:30 ás 16:15</li>
                    <li class="font">Projeto de vida - 16:15 ás 17:00</li>
                </ul>
            </div>
            <div class="div-form">
            <span class="font">Sexta-feira</span>
                <ul>
                    <li class="font">Biologia - 08:00 ás 09:30</li>
                    <li class="font">Português - 10:00 ás 11:30</li>
                    <li class="font">Matemática - 13:30 ás 15:00</li>
                    <li class="font">Filosofia - 15:30 ás 16:15</li>
                    <li class="font">F.Cidadania - 16:15 ás 17:00</li>
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
