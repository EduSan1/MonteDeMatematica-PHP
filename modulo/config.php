<?php

    /*
        Objetivo: arquivo responsavel por reunir e padronizar todas as variaveis e constantes que serão utilizadas
        Autor: Eduardo S. Nascimento
        Data: 17/02/2022
        Versão: 1.1 - acrésscimo de mensagens de erros
    
    */

    // constantes do projeto

    define('ERRO_MSG_CAIXA_VAZIA','<script> alert("Preencha todos os campos");</script>'); 
    const ERRO_MSG_OPERACAO_CALCULO = '<script> alert("Selecione uma operação");</script>';
    const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script> alert("Para ocorre o calculo, você deve inserir apenas numeros");</script>';
    const ERRO_MSG_DIVISAO_ZERO = '<script> alert("Nao pode dividir por zero");</script>';
    const ERRO_MSG_MULTIPLICACAO_ZERO = '<script> alert("Todo número multiplicado por zero é zero mula!");</script>';
    const ERRO_MSG_NUMERO_INICIAL_MENOR = '<script> alert("O número Inicial deve ser menor que o número final");</script>';
    const ERRO_MSG_SELECIONE = '<script> alert("Selecione uma opção");</script>';
    const ERRO_MSG_NUMERO_IGUAL ='<script> alert("Não insira números iguais");</script>';
?>