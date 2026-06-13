<?php

require_once './database/config.php';

$mensagem = "";

if(isset($_POST["registar"])){

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $morada = $_POST["morada"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try{

        $sql = "INSERT INTO alunos
                (nome, telefone, morada, `email`, password)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $nome,
            $telefone,
            $morada,
            $email,
            $password
        ]);

        $mensagem = "Registo efetuado com sucesso!";

    }catch(PDOException $e){

        $mensagem = "Erro ao registar: " . $e->getMessage();

    }
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
    <title>Registar - TDias Plataforma</title>

    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="./assets/css/alunos.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php require_once './includes/header.php'; ?>

<section class="pagina-registo">

    <div class="container">

        <div class="caixa-registo">

            <h2>Criar Conta</h2>

            <?php
                if($mensagem != ""){
                    echo "<p>$mensagem</p>";
                }
            ?>

            <form method="POST">
                <label>Nome Completo</label>
                <input type="text" name="nome" placeholder="Nome Completo" required>

                <label>Telefone</label>
                <input type="text" name="telefone" placeholder="Telefone" required>

                <label>Morada</label>
                <input type="text" name="morada" placeholder="Morada" required>

                <label>Email</label>
                <input type="email" name="email" placeholder="Email@exemplo.com" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit" name="registar">
                    Registar
                </button>

            </form>

        </div>

    </div>

</section>

<?php require_once './includes/footer.php'; ?>

</body>
</html>