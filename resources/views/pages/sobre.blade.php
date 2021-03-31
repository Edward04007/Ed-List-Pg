@extends('templates.main')
@section('title', 'Sobre')
@push('css')
<link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main_8.css')}}">
@endpush
@section('content')
<main class="main">
    <h1 class="font">
        Como surgiu o EdList?
    </h1>
    <p class="font">
        Criado e mantido por Éverton, o EdList surgiu com o objetivo de organizar e facilitar o acesso a atividades e material do curso técnico de informática.
    </p>
    <h2 class="font">Apoio</h2>
    <p class="font">
        Sem a ajuda de Jonas e Larissa, a plataforma nunca sairia do papel. Eles ajudaram com ideias e a testar a plataforma.
    </p>
    <h2 class="font">
        Algumas coisas que você precisa saber sobre o EdList
    </h2>
    <p class="font">
        A plataforma não armazena nenhum conteúdo, apenas redirecionamos.
    </p>
    <p class=" font">
      Por padrão o prazo de entrega é até a próxima aula, caso o professor não defina.
    </p>
    <p class="font">
        Boa parte das gravações são de outras turmas, por isso a data da gravação é dinifida para o horário do curso de informática, para facilitar a busca.
    </p>
</main>
@endsection
