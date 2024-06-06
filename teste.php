<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" style="display: flex; flex-direction: column; width: 50%;">
        <label for="">Raça</label>
        <select name="raca" id="raca">
            <option>Selecionar</option>
            <option value="1">Anão da montanha</option>
            <option value="2">Anão da colina</option>
        </select>
        <label for="">Classe</label>  
        <select name="classe" id="classe">
            <option value="">Selecionar</option>
            <option value="1">Guerreiro</option>
            <option value="2">Barbaro</option>
        </select>

        <label for="forca">Força</label>
        <input name="forca" id="forca">
        <label for="forca">Constituição</label>
        <input name="constituicao" id="constituicao">

        <div class="alou" style="display: flex; flex-direction:row;" >
        <input type="radio" name="atletismo" id="atletismo" ><input type="text" id="valor_atletismo">
        <colgroup></colgroup>
        </div>

        
        <button type="submit">enviar</button>
    </form>

    <script src="js/teste1.js"></script>
</body>

</html>