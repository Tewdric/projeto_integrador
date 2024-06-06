<?php
require_once "config.php";
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
        <form action="cadastrarficha.php" method="post">

            <div class="ficha">
                <!--PARTE SUPERIOR, COLOCAR NOME PERSONAGEM, CLASSE, RAÇA, ETC..-->
                <div class="ficha_top">
                    <div class="caixa_direita">
                        <div class="menu_esquerdo">
                            <input style="font-family:'MedievalSharp';font-size: 30px; background: 
                            none; border: none; border-bottom:1px solid; margin-bottom: 5px; text-align: center;;" 
                            type="text" name="personagem" placeholder="Nome do Personagem" required>
                            <input type="text" style="font-family:'MedievalSharp';font-size: 15px;text-align: center;" name="jogador" placeholder="Nome do Jogador" required>

                        </div>
                        <div class="menu_direito">
                            <label for="" style="font-family:'MedievalSharp';font-size: 20px;;">Classe</label>
                            <select name="classes" id="classe" required>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Selecione</option>
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
                            <label for="" style="font-family:'MedievalSharp';font-size: 20px;;">Antecedente</label>
                            <select name="antecendentes" id="antecedente" required>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Selecione</option>
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

                            <label for="" style="font-family:'MedievalSharp';font-size: 20px;;">Raça</label>
                            <select name="racas" id="raca" required>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Selecione</option>
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
                            <label for="" style="font-family:'MedievalSharp';font-size: 20px;;">Alinhamento</label>
                            <select name="alinhamentos" id="alinhamento" required>
                                <option style="font-family:'MedievalSharp';font-size: 15px;;" value="">Selecione</option>
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

                            <input style="font-family:'MedievalSharp';font-size: 15px; margin-left: 12px;;" type="text" name="xp" placeholder="XP">

                        </div>
                    </div>
                </div>

                <div class="ficha_meio">
                    <div class="caixa_media_esquerda">

                        <div class="ficha_top_int">

                            <div class="cxs_esquerda">
                                <ul class="atributos">
                                    <li>Força<input type="text" name="forca" class="atributo_caixa" id="forca"> <input type="text" name="roll" class="dados_roll" id="bolota_forca"> </li>
                                    <li>Destreza <input type="text" name="destreza" class="atributo_caixa" id="destreza"><input type="text" name="Força_roll" class="dados_roll" id="bolota_destreza"> </li>
                                    <li>Constituição<input type="text" name="constituicao" class="atributo_caixa" id="constituicao"><input type="text" name="Constituição_roll" class="dados_roll" id='bolota_constituicao'> </li>
                                    <li>Inteligencia<input type="text" name="inteligencia" class="atributo_caixa" id="inteligencia"><input type="text" name="Inteligencia_roll" class="dados_roll" id="bolota_Inteligencia"> </li>
                                    <li>Sabedoria <input type="text" name="sabedoria" class="atributo_caixa" id="sabedoria"> <input type="text" name="Sabedoria_roll" class="dados_roll" id="bolota_sabedoria" > </li>
                                    <li>Carisma <input type="text" name="carisma" class="atributo_caixa" id="carisma"> <input type="text" name="Carisma_roll" class="dados_roll" id="bolota_carisma"> </li>
                                </ul>
                            </div>

                            <div class="cxs_direita">
                                <input type="text" name="inspiracao" id="inspiracao" style="margin-top: 2rem;">
                                <p id="p_inspiracao" style="font-family: 'MedievalSharp';font-size: 20px; "> Inspiração</p>
                                <input type="text" name="bonus_proeficiencia" id="bonus_proeficiencia" style="margin-top: 2rem; text-align:center;">
                                <p id="p_inspiracao" style="font-family: 'MedievalSharp';font-size: 15px; margin-bottom: 2rem; ;"> Bonus de Proeficiencias</p>

                                <p style="margin-top: 2rem;">SALVAGUARDAS</p>
                                <label for="bn_forca"> <input type="radio" id="radio_bn_forca" name="radio_forca" /><input type="text" name="forca_dnv" style="border: none; width: 20%; text-align:center;" id="valor_r_forca"> Força</label>
                                <label for="bn_destreza"> <input type="radio" id="radio_bn_destreza" name="radio_destreza" /><input type="text" name="forca_dnv" style="border: none; width: 20%; text-align:center;"id="valor_r_destreza"> Destreza</label>
                                <label for="bn_constituicao"> <input type="radio" id="radio_bn_constituicao" name="radio_constituicao" /><input type="text" name="forca_dnv" style="border: none; width: 20%; text-align:center;"id="valor_r_constituicao"> Constituição</label>
                                <label for="bn_inteligencia"> <input type="radio" id="radio_bn_inteligencia" name="radio_inteligencia" /><input type="text" name="forca_dnv" style="border: none; width: 20%; text-align:center;"id="valor_r_inteligencia"> Inteligencia</label>
                                <label for="bn_sabedoria"> <input type="radio" id="radio_bn_sabedoria" name="radio_sabedoria" /><input type="text" name="forca_dnv" style="border: none; width: 20%; text-align:center;"id="valor_r_sabedoria"> Sabedoria</label>
                                <label for="bn_carisma"> <input type="radio" id="radio_bn_carisma" name="radio_carisma" /><input type="text" name="forca_dnv" style="border: none; width: 20%; text-align:center;" id="valor_r_carisma"> Carisma</label>
                                
                                <br>
                                <p style="margin-top: 2rem;">PERICIAS</p>
                                <label> <input type="radio" id="acrobacia" name="acrobacia" /><input type="text" name="valor_pericia" id="valor_pericia_acrobacia"> Acrobacia</label>
                                <label> <input type="radio" id="adestrar_animais" name="adestrar_animais" /><input type="text" name="valor_pericia" id="valor_pericia_adestrar"> Adestrar Animais</label>
                                <label> <input type="radio" id="arcanismo" name="arcanismo" /><input type="text" name="valor_pericia" id="valor_pericia_arcanismo"> Arcanismo</label>
                                <label> <input type="radio" id="atletismo" name="atletismo" /><input type="text" name="valor_pericia" id="valor_pericia_atletismo"> Atletismo</label>
                                <label> <input type="radio" id="atuacao" name="blefe" /><input type="text" name="valor_pericia" id="valor_pericia_atuacao"> Atuação</label>
                                <label> <input type="radio" id="enganacao" name="diplomacia" /><input type="text" name="valor_pericia" id="valor_pericia_enganacao"> Engacanação</label>
                                <label> <input type="radio" id="furtividade" name="furtividade" /><input type="text" name="valor_pericia" id="valor_pericia_furtividade"> Furtividade</label>
                                <label> <input type="radio" id="historia" name="historia" /><input type="text" name="valor_pericia" id="valor_pericia_historia"> História</label>
                                <label> <input type="radio" id="intimidacao" name="intimidacao" /><input type="text" name="valor_pericia" id="valor_pericia_intimidacao"> Intimidação</label>
                                <label> <input type="radio" id="intuicao" name="intuicao" /><input type="text" name="valor_pericia" id="valor_pericia_intuicao"> Intuição</label>
                                <label> <input type="radio" id="investigacao" name="investigacao" /><input type="text" name="valor_pericia" id="valor_pericia_investigacao"> Investigação</label>
                                <label> <input type="radio" id="medicina" name="manha" /><input type="text" name="valor_pericia" id="valor_pericia_medicina"> Medicina</label>
                                <label> <input type="radio" id="natureza" name="natureza" /><input type="text" name="valor_pericia" id="valor_pericia_natureza"> Natureza</label>
                                <label> <input type="radio" id="percepcao" name="percepcao" /><input type="text" name="valor_pericia" id="valor_pericia_percepcao"> Percepção</label>
                                <label> <input type="radio" id="persuasao" name="persuasao" /><input type="text" name="valor_pericia" id="valor_pericia_persuasao"> Persuasão</label>
                                <label style="font-size:14px" > <input type="radio" id="presdigitacao" name="presdigitacao" /><input type="text" name="valor_pericia" id="valor_pericia_presdigitacao"> Presdigitação</label>
                                <label> <input type="radio" id="religiao" name="religiao" /><input type="text" name="valor_pericia" id="valor_pericia_religiao"> Religião</label>
                                <label style="font-size:14px" > <input type="radio" id="sobrevivencia" name="sobrevivencia" /><input type="text" name="valor_pericia" id="valor_pericia_sobrevivencia"> Sobrevivência</label>
                            </div>
                        </div>
                        <div class="ficha_bottom_int">
                            <div class="sabedoria_passiva" id="sabedoria_passiva" style="display: flex; flex-direction: row; padding: 10px; margin-top: 1rem;">
                                <input type="text" id="bolota_sabedoria_pass" style="font-family: 'MedievalSharp';font-size: 15px; border-radius: 50%; width: 20%; 
                                height: 30px; border-width: thick; text-align: center ; ">
                                <input type="text" id="sabedoria_pass" style="width: 70%; text-align:center;" placeholder="Sabedoria Passiva(Percepção)">
                            </div>
                            <div class="outras_proeficiencias" style="display: flex; flex-direction: column; text-align: center; padding: 10px;">
                                <textarea type="text" id="outras_proeficien" style="width: 90%; height: 225px;
                                 margin:auto; border-radius: 10px; font-family: 'MedievalSharp';font-size: 15px;padding:15px;"></textarea>
                                <p style="font-family: 'MedievalSharp';font-size: 15px;">OUTRAS PROEFICIENCIAS & IDIOMAS</p>

                            </div>
                        </div>
                    </div>
                    <div class="caixa_ficha_media">

                        <div class="caixa_media_direita">
                            <div class="caixa_int_esquerda">
                                <div id="shield_armor">
                                    <div id="classe_armor"> <input type="text" id="pts_class_armor" style="font-family: 'MedievalSharp';font-size: 15px; text-align:center;" >
                                        <p>Classe Armor</p>
                                    </div>
                                    <div id="iniciativa"><input type="text">
                                        <p>iniciativa</p>
                                    </div>
                                    <div id="deslocamento"><input type="text" id="deslocamento_cx" style="text-align: center; font-family:'MedievalSharp';font-size: 15px;" >
                                        <p>Deslocamento</p>
                                    </div>
                                </div>

                                <div class="box_vida">
                                    <div id="vidas_atuais"><input type="text" id="vidas_atuais_input" style="font-family:'MedievalSharp';font-size: 15px;;"><br>
                                        <p>Pontos de vida atuais</p>
                                    </div>
                                    <div id="vidas_temporais"><input type="text"><br>
                                        <p>Pontos de vida temporários</p>
                                    </div>
                                </div>
                                <div class="box_bottom">
                                    <div id="dados_vida" aria-placeholder="Total:">
                                        <input type="text" id="dados_vida_input" style="font-family:'MedievalSharp';font-size: 15px; text-align: center;;"><br>
                                        <p>Dados de vida</p>
                                    </div>
                                    <div id="teste_morte">
                                        <p>Sucesso <input type="radio" id="forca" name="vida1" value="vida1" />
                                            <input type="radio" id="forca" name="vida2" value="vida2" />
                                            <input type="radio" id="forca" name="vida3" value="vida3" />
                                        </p>
                                        <p>Fracasso <input type="radio" id="forca" name="vida1" value="vida1" />
                                            <input type="radio" id="forca" name="vida2" value="vida2" />
                                            <input type="radio" id="forca" name="vida3" value="vida3" />
                                        </p>
                                        <br>
                                        <p>Testes contra a morte</p>
                                    </div>
                                </div>
                            </div>
                            <div class="caixa_int_direita">
                                <div class="caixa_int_direita1">
                                    <textarea type="text" name="tracos_personalidade" id="tracos_personalidade"> </textarea>
                                    <p>Traços de personalidade</p>
                                </div>
                                <div class="caixa_int_direita2">
                                    <textarea type="text" name="ideias" id="ideias"></textarea>
                                    <p>Ideais</p>
                                </div>
                                <div class="caixa_int_direita3">
                                    <textarea type="text" name="vinculos" id="vinculos"></textarea>
                                    <p>Vinculos</p>
                                </div>
                                <div class="caixa_int_direita4">
                                    <textarea type="text" name="fraquezas" id="fraquezas"></textarea>
                                    <p>Fraquezas</p>
                                </div>
                            </div>

                        </div>
                        <div class="ficha_tree">
                            <div class="coluna_esquerda">
                                <div class="contorno">
                                    <div class="obj1">

                                        <div class="dano_arma">
                                            <p>Nome</p>
                                            <input type="text">
                                            <input type="text">
                                            <input type="text">
                                            <input type="text">
                                        </div>
                                        <div class="nome_arma">
                                            <p>Dano</p>
                                            <input type="text">
                                            <input type="text">
                                            <input type="text">
                                            <input type="text">
                                        </div>
                                        <div class="tipo_arma">
                                            <p>Tipo</p>
                                            <input type="text">
                                            <input type="text">
                                            <input type="text">
                                            <input type="text">
                                        </div>

                                    </div>
                                    <p style="font-family: 'MedievalSharp';font-size: 15px;">ATAQUES & CONJURAÇÃO</p>
                                </div>

                                <div class="contorno">
                                    <div class="obj2">
                                        
                                        <div class="obj2_esquerdo">
                                            <input type="text" id="itens1">
                                            <input type="text" id="itens2">
                                            <input type="text" id="itens3">
                                            <input type="text" id="itens4">
                                            <input type="text" id="itens5">
                                        </div>
                                        <div class="obj2_direito">
                                            <input type="text" id="nome_item1">
                                            <input type="text" id="nome_item2">
                                            <input type="text" id="nome_item3">
                                            <input type="text" id="nome_item4">
                                            <input type="text" id="nome_item5">
                                        </div>
                                        
                                    </div>
                                    <p style="font-family: 'MedievalSharp';font-size: 15px;">EQUIPAMENTOS</p>
                                </div>

                            </div>
                            <div class="coluna_direita">
                                <div class="contorno">
                                    <div class="talentos">
                                        <textarea type="text" id="talentos"></textarea>
                                    </div>
                                    <p style="font-family: 'MedievalSharp';font-size: 15px;" >TALENTOS DE CARACTERISTICAS</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

            <button onclick="mensagem()" type="submit">Enviar</button>
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

        <script src="js/teste.js"></script>
        
</body>

</html>