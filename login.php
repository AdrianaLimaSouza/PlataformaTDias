<?php

session_start();

require_once './database/config.php';

$mensagem = "";

if(isset($_POST["entrar"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    try{

        $sql = "SELECT * FROM alunos WHERE email = ? AND password = ?";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$email, $password]);

        $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

        if($aluno){

            $_SESSION["id_aluno"] = $aluno["id"];
            $_SESSION["nome_aluno"] = $aluno["nome"];

            header("Location: areaAluno.php");
            exit();

        }else{

            $mensagem = "Email ou password inválidos.";
        }

    }catch(PDOException $e){

        $mensagem = $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">

    <title>Login - TDias Plataforma</title>

    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="./assets/css/alunos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php require_once './includes/header.php'; ?>

<section class="pagina-login">

    <div class="caixa-login">

        <h2>Entrar na Conta</h2>

        <p class="subtitulo">
            Aceda à sua área de aluno
        </p>

        <?php
            if($mensagem != ""){
                echo "<div class='erro'>$mensagem</div>";
            }
        ?>

        <form method="POST">

            <label>Email</label>
            <div class="campo-login">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" name="email" placeholder="Email@exemplo.com" required>
            </div>

            <label>Password</label>
            <div class="campo-login">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="entrar" class="btn-login"><a href="registo.php"></a>Entrar</button>
        </form>

      <div class="link-registo"> Não tem conta? <a href="registo.php">Criar Conta</a>

      </div>

    </div>

</section>

<?php require_once './includes/footer.php'; ?>

</body>
</html>