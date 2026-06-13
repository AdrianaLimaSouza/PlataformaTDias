<?php

session_start();

if(!isset($_SESSION["id_aluno"])){

    header("Location: login.php");
    exit();

}
?>


<html>

<body>

    <?php require_once  './includes/header.php'; ?>
    <link rel="stylesheet" href="./assets/css/alunos.css">
    <link rel="stylesheet" href="./assets/css/cursos.css">

    <!-- Titulo AreaAlunos -->
    <section class="banner">

        <div class="container">

            <h1>Área do Aluno</h1>

            <p>
                Bem-vindo de volta!  <?php echo $_SESSION["nome_aluno"]; ?>, continue a sua aprendizagem
            </p>

        </div>

    </section>

    <section>
        <div>
            <div class="container dashboard-content-alunos">

                <div class="dashboard-card dashboard-card-alunos">
                    <img class="estatistica-alunos-img" src="./assets/img/agenda.png">
                    <div class="estatistica-alunos">3</div>
                    <p>Cursos Ativos</p>
                </div>

                <div class="dashboard-card dashboard-card-alunos">
                    <img class="estatistica-alunos-img" src="./assets/img/circleCheck.png">
                    <div class="estatistica-alunos">12</div>
                    <p>Cursos Concluídos</p>
                </div>

                <div class="dashboard-card dashboard-card-alunos">
                    <img class="estatistica-alunos-img" src="./assets/img/clock.png">
                    <div class="estatistica-alunos">145</div>
                    <p>Horas de Estudo</p>
                </div>

                <div class="dashboard-card dashboard-card-alunos">
                    <img class="estatistica-alunos-img" src="./assets/img/certificado.png">
                    <div class="estatistica-alunos">8</div>
                    <p>Certificados</p>
                </div>
            </div>

        </div>

        <div class="container">

            <div class="convida-alunos">
                <div class="informe-alunos">Continue a Aprender</div>
                <div id="ver-todos"><a href="cursos.php">Ver Todos</a></div>
            </div>

            <div class="container cursos">

                <!-- CARD -->
                <div class="card-alunos">

                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085">

                    <div class="info-card-alunos">

                        <h3>Desenvolvimento Web</h3>

                        <div class="info-formador-alunos">Tiago Dias</div>

                        <div class="cursos-card-alunos">

                            <a href="cursos.php" class="btn-curso-alunos">
                                Continuar Curso
                            </a>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div class="card-alunos">

                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f">

                    <div class="info-card-alunos">
                       
                        <h3>Design UI/UX</h3>

                        <div class="info-formador-alunos">Tiago Dias</div>

                        <div class="cursos-card-alunos">

                            <a href="cursos.php" class="btn-curso-alunos">
                                Continuar Curso
                            </a>
                        </div>
                    </div>

                </div>

                <!-- CARD -->
                <div class="card-alunos">

                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978">

                    <div class="info-card-alunos">

                        <h3>Marketing Digital</h3>

                        <div class="info-formador-alunos">Tiago Dias</div>

                        <div class="cursos-card-alunos">

                            <a href="cursos.php" class="btn-curso-alunos">
                                Continuar Curso
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- RECOMENDAÇOES -->
        <div class="container">

            <div class="informe-alunos">Recomendados para Você </div>
            <div class="container cursos">
                
                <div class="card-alunos">

                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3">

                    <div class="info-card-alunos">

                        <div class="destaque-categoria">
                            <div class="categoria">Base de Dados</div>
                            <div class="nivel">Iniciante</div>
                        </div>

                        <h3>MySQL Completo</h3>

                        <p>
                            Aprenda modelação e consultas SQL.
                        </p>

                        <div class="info-formador">Por Tiago Dias - 50 horas</div>

                        <div class="cursos-card-alunos">

                            <span class="preco">
                                €90.00
                            </span>

                            <a href="#" class="btn-curso">
                                Ver Curso
                            </a>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div class="card-alunos">

                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">

                    <div class="info-card-alunos">

                        <div class="destaque-categoria">
                            <div class="categoria">Negócios</div>
                            <div class="nivel">Iniciante</div>
                        </div>

                        <h3>Empreendedorismo</h3>

                        <p>
                            Crie e desenvolva o seu próprio negócio.
                        </p>
                        <div class="info-formador">Por Tiago Dias - 40 horas</div>

                        <div class="cursos-card-alunos">

                            <span class="preco">
                                €55.00
                            </span>

                            <a href="#" class="btn-curso">
                                Ver Curso
                            </a>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div class="card-alunos">

                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4">

                    <div class="info-card-alunos">

                        <div class="destaque-categoria">
                            <div class="categoria">Programação</div>
                            <div class="nivel">Iniciante</div>
                        </div>

                        <h3>PHP para Iniciantes</h3>

                        <p>
                            Desenvolva websites dinâmicos com PHP.
                        </p>
                        <div class="info-formador">Por Tiago Dias - 50 horas</div>

                        <div class="cursos-card-alunos">

                            <span class="preco">
                                €70.00
                            </span>

                            <a href="#" class="btn-curso">
                                Ver Curso
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</body>

<?php require_once  './includes/footer.php'; ?>

</html>