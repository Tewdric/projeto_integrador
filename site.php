<?php

session_start();
require_once "config.php";

function logout()
{
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style1.css">
    <title>Home Page</title>
    <link rel="shortcut icon" type="imagex/png" href="./IMAGENS/Icone.site.png">
</head>

<body
    style="background-image: url(./IMAGENS/game-dungeons-and-dragons-hydra-tiamat-dungeons-and-dragons-wallpaper-preview.jpg);">
    <div class="container">

        <div class="manuTop">
            <a href="ficha.php"><button>Nova Ficha</button>
</a>
            <button>Editar Ficha</button>
            <button>Livros D&D PDF</button>

            <div class="saida">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <button class="logout" type="submit" name="logout" value="logout">Logout</button>

                    <?php
                    if (isset($_POST["logout"])) {
                        logout();
                    }
                    ?>
            </div>
        </div>
        <div class="caixaPrincipal">
            <div class="caixaEsquerda">
                <img src="/IMAGENS/title.png" alt="">
                <h3>Caro jogador, versão beta...</h3>
                <p>Crie suas fichas de personagens de forma mais pratica... bla bla bla</p>
                <button>Iniciar</button>
            </div>
            <div class="caixaDireita">

            </div>
        </div>
    </div>


</body>

</html>