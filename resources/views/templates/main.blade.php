<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:image" content="https://i.imgur.com/Sluh4Z3.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
    <script src="{{mix('js/menu.js')}}" defer></script>
    @stack('js')
</head>
<body>
 @yield('content')
    <header class="menu">
        <div class="pop video">
            <span>Aulas Gravadas</span>
            <ul>
            <li><a target='_blank' href="https://classroom.google.com/u/1/w/NzM3Nzc0MTUwMTBa/tc/NzQ3ODYxNzY5NDVa">Química</a></li>
                <li><a target='_blank' href="https://classroom.google.com/u/1/w/NzM3Nzc0MTUwMTBa/tc/NzQ3ODg1NDEyODFa">Matemático</a></li>
                <li><a target='_blank' href="https://drive.google.com/drive/u/0/folders/0B6VhsdzZjtmgfjQ2SkI3VExEdHNEQ3h0d1NTaFg2RGpSbnVLUXF3Q044MFk0R29peEJnYk0">Israel</a></li>
                <li><a target='_blank' href="https://drive.google.com/drive/u/1/folders/1rrSUUool6beDzCQInThG1HIXBPZnfeNR">Homero</a></li>
            </ul>
        </div>
        <nav>
            <ul>
                <li class="fas fa-video icon1"></li>
                <a rel='next' href='{{Route('fazer.lista_atribuida')}}'><li class='fas fa-user'></li></a>
                <a class="fas fa-house-user" href="{{Route('geral.index')}}"></a>
                <a class="fas fa-sign-out-alt" href="{{Route('lagout.lagout')}}"></a>
            </ul>
        </nav>
    </header>
</body>
</html>
