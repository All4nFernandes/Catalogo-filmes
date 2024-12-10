<?php
require_once __DIR__. "\..\..\model\Filme.php";

$filmeModel = new Filme();
$filmes = $filmeModel->buscartodos();
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css ">
</head>
<body>
<header>
        <div>
            <nav>
                <ul>
                    <li><a class="logo " href="">MovieVerse</a></li>
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="listar.php">Editar</a></li>
                    <li><a href="">Contato  </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
    <?php
                foreach($filmes as $filme){ ?>
                <?php 

                ?>
            
        <div class="imagem">
        <a href="http://localhost/catalogo-filmes/app/view/filme/visualizar.php?id=<?php echo $filme->id; ?>"><img src="<?php echo $filme->url_imagem?>" alt="Capa filme"></a>
        </div>
    </section>
    <?php } ?>
</body>
</html>