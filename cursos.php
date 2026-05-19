<!DOCTYPE html>
<html lang="pt">


<body>

    <?php require_once  './includes/header.php'; ?>
    <link rel="stylesheet" href="./assets/css/cursos.css">

    <!-- HERO CURSOS -->
<section class="banner-cursos">

    <div class="container">

        <h1>Todos os Cursos</h1>

        <p>
            Explore os nossos cursos online e desenvolva novas competências
        </p>

    </div>

</section>

<!-- LISTA CURSOS -->
<section class="pagina-cursos">
         <!-- PESQUISA -->
    <div class="pesquisa-cursos">

        <div class="container ">

            <div class="input-pesquisa">
                <i class="fa-solid fa-magnifying-glass"></i>

                <input type="text" placeholder="Pesquisar cursos...">
            </div>
        </div>
        <div class="container pesquisa-area">
            <div class="filter"><i class="fa-solid fa-filter"></i> Filtros:</div>
            <select>
                <option>Categorias:Todas </option>
                <option>Programação</option>
                <option>Design</option>
                <option>Marketing</option>
            </select>

            <select>
                <option>Nível:Todos</option>
                <option>Iniciante</option>
                <option>Intermediário</option>
                <option>Avançado</option>
            </select>

        </div>

    </div>

    <div class="container">
        <div id="contagem-cursos">6 cursos encontrados</div>

        <div class="container cursos">

            <!-- CARD -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085">

                <div class="info-card">

                    <div class="destaque-categoria">
                        <div class="categoria">Programação</div>
                        <div class="categoria">Iniciante</div>

                    </div>

                    <h3>Desenvolvimento Web</h3>

                    <p>
                        Aprenda HTML, CSS e JavaScript do zero.
                    </p>

                    <div class="cursos-card">

                        <span class="preco">
                            €60.00
                        </span>

                        <a href="#" class="btn-curso">
                            Ver Curso
                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f">

                <div class="info-card">

                    <span class="categoria">
                        Design
                    </span>

                    <h3>Design UI/UX</h3>

                    <p>
                        Crie interfaces modernas e profissionais.
                    </p>

                    <div class="cursos-card">

                        <span class="preco">
                            €75.00
                        </span>

                        <a href="#" class="btn-curso">
                            Ver Curso
                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978">

                <div class="info-card">

                    <span class="categoria">
                        Marketing
                    </span>

                    <h3>Marketing Digital</h3>

                    <p>
                        Aprenda estratégias modernas de marketing.
                    </p>

                    <div class="cursos-card">

                        <span class="preco">
                            €80.00
                        </span>

                        <a href="#" class="btn-curso">
                            Ver Curso
                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD -->
            <div class="card">

                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3">

                <div class="info-card">

                    <span class="categoria">
                        Base de Dados
                    </span>

                    <h3>MySQL Completo</h3>

                    <p>
                        Aprenda modelação e consultas SQL.
                    </p>

                    <div class="cursos-card">

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
            <div class="card">

                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">

                <div class="info-card">

                    <span class="categoria">
                        Negócios
                    </span>

                    <h3>Empreendedorismo</h3>

                    <p>
                        Crie e desenvolva o seu próprio negócio.
                    </p>

                    <div class="cursos-card">

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
            <div class="card">

                <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4">

                <div class="info-card">

                    <span class="categoria">
                        Programação
                    </span>

                    <h3>PHP para Iniciantes</h3>

                    <p>
                        Desenvolva websites dinâmicos com PHP.
                    </p>

                    <div class="cursos-card">

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

<?php require_once './includes/footer.php'; ?>

</body>

</html>