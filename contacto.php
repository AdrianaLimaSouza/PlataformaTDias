<html>

<body>

  
    <?php require_once  './includes/header.php'; ?>
    <link rel="stylesheet" href="./assets/css/alunos.css">
     <link rel="stylesheet" href="./assets/css/cursos.css">
    <link rel="stylesheet" href="./assets/css/contacto.css">

    <!-- Contacto -->
    <section class="banner">
        <div class="container">
            <h1>Entre em Contato</h1>
            <p>
                Estamos aqui para ajudar. Envie-nos a sua mensagem.
            </p>
        </div>
    </section>
    
    <section class="pagina-contacto">

      <div class="container contacto-grid">
            <!-- FORMULÁRIO -->
          <div class="contacto-form">
              <h2>Envie-nos uma Mensagem</h2>
              <div class="linha-dupla">
                  <div class="campo">
                      <label>Nome Completo</label>
                      <input type="text" placeholder="O seu nome">
                  </div>
                  <div class="campo">
                      <label>Email</label>
                      <input type="email" placeholder="tdias.email@exemplo.com">
                  </div>
              </div>
              <div class="campo">
                  <label>Assunto</label>
                  <select>
                      <option>Selecione um assunto</option>
                      <option>Informações sobre o curso</option>
                      <option>Suporte técnico</option>
                      <option>Reclamação</option>
                      <option>Outro</option>
                  </select>
              </div>
              <div class="campo">
                  <label>Mensagem</label>
                  <textarea placeholder="Escreva a sua mensagem aqui..."></textarea>
              </div>
              <button class="btn-enviar">
                  <i class="fa-regular fa-paper-plane"></i>
                  Enviar Mensagem
              </button>
          </div>

          <!-- LADO DIREITO -->
          <div>
              <!-- INFO -->
              <div class="box-info">
                  <h2>Informações de Contacto</h2>
                  <div class="item-info">
                      <i class="fa-regular fa-envelope azul"></i>
                      <div>
                          <h4>Email</h4>
                          <p>suporte@tdiasplataforma.pt</p>
                      </div>
                  </div>
                  <div class="item-info">
                      <i class="fa-solid fa-phone verde"></i>
                      <div>
                          <h4>Telefone</h4>
                          <p>+351 21 000 0000</p>
                      </div>
                  </div>
                  <div class="item-info">
                      <i class="fa-solid fa-location-dot roxo"></i>
                      <div>
                          <h4>Morada</h4>
                          <p>Av. da Liberdade, 123</p>
                          <p>1250-096 Lisboa</p>
                          <p>Portugal</p>
                      </div>
                  </div>
                  <div class="item-info">
                      <i class="fa-regular fa-comment laranja"></i>
                      <div>
                          <h4>Chat ao Vivo</h4>
                          <p>Seg-Sex: 9h-18h</p>
                      </div>
                  </div>
              </div>
              <!-- HORÁRIO -->
              <div class="motivacao-box">
                  <h2>Seu Futuro está Aqui </h2>
                  <div class="linha-motivacao">
                      <h3>A melhor forma de aprender</h3>
                  </div>
                  <p>Aguardamos por ti. TDiasPlataforma</p>
              </div>
          </div>
      </div>
</section>
  
</body>

<?php require_once  './includes/footer.php'; ?>

</html>