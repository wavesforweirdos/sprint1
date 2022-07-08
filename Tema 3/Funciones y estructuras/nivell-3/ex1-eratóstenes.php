<?php
$numero = (int)mt_rand(2, 200); 
    //(int) me aseguro la conversión a entero de cualquier número introducido
$lista_numeros = 0;


function erastostenes($num)
{
for ($i=2; $i <= $num ; $i++) { 

    if ($num<0) {
    # code...
}}

}

echo $numero;

/*
 function esPrimo() {
            let numeroIndicado = parseInt(document.getElementById('numero').value);
            let vPrimo; 
            let msj ='';

            if (numeroIndicado == 0 || numeroIndicado == 1) {
                msj = 'El número ' + numeroIndicado + ' no se clasifica.';
            } else if (numeroIndicado < 0) {
                msj = 'Los números negativos no se clasifican.';
            } else if (numeroIndicado == 2) {
                msj = 'El número ' + numeroIndicado + ' es primo.'
            } else if (numeroIndicado>2){
                for (let i = 2; i < numeroIndicado; i++) {
                    console.log('El ' + numeroIndicado + ' % ' + i + ' = ' + numeroIndicado % i)
                    if (numeroIndicado % i == 0) {
                        msj = 'El número ' + numeroIndicado + ' es compuesto.'
                    } else {
                        msj = 'El número ' + numeroIndicado + ' es primo.';
                    }
                }
            } else {
                msj = 'Indica un número.'
            }
            
            document.getElementById('parrafo2').innerHTML = msj;
        }
        */