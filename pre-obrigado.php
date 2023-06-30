<?php

$prefixoUrl = 'https://quizenem.com/extras/o-novo-mercado';

// Página pra alguma validação necessária ou tratamento de dados
// Nesse caso, apenas vai checar se os dados enviados são válidos para prosseguir ou voltar atrás

if(!isset($_POST)){
    header("Location: {$prefixoUrl}");
}

header("Location: {$prefixoUrl}/obrigado");