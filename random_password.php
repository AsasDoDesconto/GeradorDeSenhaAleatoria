<?php
/**
 * Título: Gerador de senhas aleatórias
 * Descrição: Este programa gera senhas aleatórias com base em critérios personalizáveis.
 */

function gerarSenha($comprimento = 8) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $senha = '';

    for ($i = 0; $i < $comprimento; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indice];
    }

    return $senha;
}

$comprimentoSenha = isset($_GET['comprimento']) ? $_GET['comprimento'] : 12;
$novaSenha = gerarSenha($comprimentoSenha);
echo 'Sua nova senha é: ' . $novaSenha;
?>
