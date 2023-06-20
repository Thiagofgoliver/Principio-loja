<?php
$nomeServidor = "at22_thiago.mysql.dbaas.com.br";
$userBanco = "at22_thiago";
$senhaBanco = "TIatsenac2022#";
$nomeBanco = "at22_thiago";

try {
    $conn = mysqli_connect(
        $nomeServidor,
        $userBanco,
        $senhaBanco,
        $nomeBanco
    );
} catch (Exception $e) {
    echo "Erro ao conectar o BD.";
    exit();
}
