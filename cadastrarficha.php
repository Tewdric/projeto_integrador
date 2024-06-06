
<?php
require_once "config.php";
session_start();                            
                            
$_SERVER["REQUEST_METHOD"] == "POST";

$nome_personagem = $_POST['personagem'];
$nome_jogador = $_POST['jogador'];
$classe = $_POST['classes'];
$raca = $_POST['racas'];
$ante = $_POST['antecendentes'];
$alin = $_POST['alinhamentos'];
$forca_personagem = $_POST['forca'];
$destreza_personagem = $_POST['destreza'];
$constituicao_personagem = $_POST['constituicao'];
$inteligencia_personagem = $_POST['inteligencia'];
$sabedoria_personagem = $_POST['sabedoria'];
$carisma_personagem = $_POST['carisma'];
$id = $_SESSION['id'];
var_dump($_SESSION);



$sql = $conn->prepare("INSERT INTO ficha(id_usuario,nome_personagem, nome_jogador,forca_personagem,destreza_personagem,
constituicao_personagem,inteligencia_personagem,sabedoria_personagem,carisma_personagem, id_classe, 
id_raca, id_alinhamento, id_antecedente) VALUES ('$id','$nome_personagem ','$nome_jogador','$forca_personagem','$destreza_personagem',
'$constituicao_personagem','$inteligencia_personagem','$sabedoria_personagem','$carisma_personagem',
'$classe','$raca','$alin ', '$ante')");

$sql->execute();

if ($sql == true) {
    
    header("location: ficha.php");
} else {
    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
}
?>