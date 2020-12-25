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
    <link rel='manifest' href='{{asset('ed-manifest.json')}}'>
    <link rel="icon" sizes="144x144" href="https://i.imgur.com/OWzvVWl.png">
    <link rel="icon" sizes="128x128" href="https://i.imgur.com/xmavN6k.png">
    <link rel="icon" sizes="96x96" href="https://i.imgur.com/fDjuvsI.png">
    <link rel="icon" sizes="64x64" href="https://i.imgur.com/fqdmGIV.png">
    <link rel="icon" sizes="48x48" href="https://i.imgur.com/4CFWrEJ.png">
    <link rel="icon" sizes="32x32" href="https://i.imgur.com/KGGR8vW.png">
    <link rel="icon" sizes="16x16" href="https://i.imgur.com/2rx03NK.png">
    <link rel='stylesheet' type='text/css' media='screen' href="{{mix('css/main.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <script type="module" src="{{asset('pwabuilder-sw-register.js')}}" defer></script>
</head>
<body>
    <header class="menu-op">
        <figure></figure>
    </header>
    <section class="conteudo">
        <form method='POST' action="{{route('login.store')}}">
            @csrf
            <input type="text" maxlength='15' placeholder="Aluno" name='user' value="{{old('user')}}">
            <input type="password" maxlength="8" placeholder="Senha" name='pass'>
            <button type="submit">Entrar</button>
        </form>
        <div>
        @if($errors->any())
            @foreach ($errors->all() as $error)
            <span>{{$error}}</span>
            @endforeach
        @endif
        </div>
    </section>
</body>
</html>
