<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    {{-- Padrão --}}
    <meta name="image" content="https://i.imgur.com/Sluh4Z3.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
    <meta name="url" content="https://ed-list.herokuapp.com">
    {{-- Facebook --}}
    <meta property="og:image" content="https://i.imgur.com/Sluh4Z3.png">
    <meta property="og:description" content="Tenha um maior controle sobre as suas atividades">
    <meta property="og: url" content="https://ed-list.herokuapp.com">
    {{-- Twitter --}}
    <meta name="twitter:image" content="https://i.imgur.com/Sluh4Z3.png">
    <meta name="twitter:description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="twitter:url" content="https://ed-list.herokuapp.com">
    <title>@yield('title')- EdList</title>
    <link rel='manifest' href='{{asset('ed-manifest.json')}}'>
    <link rel="icon" sizes="144x144" href="https://i.imgur.com/OWzvVWl.png">
    <link rel="icon" sizes="128x128" href="https://i.imgur.com/xmavN6k.png">
    <link rel="icon" sizes="96x96" href="https://i.imgur.com/fDjuvsI.png">
    <link rel="icon" sizes="64x64" href="https://i.imgur.com/fqdmGIV.png">
    <link rel="icon" sizes="48x48" href="https://i.imgur.com/4CFWrEJ.png">
    <link rel="icon" sizes="32x32" href="https://i.imgur.com/KGGR8vW.png">
    <link rel="icon" sizes="16x16" href="https://i.imgur.com/2rx03NK.png">
    @stack('css')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
    <script src="{{mix('js/menu.js')}}" defer ></script>
    <script src="{{mix('js/theme.js')}}" defer ></script>
    <script src="{{mix('js/autoLoadTheme.js')}}" defer ></script>
    <script src="{{mix('js/addClass.js')}}" defer ></script>
    @stack('js')
</head>
<body>
    <div class="root">
        <div class="content">
            @yield('content')
        </div>
        <nav class="menu-lateral">
            <ul>
                <li class="fas fa-user font mark_05"><a class="font" href="{{Route('perfil.perfilShow')}}">Perfil</a></li>
                <li  class="fas fa-video font mark_06"><a class="font" href="{{Route('record.recordShow')}}">Gravações</a></li>
                <li class="fas fa-users font mark_07"><a class="font" href="{{Route('turma.turmaShow')}}">Turma</a></li>
                <li class="fas fa-user-shield font mark_08"><a class="font" href="{{Route('admin.adminShow')}}">Admin</a></li>
                <li class="fas fa-moon font mode_dark"><a class="font mode_dark">Modo Dark</a></li>
                <li class="fas fa-sign-out-alt font mark_09"><a class="font" href="{{Route('lagout.lagout')}}">Sair</a></li>
            </ul>
        </nav>
        <header class="header">
            <div class="subMenu div-form">
                <span class="font">Atividades</span>
                <div>
                    <a class="font mark_04" rel='next' href="{{Route('fazer.lista_atribuida')}}">Atribuído</a>
                    <a class="font mark_03" rel='next' href="{{Route('feito.lista_concluido')}}">Concluído</a>
                </div>
            </div>
            <nav>
                <img class="menu"  src='{{session('UsuarioFoto')}}'>
                <span class="fas fa-book button mark_02"></span>
                <a class="fas fa-house-user mark_01" href="{{Route('geral.index')}}"></a>
            </nav>
        </header>
    </div>
</body>
</html>
