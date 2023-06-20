<?php
$nomeServidor = "localhost";
$userBanco = "root";
$senhaBanco = "";
$nomeBanco = "northwind";

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
