<?php

session_start();

require_once './config/config.php';

$mensagem = "";

if(isset($_POST["entrar"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    try{

        $sql = "SELECT * FROM formador WHERE `email` = ? AND password = ?";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$email, $password]);

        $formador = $stmt->fetch(PDO::FETCH_ASSOC);

        if($formador){

            $_SESSION["id_formador"] = $formador["id"];

            $_SESSION["nome_formador"] = $formador["nome"];

            header("Location: areaFormador.php");
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

    <title>Login Formador</title>

    <link rel="stylesheet" href="./assets/css/estilo.css">
    <link rel="stylesheet" href="./assets/css/formador.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php require_once './includes/header.php'; ?>

<section class="pagina-login-formador">

    <div class="caixa-login-formador">

        <h2>Área do Formador</h2>

        <p>
            Entre para gerir os seus cursos
        </p>

        <?php

        if($mensagem != ""){

            echo "<div class='erro-formador'>$mensagem</div>";

        }

        ?>

        <form method="POST">

            <div class="campo-formador">

                <i class="fa-regular fa-envelope"></i>

                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required>

            </div>

            <div class="campo-formador">

                <i class="fa-solid fa-lock"></i>

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required>

            </div>

            <button
                type="submit"
                name="entrar"
                class="btn-login-formador">

                Entrar

            </button>

        </form>

    </div>

</section>

<?php require_once './includes/footer.php'; ?>

</body>
</html>