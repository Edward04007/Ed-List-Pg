@extends('templates.main')
@section('title', 'Sobre')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_8.css')}}">
@endpush
@section('content')
    <h1 class="title font">
        Como surgiu o EdList?
    </h1>
    <p class="paragrafo font">
        Quando a pandemia chegou ao Brasil e as escolas adotaram o formato EAD, tive muita dificuldade para gerenciar o volume de atividades. A primeira alternativa que encontrei foi anotar tudo em bloco de notas, mas chegou um ponto que só bloco de notas não dava conta, ficava extremante desorganizado e extenso. Então pensei, "ora, faço o curso de informática, vou criar um sistema para gerenciar as atividades!".

    </p>
    <p class="paragrafo font">
        A ideia do nome veio da preguiça. Apenas peguei o meu apelido que o mesmo coloquei em mim e juntei com List. Traduzindo: EdList significa Éverton Lista.

    </p>

    <h2 class="title font">
        Algumas coisas que você precisa saber sobre o EdList
    </h2>
    <p class="paragrafo font">
        A plaforma não armazena nenhum conteúdo, apenas redirecionamos.
    </p>
    <p class=" paragrafo font">
        As datas de entrega quando não saõ definidas pelo professor,
        é definidas pelo administrador.
    </p>
    <p class="paragrafo font">
        Como os professores aproveitam gravações de outras aulas, geralmente as datas são diferentes, por conveniência coloco a data referente ao curso de informática.
    </p>
@endsection
