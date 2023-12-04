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

    <!-- comecar assim  -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!-- COMEÇO REFERÊNCIAS  -->

                        <h2 class="Titulo wow fadeIn" data-wow-delay="0.3s"><span class="iconTitulo"><i
                                    class="bi bi-book-half"></i></span>REFERÊNCIAS
                        </h2>

                        <br>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>GONÇALVES, Cristiane. <strong>Broffice.org:</strong> Calc Avançado Com Introdução às Macros. Rio de Janeiro: Ciência Moderna, 2009.
                        </p>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>JROCHA, Tarcízio da. <strong>OpenOffice.Org 2.0:</strong> Calc Completo e Definitivo. Rio de Janeiro: Ciência Moderna, 2006.
                        </p>

                        <!-- FIM DAS REFERENCIAS  -->
                        <br>

                        <div class="border border-success m-4 p-4 text-rounded rounded rounded-lg wow animate__fadeInLeftBig"
                            data-wow-delay="0.3s">
                            <h5>Parabéns! <strong>Nome_Completo</strong> agora você já pode fazer a avaliação do curso
                                <strong>Calc – Intermediário e Avançado</strong> Módulo 02 abaixo, Boa Sorte e até o próximo Modulo!
                            </h5>
                        </div>
                        <br>

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
        <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=" class="btn btn-outline-success" role="button"
            aria-pressed="true">Realizar atividade avaliativa <i class="fa-solid fa-chevron-right"></i></a>
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