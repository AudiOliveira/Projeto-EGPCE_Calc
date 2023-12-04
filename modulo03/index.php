<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER  -->
<?php
include('layout/header.php');
?>
<!-- FIM DO HEADER  -->

<body>
  <!-- NAV  -->
  <?php
  include('layout/nav.php');
  ?>
  <!-- FIM DA NAV -->

  <!-- menu lateral  -->
  <?php
  include('layout/menu.php');
  ?>
  <!-- FIM do menu lateral   -->

  <!-- CONTEUDO INICIO -->
  <div class="all-conteudo">
    <section class="conteiner-principal">
      <div class="main-content container-fluid">
        <div class="row">
          <!-- Begin row -->
          <div class="col-md-1"></div>
          <div class="col-md-10 col-sm-8 container-fluid">

            <!--  Título Pricipal -->
            <h2 class="Titulo fw-bolder"><span class="iconTitulo"><i class="bi bi-person-workspace"></i>
              </span> Apresentação</h2><br>
            <!--  Título Principal -->

            <div class="apresentacao">

              <div class="img_apresentacao wow animate__zoomIn">
                <img src="imgs/Group 10.png" alt="">
              </div>
              <div>
                <!-- Parágrafo com a biblioteca de animação  -->
                <p class=" texto_apresentacao wow animate__zoomIn" data-wow-delay="0.3s"><strong> Olá,
                    Nome_Completo bem-vindo ao módulo 02 do curso Gestão do tempo.</strong><br> Na primeira
                  parte deste curso, você aprendeu sobre os aspectos mais gerais da Gestão do
                  Tempo e fez algumas atividades práticas para consolidar sua nova visão de vida e planejar ações que
                  as
                  concretize. 
                </p><br>
                <p class="wow fadeIn" data-wow-delay="0.3s">
                Neste ponto, você já compreende que a sua mente trabalha ativamente para
                  realizar aquilo que
                  ela acredita ser real ou estar alinhada com suas emoções.

                  Você também já aprendeu que os objetivos pessoais e profissionais podem estar relacionados
                  a ações diferentes e que devemos decidir sobre onde nosso foco deve se direcionar para que nosso
                  tempo
                  seja corretamente utilizado, uma vez que se trata de um recurso não renovável.
                </p>
              </div>
            </div><br><br><br>

            <!-- <div class="d-flex justify-content-center">
              <div class="li_interativo2"><i class="bi bi-info-circle"></i> Clique na caixa abaixo
                para saber mais</div>
            </div> -->

            <!-- ACCORDION -->
            <div class="container wow animate__fadeInLeftBig" data-wow-delay="0.3s">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button text-light collapsed" type="button" data-bs-toggle="collapse"
                      id="accordion-botao" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwo">
                      <h5>O que você verá agora? <span class="fw-lighter"><br>(Clique aqui
                para saber mais)</span> </h5>
                    </button>
                  </div>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body fw-normal">
                      Nesta segunda parte, eu Kamilla Nascimento lhe conduzirei de
                      forma mais profunda na
                      compreensão da Gestão do Tempo que se relaciona com uma mentalidade realizadora e com os hábitos
                      necessários para transformar seus sonhos em realidade. Como foi mencionado, a longo prazo, essas
                      mudanças
                      poderão ser traduzidas em uma melhor qualidade de vida, melhoria da motivação e até na ampliação
                      da
                      felicidade.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ACCORDION END-->

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- FIM DO CONTEUDO INICIO  -->



  <!-- INÍCIO DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP -->

  <!-- BOTÃO BACK TO TOP COM UMA BARRA DE PROGRESSO -->
  <div id="back_to_top">
    <div id="btn_back">
      <i id="icon_up" class="fa-solid fa-arrow-up"></i>
    </div>
  </div>
  <!-- FIM DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP-->

  <!-- Botões de navegação -->
  <div class="text-center">
    <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
        class="fa-solid fa-chevron-right"></i></a>
  </div>

    <!-- BARRA DE PROGRESSO -->
    <div id="progress-bar"></div>
  <!-- FIM DA BARRA DE PROGRESSO  -->

  <!-- FOOTER  -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- FIM DO FOOTER  -->

</body>

</html>