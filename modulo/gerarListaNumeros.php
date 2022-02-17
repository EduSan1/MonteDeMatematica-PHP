<?php
        /*
        Objetivo: arquivo responsavel por gerar um intervalo de números para um select 
        Autor: Eduardo S. Nascimento
        Data: 17/02/2022
        Versão: 1.0
    
    */

    // função que possui o objetivo de criar uma lista de números para um select
    function gerarLista($numero1, $numero2)
    {
        $acumuladora = null;
        for ($i = (int)$numero1; $i <= $numero2; $i++) {
            $acumuladora .= ' <option value="' . $i . '">' . $i .  '</option> ';
          }
          return $acumuladora;
    }
    
?>