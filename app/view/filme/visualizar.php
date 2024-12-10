<?php
require_once __DIR__ ."/../../config/env.php";
require_once __DIR__ ."/../../config/database.php";
require_once __DIR__ ."/../../model/Filme.php";

$id = $_GET['id'];

if ($id == '') {
    return header('Location: listar.php');
}

$filmeModel = new Filme();
$filme = $filmeModel->findById($id);

// echo "<h2>". $filme['id'] ."</h2>" ;
// echo "<h1>". $filme['nome'] ."</h1>" ;
// echo "<span>". $filme['descricao'] ."</span>" ;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">
</head>
<body>
<section class="container">
        <h2>Detalhes do Filme</h2>

        <div class="detalhes-container">
            <h3><?php echo $filme->nome; ?></h3>
            <img src="<?php echo $filme->url_imagem; ?>" alt="Capa do filme">
            <div class="descricao">
                <p><strong>Ano: </strong> <?php echo $filme->ano; ?></p>
                <p><strong>Descrição: </strong> <?php echo $filme->descricao; ?></p>
            </div>
        </div>

        <div class="trailer">
            <h3>Trailer do Filme</h3>
            <iframe src="<?php echo $filme->url_trailer; ?>" allowfullscreen></iframe>
        </div>

        <form action="listar.php" method="GET">
            <button title="Voltar">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </button>
        </form>
    </section>
</body>
</html>