<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layout/header.php');
?>

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
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s"><span class="icon"><i
                                    class="bi bi-person-workspace"></i>
                            </span> Apresentação</h2><br>

                        <div class="apresentacao">
                            <div>
                                <!-- Parágrafo com a biblioteca de animação  -->
                            <div class="texto_apresentacao wow fadeIn animate__zoomIn">
                                <p class="wow fadeIn" id="" data-wow-delay="0.3s">
                                <strong>
                                Olá, Nome_Completo bem-vindo ao módulo 02 do curso Calc – Intermediário e Avançado.</strong><br>
                                No curso de Calc para Iniciantes, você teve uma visão de seus principais comandos, 
                                guias, opções, formatações e funções iniciais. Agora, conhecerá novos elementos e mais funções disponíveis.
                                Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá utilizar qualquer outra versão.</p>
                                <!--  Fim do Parágrafo com a biblioteca de animação -->
                            </div><br><br><br>
                            
                            <!--  Título Objetivo -->
                            <h2 id="objetivos" class="wow fadeIn" data-wow-delay="0.3s"> Objetivo</h2><br>

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success" style="color: #44833d;"></i> Proporcionar ao aluno uma
                         visão mais ampla acerca da utilização de mais alguns recursos do LibreOffice Calc, por meio de exemplos práticos, 
                         que possam ser uteis em seu cotidiano pessoal e profissional.
                            <!--  Fim do Parágrafo com a biblioteca de animação -->
                        </p>
                        </div>
                            <!--  Figura da página -->
                            <div class="img_apresentacao wow animate__zoomIn" data-wow-delay="0.3s">
                                <img src="imgs/Group 14.png" alt="">
                                <p class="FonteFigura FonteMenor text-secondary" id="text-freepik">
                                    <strong>Fonte: </strong>
                                    <a href="https://br.freepik.com/vetores-gratis/ilustracao-do-conceito-orientado-a-dados-de-gradiente_29765895.htm#query=vetor%20pessoa%20com%20planilha&position=49&from_view=search&track=ais&uuid=e10bed6e-0c4e-4501-8706-7592d4858886"
                                        target="_blank" rel="noopener noreferrer"> <strong> Imagem retirada do
                                            Freepik</strong></a>
                                </p>
                            </div>
                        </div><br>

                        
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        
                        <!-- <div class="d-flex justify-content-center">
                            <div class="li_interativo2"><i class="bi bi-info-circle"></i> Clique na caixa abaixo
                                para saber mais</div>
                        </div> -->

                        <!-- ACCORDION -->
                        <div class="container wow animate__fadeInLeftBig" data-wow-delay="0.3s">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item" id="accordion-item-apresentacao">
                            <div class="accordion-header">
                                <button class="accordion-button text-light collapsed" type="button" data-bs-toggle="collapse"
                                id="accordion-botao-apresentacao" data-bs-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <h5>O que você verá agora? <span class="fw-lighter"><br>(Clique aqui
                                    para saber mais)</span></h5>
                                </button>
                            </div>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body01">
                                Nesta aula, abordaremos conceitos sobre validação de dados e segurança da informação.
Esperamos que você se dedique ao curso e tenha um bom aproveitamento!
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
        <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"> Próximo
            <i class="fa-solid fa-chevron-right"></i></a>

        <!-- BARRA DE PROGRESSO -->
        <div id="progress-bar"></div>
        <!-- FIM DA BARRA DE PROGRESSO  -->

        <?php
        include('layout/footer.php');
        ?>



</body>

</html>