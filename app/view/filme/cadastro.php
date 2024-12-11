<?php
 
require_once __DIR__ ."\..\..\model\Filme.php";
 
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $titulo = $_POST["titulo"];
    $ano = $_POST["ano"];
    $descricao = $_POST["descricao"];
    $poster = $_POST["poster"];
    $trailer = $_POST["trailer"];
 
 
    $filmeModel = new Filme();
    $sucesso = $filmeModel ->NovoFilme($titulo, $ano, $descricao, $poster, $trailer);
 
    if($sucesso){
        return header("location: listar.php?mensagem=sucesso");
    }else{
        return header("location: listar.php?mensagem=erro");
    }
}  
?>
 
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filmes</title>
    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">
    <link rel="stylesheet" href="/catalogo-filmes/public/css/cadastro.css">
</head>
<body>
<header>
        <div>
            <nav>
                <ul>
                    <li><a class="logo " href="">MovieVerse</a></li>
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="listar.php">Listar</a></li>
                    <li><a href="">Contato  </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <h1>Cadastro de filme</h1>
    <section class="adicionar_filmes">
        <form action="cadastrar.php" method="POST">
            <div>
                <label for="titulo">titulo do filme</label><br>
                <input type="text" name="titulo" required>
            </div>
            <div>
                <label for="ano">Ano de Lançamento</label><br>
                <input type="text" name="ano" required>
            </div>
            <div>
                <label for="descricao">Descrição</label><br>
                <input type="text" name="descricao" required>
            </div>
            <div>
                <label for="url_imagem">Poster Url</label><br>
                <input type="text" name="url_imagem" required>
            </div>
            <div>
                <label for="url_trailer">Trailer Url</label><br>
                <input type="text" name="url_trailer" required>
            </div>
            <button>
            <span class="material-symbols-outlined">
                save
            </span>
            </button>
        </form>
        <!-- Voltar para a listagem -->
        <form action="visualizar.php" method="GET">
                <button type="submit" title= "Voltar">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
                </button>
            </form>
    </section>
   
</body>
</html>