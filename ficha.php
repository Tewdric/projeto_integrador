<?php
require_once "config.php";

$_SERVER["REQUEST_METHOD"] == "POST";

$nome_personagem = $_POST['personagem'];
$nome_jogador = $_POST['jogador'];
$classe = $_POST['classes'];
$raca = $_POST['racas'];
$ante = $_POST['antecendentes'];
$alin = $_POST['alinhamentos'];


$sql = $conn->prepare("INSERT INTO ficha(nome_personagem, nome_jogador, id_classe, 
id_raca, id_alinhamento, id_antecedente) VALUES ('$nome_personagem ','$nome_jogador','$classe',
'$raca','$alin ', '$ante')");

$sql->execute();

print_r($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Ficha</title>
    <link rel="shortcut icon" type="imagex/png" href="./IMAGENS/Icone.site.png">
    <link rel="stylesheet" href="./CSS/styleFIcha.css">
    <link href='https://fonts.googleapis.com/css?family=MedievalSharp' rel='stylesheet'>
</head>

<body style="background-image: url(/game-dungeons-and-dragons-hydra-tiamat-dungeons-and-dragons-wallpaper-preview.jpg);">
    <div class="container">

        <div class="manuTop">
            <button>Livros D&D PDF</button>
            <a href="site.php"><button>Home Page</button></a>
        </div>
        <form action="" method="post">

            <div class="ficha">
                <!--PARTE SUPERIOR, COLOCAR NOME PERSONAGEM, CLASSE, RAÇA, ETC..-->
                <div class="ficha_top">
                    <div class="caixa_direita">


                        <input style="font-family:'MedievalSharp';font-size: 30px;;" type="text" name="personagem" placeholder="Nome do Personagem">
                        <select name="classes">
                            <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Classe</option>
                            <?php
                            $query = $conn->query("SELECT id, nome FROM classe ORDER BY nome ASC");
                            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                            print_r($registros);
                            foreach ($registros as $option) {
                            ?>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="<?php echo $option['id'] ?>"><?php echo $option['nome'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <select name="antecendentes">
                            <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Antecedente</option>
                            <?php
                            $query = $conn->query("SELECT id, nome FROM antecedente ORDER BY nome ASC");
                            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                            print_r($registros);
                            foreach ($registros as $option) {
                            ?>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="<?php echo $option['id'] ?>"><?php echo $option['nome'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <input type="text" style="font-family:'MedievalSharp';font-size: 15px;;" name="jogador" placeholder="Nome do Jogador">

                        <select name="racas">
                            <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Raça</option>
                            <?php
                            $query = $conn->query("SELECT id, nome FROM raca ORDER BY nome ASC");
                            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                            print_r($registros);
                            foreach ($registros as $option) {
                            ?>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="<?php echo $option['id'] ?>"><?php echo $option['nome'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <select name="alinhamentos">
                            <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Alinhamento</option>
                            <?php
                            $query = $conn->query("SELECT id, nome FROM alinhamento ORDER BY nome ASC");
                            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                            print_r($registros);
                            foreach ($registros as $option) {
                            ?>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="<?php echo $option['id'] ?>"><?php echo $option['nome'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <input style="font-family:'MedievalSharp';font-size: 15px;;" type="text" name="xp" placeholder="XP">





                    </div>
                </div>

                <div class="ficha_meio">
                    <div class="caixa_media_esquerda">

                        <div class="ficha_top_int">

                            <div class="cxs_esquerda">
                                <ul class="atributos">
                                    <li>Força<input type="text" name="forca" class="atributo_caixa"> <input type="text" name="Destreza_roll" class="dados_roll"> </li>
                                    <li>Destreza <input type="text" name="destreza" class="atributo_caixa"><input type="text" name="Força_roll" class="dados_roll"> </li>
                                    <li>Constituição<input type="text" name="constituicao" class="atributo_caixa"><input type="text" name="Constituição_roll" class="dados_roll"> </li>
                                    <li>Inteligencia<input type="text" name="inteligencia" class="atributo_caixa"><input type="text" name="Inteligencia_roll" class="dados_roll"> </li>
                                    <li>Sabedoria <input type="text" name="sabedoria" class="atributo_caixa"> <input type="text" name="Sabedoria_roll" class="dados_roll"> </li>
                                    <li>Carisma <input type="text" name="carisma" class="atributo_caixa"> <input type="text" name="Carisma_roll" class="dados_roll"> </li>
                                </ul>
                            </div>

                            <div class="cxs_direita">
                                <input type="text" name="inspiracao" id="inspiracao">
                                <p id="p_inspiracao" style="font-family: 'MedievalSharp';font-size: 20px;"> Inspiração</p>
                                <input type="text" name="inspiracao" id="inspiracao">
                                <p id="p_inspiracao" style="font-family: 'MedievalSharp';font-size: 15px;"> Bonus de Proeficiencias</p>


                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Força</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Destreza</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Constituição</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Inteligencia</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Sabedoria</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Carisma</label>
                                <br>
                                <p>SALVAGUARDAS</p>
                                <br>

                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Acrobacia</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Arcanismo</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Atletismo</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Blefe</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Diplomacia</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Exploração</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Furtividade</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> História</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Intimidação</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Intuição</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Ladinagem</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Manha</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Natureza</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Percepção</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Religião</label>
                                <label for="forca_r"> <input type="radio" id="forca" name="forca_r" /><input type="text" name="forca_dnv" style="border: none; width: 20%;"> Socorro</label>
                            </div>
                        </div>
                        <div class="ficha_bottom_int"></div>
                    </div>
                    <div class="caixa_ficha_media">

                        <div class="caixa_media_direita">
                            <div class="caixa_int_esquerda">
                                <div id="shield_armor">
                                    <div id="classe_armor"> <input type="text"><p>Classe Armor</p></div>
                                    <div id="iniciativa"><input type="text"><p>iniciativa</p></div>
                                    <div id="deslocamento"><input type="text"><p>Deslo<br>camento</p></div>
                                </div>

                                <div class="box_vida">
                                    <div id="vidas_atuais"><input type="text"><br><p>Pontos de vida atuais</p></div>
                                    <div id="vidas_temporais"><input type="text"><br><p>Pontos de vida temporários</p></div>
                                </div>
                                <div class="box_bottom">
                                    <div id="dados_vida" aria-placeholder="Total:"><input type="text"><br><p>Dados de vida</p></div>
                                    <div id="teste_morte">
                                     <p>Sucesso <input type="radio" id="forca" name="vida1" value="vida1" />
                                    <input type="radio" id="forca" name="vida2" value="vida2" />
                                    <input type="radio" id="forca" name="vida3" value="vida3" /></p> 
                                    <p>Fracasso <input type="radio" id="forca" name="vida1" value="vida1" />
                                    <input type="radio" id="forca" name="vida2" value="vida2" />
                                    <input type="radio" id="forca" name="vida3" value="vida3" /></p> 
                                        <br><p>Testes contra a morte</p>
                                    </div>
                                </div>
                            </div>
                            <div class="caixa_int_direita"></div>

                        </div>
                        <div class="ficha_tree">
                            <div class="coluna_esquerda">
                                <div class="obj1"></div>
                                <div class="obj2"></div>
                            </div>
                            <div class="coluna_direita"></div>
                        </div>
                    </div>

                </div>



            </div>

            <button type="submit">Enviar</button>
        </form>

        <div class="ficha2">
            <!--<img  id="ficha1" src="/IMAGENS/Ficha Oficial D&D 5E Editável em Negrito-002.png" alt="">

            <form action="ficha.html">
                <input type="text" id="nome_jogador2" name="nome_jogador2" placeholder="Nome Personagem">
            </form>
        </div>

        <div class="ficha3">
            <img id="ficha1" src="/IMAGENS/Ficha Oficial D&D 5E Editável em Negrito-003.png" alt="">

        </div>-->
        </div>
</body>

</html>