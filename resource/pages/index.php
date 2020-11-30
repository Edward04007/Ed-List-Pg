<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:image" content="https://edlist-01.000webhostapp.com/images/logo/ico.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
    <title>EdList</title>
    <link rel="icon" href="./images/favicon/favicon-128.png">
    <link rel="icon" href="./images/favicon/favicon-64.png">
    <link rel="icon" href="./images/favicon/favicon-48.png">
    <link rel="icon" href="./images/favicon/favicon-32.png">
    <link rel="icon" href="./images/favicon/favicon-16.png">
    <link rel='stylesheet' type='text/css' media='screen' href='./styles/main.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src='./scripts/welcome.js' defer></script>
</head>
<body>
    <header class="menu-op">
        <figure></figure>
    </header>
    <section class="conteudo">
        <form method='POST' action='./database/data/user.php'>
            <input type="text" maxlength='14' placeholder="Aluno" name='user'>
            <input type="password" maxlength="8" placeholder="Senha" name='pass'>
            <button type="submit">Entrar</button>
        </form>
    </section>
</body>
</html>