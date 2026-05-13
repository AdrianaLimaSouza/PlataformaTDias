<!DOCTYPE html>
<html lang="pt">


<body>

    <?php require_once  './includes/header.php'; ?>

    <!-- TÍTULO -->
    <section class="topo-cursos">

        <h1>Todos os Cursos</h1>
        <p>Encontre o curso perfeito para os seus objetivos</p>
    </section>

    <!-- PESQUISA -->
    <section class="pesquisa">

        <input type="text" placeholder="Pesquisar cursos...">
    </section>

    <!-- FILTROS -->
    <section class="filtros">

        <select>
            <option>Categoria: Todas</option>
            <option>Programação</option>
            <option>Design</option>
            <option>Marketing</option>
            <option>Fotografia</option>
            <option>Negócios</option>
        </select>

        <select>
            <option>Nível: Todos</option>
            <option>Iniciante</option>
            <option>Intermédio</option>
            <option>Avançado</option>
        </select>

    </section>

    <!-- CURSOS -->
    <section class="lista-cursos">

        <!-- CURSO 1 -->
        <div class="card-curso">

            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085">

            <div class="conteudo-curso">

                <div class="top-card">
                    <span class="categoria">Programação</span>
                    <span class="nivel">Iniciante</span>
                </div>

                <h3>Desenvolvimento Web Completo</h3>

                <p>
                    Aprenda HTML, CSS, JavaScript, React e Node.js
                </p>

                <p class="autor">
                    Por João Silva • 40 horas
                </p>

                <div class="rodape-card">

                    <span class="avaliacao">⭐ 4.8</span>

                    <span class="preco">€199.99</span>

                </div>

            </div>

        </div>

        <!-- CURSO 2 -->
        <div class="card-curso">

            <img src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6">

            <div class="conteudo-curso">

                <div class="top-card">
                    <span class="categoria">Design</span>
                    <span class="nivel">Intermédio</span>
                </div>

                <h3>Design UI/UX Profissional</h3>

                <p>
                    Domine os princípios do design moderno
                </p>

                <p class="autor">
                    Por Maria Santos • 25 horas
                </p>

                <div class="rodape-card">

                    <span class="avaliacao">⭐ 4.9</span>

                    <span class="preco">€149.99</span>

                </div>

            </div>

        </div>

        <!-- CURSO 3 -->
        <div class="card-curso">

            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f">

            <div class="conteudo-curso">

                <div class="top-card">
                    <span class="categoria">Marketing</span>
                    <span class="nivel">Intermédio</span>
                </div>

                <h3>Marketing Digital Avançado</h3>

                <p>
                    Estratégias modernas de marketing digital
                </p>

                <p class="autor">
                    Por Pedro Costa • 30 horas
                </p>

                <div class="rodape-card">

                    <span class="avaliacao">⭐ 4.7</span>

                    <span class="preco">€179.99</span>

                </div>

            </div>

        </div>

        <!-- CURSO 4 -->
        <div class="card-curso">

            <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4">

            <div class="conteudo-curso">

                <div class="top-card">
                    <span class="categoria">Programação</span>
                    <span class="nivel">Intermédio</span>
                </div>

                <h3>Python para Data Science</h3>

                <p>
                    Machine learning e análise de dados
                </p>

                <p class="autor">
                    Por Ana Rodrigues • 35 horas
                </p>

                <div class="rodape-card">

                    <span class="avaliacao">⭐ 4.9</span>

                    <span class="preco">€189.99</span>

                </div>

            </div>

        </div>

        <!-- CURSO 5 -->
        <div class="card-curso">

            <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32">

            <div class="conteudo-curso">

                <div class="top-card">
                    <span class="categoria">Fotografia</span>
                    <span class="nivel">Iniciante</span>
                </div>

                <h3>Fotografia Digital</h3>

                <p>
                    Do básico ao avançado em fotografia
                </p>

                <p class="autor">
                    Por Carlos Mendes • 20 horas
                </p>

                <div class="rodape-card">

                    <span class="avaliacao">⭐ 4.8</span>

                    <span class="preco">€129.99</span>

                </div>

            </div>

        </div>

        <!-- CURSO 6 -->
        <div class="card-curso">

            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71">

            <div class="conteudo-curso">

                <div class="top-card">
                    <span class="categoria">Negócios</span>
                    <span class="nivel">Avançado</span>
                </div>

                <h3>Excel Avançado para Negócios</h3>

                <p>
                    Fórmulas, dashboards e análise de dados
                </p>

                <p class="autor">
                    Por Alves • 18 horas
                </p>

                <div class="rodape-card">

                    <span class="avaliacao">⭐ 4.7</span>

                    <span class="preco">€119.99</span>

                </div>

            </div>

        </div>

    </section>

</body>
</html>