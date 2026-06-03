<?php
    require_once("./includes/constantesDB.php");

 // criação da conexão
    try {
         $conn = new PDO(HOST, USER, SENHA, DATABASE);

        // Configurar PDO para lançar exceções em caso de erro
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }   catch (PDOException $e) {
            die("Erro na ligação: " . $e->getMessage());
    }
?>