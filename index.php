
<html>

<body>

  <?php require_once  './includes/header.php'; ?>

  <!-- BANNER -->
  <section class="banner">
    <div class="container banner-content">
      <h1>Aprenda Online com os cursos do Formador Tiago Dias</h1>
      <p>Desenvolva novas competências com a nossa plataforma</p>
      <div class="botoes">
        <button class="btn">Explorar Cursos<i class="fa-solid fa-arrow-right-long"></i></button>
        <button>Começar</button>
      </div>
    </div>
  </section>

  <section class="dashboard-index">
    <div>
      <div class="container dashboard-content">

        <div class="dashboard-card">
          <img src="./assets/img/agenda.png">
          <h3>500+</h3>
          <p>Cursos Online</p>
        </div>       
        
        <div class="dashboard-card">
          <img src="./assets/img/alunos.png">
          <div></div>
          <h3>50k+</h3>
          <p>Alunos Ativos</p>
        </div>       
        
        <div class="dashboard-card">
          <img src="./assets/img/formador.png">
          <h3>200+</h3>
          <p>Formadores</p>
        </div>       
        
        <div class="dashboard-card">
          <img src="./assets/img/graph.png">        
          <h3>95%</h3>
          <p>Taxa de Sucesso</p>
        </div>       
      </div>
 
    </div>
  </section>

  <!-- CURSOS -->
  <section class="destaque-cursos">

    <div class="titulo">
      <h3>Cursos em Destaque</h3>
      <p>Descubra os cursos mais escolhidos da nossa Plataforma</p>
    </div>
     
    <div class="cursos">
       
       <div class="card">
         <img src="https://via.placeholder.com/300">
         <h3>Desenvolvimento Web</h3>
         <p>Aprenda HTML, CSS e JavaScript</p>
         <span>€60.00</span>
        </div>
        
        <div class="card">
          <img src="https://via.placeholder.com/300">
          <h3>Design UI/UX</h3>
          <p>Design moderno e profissional</p>
          <span>€60.00</span>
        </div>
        
        <div class="card">
          <img src="https://via.placeholder.com/300">
          <h3>Marketing Digital</h3>
          <p>Aprenda estratégias de marketing</p>
          <span>€80.00</span>
        </div>
    </div>
       
      
    <button id="btn-destaque"><a href="cursos.php"> Ver Todos os Cursos<i class="fa-solid fa-arrow-right-long"></i></a></button>
     
  </section>

  <!-- CTA -->
  <section class="destaque-cta">

    <div class="cta container">
      <h2>Pronto para começar?</h2>
      <p>Junte-se aos alunos que já transformaram as suas carreiras com os nossos cursos</p>
      <div class="btn-criarConta">
        <button class="btn">Criar Conta<i class="fa-solid fa-arrow-right-long"></i></button>
      </div>
    </div>
  </section>

</body>
<?php require_once  './includes/footer.php'; ?>

</html>