const inputRacasId=document.getElementById('raca');
const inputClasseId=document.getElementById('classe');
const inputAntecedenteId=document.getElementById('antecedente');



if(inputClasseId && inputAntecedenteId && inputRacasId){

    inputClasseId+inputAntecedenteId+inputRacasId.addEventListener('change', () =>{
        const racaId =inputRacasId.value;
        const classeId = inputClasseId.value;
        const antecedenteId = inputAntecedenteId.value;
        console.log(racaId);
        console.log(classeId);
        console.log(antecedenteId);


       if (racaId == 2 && classeId == 8 && antecedenteId == 22){
         //FORÇA
         const inputForcaId=document.getElementById('forca').value =15;
         const inputForcaRollId=document.getElementById('bolota_forca').value ='+'+2;
         
         //DESTREZA
         const inputDestrezaId=document.getElementById('destreza').value=13;
         const inputDestrezaRollId=document.getElementById('bolota_destreza').value ='+'+1;
 
         //CONSTITUIÇÃO
         const inputConstituicaoId=document.getElementById('constituicao').value=16;
         const inputConstituicaoRollId=document.getElementById('bolota_constituicao').value ='+'+3;
 
         //INTELIGENCIA
         const inputInteligenciaId=document.getElementById('inteligencia').value=12;
         const inputInteligenciaRollId=document.getElementById('bolota_Inteligencia').value ='+'+1;
 
         //SABEDORIA
         const inputSabedoriaciaId=document.getElementById('sabedoria').value=11;
         const inputSabedoriaRollId=document.getElementById('bolota_sabedoria').value ='+'+0;
 
         //CARISMA
         const inputCarismaciaId=document.getElementById('carisma').value=8;
         const inputCarismaRollId=document.getElementById('bolota_carisma').value ='-'+1;

         //DADOS VIDA-------------------------------------------------------------------------------------
         const inputDadosVida = document.getElementById('dados_vida_input').value = 1+'d'+10;
         //PONTOS DE VIDA --------------------------------------------------------------------------------
         const inputPontosDeVida = document.getElementById("vidas_atuais_input").value = 12
         //PONTOS DE DESLOCAMENTO --------------------------------------------------------------------------------
         const inputDeslocamento = document.getElementById('deslocamento_cx').value=7.5
         //BONUS PROEFICIENCIA------------------------------------------------------------------------
         const inputBonusProeficiencia = document.getElementById('bonus_proeficiencia').value='+'+2;
         //SABEDORIA PASSIVA------------------------------------------------------------------------
         const inputSabedoriaPassiva = document.getElementById('bolota_sabedoria_pass').value=10;
         const textSabedoriaPassiva = document.getElementById('sabedoria_pass').value=inputBonusProeficiencia;
         //CLASS ARMOR---------------------------------------------------------------------------------------------
         const intupClassArmor = document.getElementById('pts_class_armor').value=10;
         
         
         //SALVAGUARDAS ------------------------------------------------------------------------
         // FORCA
         const valorRarioForca = document.getElementById('valor_r_forca').value='+'+2;
         const radioBNforca = document.getElementById("radio_bn_forca").value=2;

         // DESTREZA
         const valorRarioDestreza = document.getElementById('valor_r_destreza').value='+'+1;
         const radioBNDestreza= document.getElementById("radio_bn_destreza").value=1;

         // CONSTITUICAO
         const valorRarioConstituicao = document.getElementById('valor_r_constituicao').value='+'+3;
         const radioBNConstituicao= document.getElementById("radio_bn_constituicao").value=3;

         // INTELIGENCIA
         const valorRarioInteligencia= document.getElementById('valor_r_inteligencia').value='+'+1;
         const radioBNInteligencia= document.getElementById("radio_bn_inteligencia").value=1;
         
         // SABEDORIA
         const valorRarioSabedoria= document.getElementById('valor_r_sabedoria').value='+'+0;
         const radioBNSabedoria= document.getElementById("radio_bn_sabedoria").value=0;

         // CARISMA
         const valorRarioCarisma= document.getElementById('valor_r_carisma').value='-'+1;
         const radioBNCarisma= document.getElementById("radio_bn_carisma").value=1;

         //PERICIAS --------------------------------------------------------------------------------------------------------------

         //ACROBACIAS
         const valorRarioAcobracia= document.getElementById('valor_pericia_acrobacia').value='+'+4;
         const radioAcobracia= document.getElementById("acrobacia").value=4;
         
         //ADESTRAR ANIMAIS
         const valorRarioAdestrar= document.getElementById('valor_pericia_adestrar').value='+'+0;
         const radioAadestrar= document.getElementById("adestrar_animais").value=0;
                 
         //ARCANISMO
         const valorRarioArcanismo= document.getElementById('valor_pericia_arcanismo').value='+'+1;
         const radioArcanismo= document.getElementById("arcanismo").value=1;
         
         //ATLETISMO
         const valorRarioAtletismo= document.getElementById('valor_pericia_atletismo').value='+'+4;
         const radioAtletismo= document.getElementById("atletismo").value=4;
         
         //ATUAÇÃO
         const valorRarioAtuacao= document.getElementById('valor_pericia_atuacao').value='-'+1;
         const radioAtuacao= document.getElementById("atuacao").value=1;
          
         //ATUAÇÃO
         const valorRarioEngacanao= document.getElementById('valor_pericia_enganacao').value='-'+1;
         const radioEngacanao= document.getElementById("enganacao").value=1;
         
         //FURTIVIDADE
         const valorRarioFurtividade= document.getElementById('valor_pericia_furtividade').value='+'+1;
         const radioFurtividade= document.getElementById("furtividade").value=1;
         
         //HISTORIA
         const valorRarioHistoria= document.getElementById('valor_pericia_historia').value='+'+3;
         const radioHistoria= document.getElementById("historia").value=3;
                  
         //INTIMIDAÇÃO
         const valorRarioIntimidacao= document.getElementById('valor_pericia_intimidacao').value='-'+1;
         const radioIntimidacao= document.getElementById("intimidacao").value=1;
                           
         //INTUICAO
         const valorRarioIntuicao= document.getElementById('valor_pericia_intuicao').value='+'+0;
         const radioIntuicao= document.getElementById("intuicao").value=0;
                             
         //INVESTIGACAO
         const valorRarioInvestigacao= document.getElementById('valor_pericia_investigacao').value='+'+1;
         const radioInvestigacao= document.getElementById("investigacao").value=1;
                                      
         //MEDICINA
         const valorRarioMedicina= document.getElementById('valor_pericia_medicina').value='+'+0;
         const radioMedicina= document.getElementById("medicina").value=0;
                                       
         //NATUREZA
         const valorRarioNatureza= document.getElementById('valor_pericia_natureza').value='+'+1;
         const radioNatureza= document.getElementById("natureza").value=1;
                                                
         //PERCEPCAO
         const valorRarioPercepecao= document.getElementById('valor_pericia_percepcao').value='+'+0;
         const radioPercepecao= document.getElementById("percepcao").value=0;
                                                         
         //Persuasão: 
         const valorRarioPersuacao= document.getElementById('valor_pericia_persuasao').value='-'+1;
         const radioPersuacao= document.getElementById("persuasao").value=1;
                                                                  
         //Presdigitação: 
         const valorRarioPresdigitacao= document.getElementById('valor_pericia_presdigitacao').value='+'+1;
         const radioPresdigitacao= document.getElementById("presdigitacao").value=1;
                                                                           
         //Religião:  
         const valorRarioReligiao= document.getElementById('valor_pericia_religiao').value='+'+1;
         const radioReligiao= document.getElementById("religiao").value=1;
                                                         
         //Sobrevivência: 
         const valorRarioSobrevivencia= document.getElementById('valor_pericia_sobrevivencia').value='+'+0;
         const radioSobrevivencia= document.getElementById("sobrevivencia").value=0;
        }

       /*else if (racaId == 3 && classeId == 8 || racaId == 3 && classeId == 8){
        //FORÇA
        const inputForcaId=document.getElementById('forca').value =17;
        const inputForcaRollId=document.getElementById('bolota_forca').value ='+'+3;
        
        //DESTREZA
        const inputDestrezaId=document.getElementById('destreza').value=13;
        const inputDestrezaRollId=document.getElementById('bolota_destreza').value ='+'+1;

        //CONSTITUIÇÃO
        const inputConstituicaoId=document.getElementById('constituicao').value=16;
        const inputConstituicaoRollId=document.getElementById('bolota_constituicao').value ='+'+3;

        //INTELIGENCIA
        const inputInteligenciaId=document.getElementById('inteligencia').value=12;
        const inputInteligenciaRollId=document.getElementById('bolota_Inteligencia').value ='+'+1;

        //SABEDORIA
        const inputSabedoriaciaId=document.getElementById('sabedoria').value=10;
        const inputSabedoriaRollId=document.getElementById('bolota_sabedoria').value ='+'+0;

        //CARISMA
        const inputCarismaciaId=document.getElementById('carisma').value=8;
        const inputCarismaRollId=document.getElementById('bolota_carisma').value ='-'+1;
        
        console.log(inputForcaId)
        console.log(inputForcaRollId)
       }
    */
       
    })


    

    function mensagem(){
       alert('Ficha Cadastrada!')
        
    }
    
   
}