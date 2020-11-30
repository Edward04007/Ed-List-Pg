<?php session_start();?>
<!DOCTYPE html>
 <html>
 <head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:image" content="https://edlist-01.000webhostapp.com/images/logo/ico.png">
    <meta name="description" content="Tenha um maior controle sobre as suas atividades">
    <meta name="author" content="Éverton - Ed">
    <meta name="copyright" content="© 2020 EdList">
    <title>Fazer - EdList</title>
    <link rel="icon" href="../images/favicon/favicon-128.png">
    <link rel="icon" href="../images/favicon/favicon-64.png">
    <link rel="icon" href="../images/favicon/favicon-48.png">
    <link rel="icon" href="../images/favicon/favicon-32.png">
    <link rel="icon" href="../images/favicon/favicon-16.png">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/main_3.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
    <script src='../scripts/menu.js' defer></script>
 </head>
 <body>
    <div class="bg-img">
        <img src='../images/perfil/<?php echo$_SESSION['foto-aluno']?>'alt='foto de perfil'>
        <figcaption><?php echo$_SESSION['nome-aluno']?></figcaption>
    </div>
    <nav class="menu-op">
        <ul>
            <li><a>Fazer</a></li>
            <li><a href="../view/feito.php">Feito</a></li>
        </ul>
    </nav>
    <section class="conteudo">
        <?php require_once("../model/view_list_fazer.php")?>     
    </section>
    <header class="menu">
    <?php require_once("../model/alunos.php")?>
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
                <?php echo $icon?>
                <li class="fas fa-video icon1"></li>
                <?php echo $al?>
                <a class="fas fa-house-user" href="./geral.php"></a>
            </ul>
        </nav>
    </header>
 </body>
 </html>
