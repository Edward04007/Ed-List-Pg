@extends('templates.main')
@section('title', 'Atividades')
@section('content')
<nav class="menu-op">
    <span>Administração</span>
</nav>
<section class="conteudo">
    <form  class="form" method="POST" action="../database/data/add_list.php">
        <select require name="disc">
            <option>Disciplina</option>
                
        </select>
        <input type="url" autocomplete="off" name="url" require placeholder="https://exemplo.com">
        <input type="date" require name="dataEntrega">
        <button type="submit">Adicionar</button>
    </form>
    <form  class="form" method="POST" enctype="multipart/form-data" action="../database/data/add_aluno.php">
        <div class="fotoPrew">
            <img id="mostrarAqui"> 
            <input style="display: none;" id="esfoto" type="file" accept="image/*" name="foto" onchange="mostrarImagem(event)">
        </div>
        <input type="text" autocomplete="off" require name="aluno_novo" placeholder="Nome do aluno">
        <input type="password" maxlength="8" placeholder="Senha" name='pass'>
        <label for="esfoto">Foto de perfil</label>
        <button type="submit">Adicionar</button>
    </form>
</section>
@endsection