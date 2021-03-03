<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:image" content="https://i.imgur.com/Sluh4Z3.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
    <title>EdList</title>
    <link rel='manifest' href="{{asset('ed-manifest.json')}}">
    <link rel="icon" sizes="144x144" href="https://i.imgur.com/OWzvVWl.png">
    <link rel="icon" sizes="128x128" href="https://i.imgur.com/xmavN6k.png">
    <link rel="icon" sizes="96x96" href="https://i.imgur.com/fDjuvsI.png">
    <link rel="icon" sizes="64x64" href="https://i.imgur.com/fqdmGIV.png">
    <link rel="icon" sizes="48x48" href="https://i.imgur.com/4CFWrEJ.png">
    <link rel="icon" sizes="32x32" href="https://i.imgur.com/KGGR8vW.png">
    <link rel="icon" sizes="16x16" href="https://i.imgur.com/2rx03NK.png">
    <link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script type="module" src="{{asset('pwabuilder-sw-register.js')}}" defer ></script>
    <script src="{{mix('js/autoLoadTheme.js')}}" defer ></script>
</head>
<body>
    <div class="root" >
        <header class="header">
            <figure></figure>
        </header>
        <section class="div-form">
            <form method='POST' action="{{Route('login.store')}}">
                @csrf
                <legend class="font">LOGIN</legend>
                 <input type="text" placeholder="Aluno" name='user' value="{{old('user')}}">
                <input type="password" placeholder="Senha" name='pass'>
                <button type="submit">Entrar</button>
            </form>
        </section>
        <div class="erros">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                <span class="red">{{$error}}</span>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
