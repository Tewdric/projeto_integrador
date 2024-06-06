const inputRacasId=document.getElementById('raca');
const inputClasseId=document.getElementById('classe');



if(inputRacasId && inputClasseId){

    inputRacasId+inputClasseId.addEventListener('change', () =>{
        const racaId =inputRacasId.value;
        const classeId = inputClasseId.value;
        console.log(racaId)
        console.log(classeId)

       if (racaId == 1 && classeId == 1 || classeId ==1   && racaId ==1){
         //FORÇA
         const inputForcaId=document.getElementById('forca').value =15;

         //CONSTITUIÇÃO
         const inputConstituicaoId=document.getElementById('constituicao').value=16;

         //PERICIAS
         const valorAtletismo = document.getElementById('valor_atletismo').value='+'+5
         

        console.log(inputForcaId)
        console.log(inputConstituicaoId)
        console.log(valorAtletismo)

        
        //console.log(inputForcaRollId)
       }
       console.log(getElementById('atletismo'))

       
    })
}