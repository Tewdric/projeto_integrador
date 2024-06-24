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
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js">     </script>
    <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-radar.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style1.css">
    <title>Home Page</title>
    <link rel="shortcut icon" type="imagex/png" href="./IMAGENS/Icone.site.png">
    <link href='https://fonts.googleapis.com/css?family=MedievalSharp' rel='stylesheet'>
    
</head>

<body>
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
                <div class="ficha_img">

                    <?php
                    $id = $_SESSION['id'];
                    $query = $conn->query("SELECT id_usuario, nome_personagem,forca_personagem,destreza_personagem,constituicao_personagem,sabedoria_personagem, carisma_personagem,id_raca FROM ficha WHERE id_usuario='$id'");
                    $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($registros as $option) {
                    ?>
                        <div class="esquerda">
                            <h5 class="att">Raça: <input class="att_in" id="id_raca" value="<?php echo $option['id_raca'] ?>"> </input></h5>
                            <h5 class="att">Nome: <input class="att_in" id="nome_personagem" value="<?php echo $option['nome_personagem'] ?>"> </input></h5>
                            <h5 class="att">Força: <input class="att_in" id="forca" value="<?php echo $option['forca_personagem'] ?>">  </input></h5> 
                            <h5 class="att">Constituição: <input class="att_in" id="constituicao" value="<?php echo $option['constituicao_personagem'] ?>"></input></h5>
                            <h5 class="att">Destreza: <input class="att_in" id="destreza" value="<?php echo $option['destreza_personagem'] ?>"></input></h5>
                            <h5 class="att">Sabedoria: <input class="att_in" id="sabedoria" value="<?php echo $option['sabedoria_personagem'] ?>"></input></h5>
                            <h5 class="att">Carisma: <input class="att_in" id="carisma" value="<?php echo $option['carisma_personagem'] ?>"></input></h5>
                            <div id="microservices"></div>
                            <div class="esquerda_baixo">
                                
                                
                            </div>
                            

                        </div>
                        <div class="imagem">
                                    <span id="p" value="<?php echo $option['id_raca'] ?>"></span>
                                </div>
                        
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/img.js"></script>
    <script src="/js/radar.js"></script>
    <script>
      
      
      
      var constituicao_att = parseInt(document.getElementById('constituicao').value)
      var forca_att = parseInt(document.getElementById('forca').value)
      var destreza_att = parseInt(document.getElementById('destreza').value)
      var sabedoria_att = parseInt(document.getElementById('sabedoria').value)
      var carisma_att = parseInt(document.getElementById('carisma').value)
      
      radar.show('#microservices', {
        size: 700,
        curve: false,
        metrics: [
          {
            name: "Força",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
              
            ],
            target: 2,
            actual: forca_att/5
          },
          {
            name: "Constituição",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 3,
            actual: constituicao_att/5
          },
          {
            name: "Destreza",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 2,
            actual: destreza_att/5
          },
          {
            name: "Sabedoria",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 3,
            actual: sabedoria_att/5
          },
          {
            name: "Carisma",
            range: [
              "Value 0",
              "Value 5",
              "Value 10",
              "Value 20"
            ],
            target: 2,
            actual: carisma_att/5
          }
        ]
      });
    </script>


</body>

</html>