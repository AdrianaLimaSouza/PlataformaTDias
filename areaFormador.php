<html>

<body>

  <?php require_once  './includes/header.php'; ?>

  <link rel="stylesheet" href="./assets/css/alunos.css">
  <link rel="stylesheet" href="./assets/css/formador.css">

  <!-- Titulo AreaFormador -->
  <section class="banner">

    <div class="container ">

      <div class="gestao-formador">
        <div>
          <h1>Área do Formador</h1>
          <p>Gerir os seus cursos e acompanhar o desempenho</p>
        </div>

        <button class="novo-curso"><a href="#"><i class="fa-solid fa-circle-plus"></i>Criar Novo Curso</a></button>

      </div>

    </div>

  </section>

  <section>
    <div>
      <div class="container dashboard-content-formador">

        <div class="dashboard-card dashboard-card-formador">
          <img class="estatistica-formador-img" src="./assets/img/agenda.png">
          <div class="estatistica-formador">12</div>
          <p>Cursos Publicados</p>
        </div>

        <div class="dashboard-card dashboard-card-formador">
          <img class="estatistica-formador-img" src="./assets/img/alunos.png">
          <div class="estatistica-formador">3.5k</div>
          <p>Total de Alunos</p>
        </div>

        <div class="dashboard-card dashboard-card-formador">
          <img class="estatistica-formador-img" src="./assets/img/visualizar.png">
          <div class="estatistica-formador">45.2k</div>
          <p>Visualizações</p>
        </div>

        <div class="dashboard-card dashboard-card-formador">
          <img class="estatistica-formador-img" src="./assets/img/cifrao.png">
          <div class="estatistica-formador">€12.5k</div>
          <p>Ganhos Este Mês</p>
        </div>
      </div>

    </div>
  </section>
  <section class="meus-cursos">
    <div class="container">
      <div class="box-cursos">
        <h2>Os Meus Cursos</h2>
        <table>
          <thead>
            <tr>
              <th>CURSO</th>
              <th>CATEGORIA</th>
              <th>ALUNOS</th>
              <th>AVALIAÇÃO</th>
              <th>ESTADO</th>
              <th>AÇÕES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="curso-info">
                <img src="./assets/img/web.jpg">
                <div>
                  <h4>Desenvolvimento Web Completo</h4>
                  <p>40 horas</p>
                </div>
              </td>
              <td><span class="categoria-formador">Programação</span></td>
              <td><i class="fa-solid fa-users"></i> 1245</td>
              <td><i class="fa-solid fa-star estrela"></i> 4.8</td>
              <td><span class="estado-formador">Publicado</span></td>
              <td class="acoes-formador">
                <i class="fa-regular fa-pen-to-square editar"></i>
                <i class="fa-regular fa-trash-can apagar"></i>
              </td>
            </tr>
            <tr>
              <td class="curso-info">
                <img src="./assets/img/design.jpg">
                <div>
                  <h4>Design UI/UX Profissional</h4>
                  <p>25 horas</p>
                </div>
              </td>
              <td><span class="categoria-formador">Design</span></td>
              <td><i class="fa-solid fa-users"></i> 892</td>
              <td><i class="fa-solid fa-star estrela"></i> 4.9</td>
              <td><span class="estado-formador">Publicado</span></td>
              <td class="acoes-formador">
                <i class="fa-regular fa-pen-to-square editar"></i>
                <i class="fa-regular fa-trash-can apagar"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>



</body>


<?php require_once  './includes/footer.php'; ?>

</html>