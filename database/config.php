<?php

    $host = "localhost";
    $user = "root";
    $senha = "";
    $database = "db_ptdias";


 // criação da conexão
    try {
         $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $senha);

        // Configurar PDO para lançar exceções em caso de erro
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }   catch (PDOException $e) {
            die("Erro na ligação: " . $e->getMessage());
    }
?>