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

                        <!--  Título Calc04 -->
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">
                            01 - Pastas de Trabalho</h2><br>

                        <!--  Objetivo -->
                        <p class="wow fadeIn"><strong>Objetivo:</strong> Desenvolver habilidades para criação e utilização de pastas de trabalho modelo.</p>
                        <br>

                        <!--  Título Calc01 -->
                        <h2 class="ti wow fadeIn">Modelo de pasta de trabalho no Calc</h2><br>
                        <div class="passos">
                          <div>

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
            <section class="container wow fadeIn" data-wow-delay="0.3s">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloSaibaMais">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="saibamais">
                    <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75"> Passe o mouse
                          acima
                        </strong></strong></p>
                    <p class="txt-caixasecundaria">Você já imaginou como seria digitar valores em uma planilha 
                        sem ter que ficar se preocupando com a utilização de fórmulas ou cálculos?</p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Com certeza, você já pegou uma planilha antiga e saiu 
                            apagando o conteúdo de linhas ou colunas para reutilizar a estrutura sem ter que criar uma nova, 
                            apenas salvando a pasta de trabalho com outro nome. Esse, entretanto, é um modo arriscado de trabalhar, 
                            porque, sem perceber, você pode apagar fórmulas importantes e inutilizar a planilha.<br><br>
                            Todo esse procedimento pode ser facilitado, com a criação de uma pasta de trabalho modelo e o acesso a esta, 
                            sempre que necessário.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        </div>

                        <!--  Figura da página -->
                        <div class="img_apresentacao wow animate__slideInRight" data-wow-delay="0.3s">
                                <img src="imgs/Group 16.png" alt="">
                                <p class="FonteFigura FonteMenor text-secondary" id="text-freepik">
                                    <strong>Fonte: </strong>
                                    <a href=""
                                         rel="noopener noreferrer"> <strong> Imagem retirada do
                                            Freepik</strong></a>
                                </p>
                            </div>
                        </div>
                        <br>

                        <!--  Título Calc02 -->
                        <h2 class="ti wow fadeIn">Criação de uma pasta de trabalho modelo</h2><br>

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Antes de tudo, você deve criar uma pasta de trabalho, 
                            formatando células, elaborando fórmulas, utilizando filtros, proteção etc., ou seja, deve modelar a(s) 
                            planilha(s).<br><br> Vamos criar uma planilha com o nome <strong>"Controle_comissão"</strong> e formatá-la conforme abaixo:
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- IMAGEM NO SITE  -->

            <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
            Tabela de comissâo</p>
              <div class="zoom">
                <a href="imgs01/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                  <img src="imgs01/Figura01.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura01.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s">Agora, aplicaremos as seguintes formatações:<br><br>

            Na célula F3, digite a fórmula =D3*E3 e copie para as demais, utilizando a alça de complementação;<br><br>

            Nas células de E3 a E25, utilize o formato de célula do tipo Moeda;<br><br>

            Nas células de F3 a F25, utilize o formato de célula do tipo Moeda;<br><br>

            Nas células de G3 a G25, utilize o formato de célula do tipo porcentagem;<br><br>

            Na célula H3, digite a fórmula =F3*G3 e copie para as demais, utilizando a alça de complementação;<br><br>

            Nas células de H3 a H25, utilize o formato de célula do tipo Moeda.<br><br>

            Seu novo modelo de planilha ficará assim:
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br>

            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-02 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
            Tabela de comissâo formatada</p>
              <div class="zoom">
                <a href="imgs01/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem2">
                  <img src="imgs01/Figura02.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-2">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem2" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura02.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            <br><br>

                <div class="passos">
                    <!-- Parágrafo com a biblioteca de animação  -->
                    <p class="wow fadeIn" id="" data-wow-delay="0.3s">
                    <strong>
                    Na caixa de diálogo seguinte, dê um nome para o seu 
                    modelo e escolha uma das categorias para armazená-lo.</strong></p>
                    <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>
                    
                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 3:</strong>
                Modelo Tabela de Comissão Formatada</p>
              <div class="zoom">
                <a href="imgs01/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem3">
                  <img src="imgs01/Figura03.png" height="auto" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem3" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura03.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
                  </div>             
                </div>
                <br><br>

                <div class="passos">
                    <!-- Parágrafo com a biblioteca de animação  -->
                    <p class="wow fadeIn" id="" data-wow-delay="0.3s">
                    <strong>
                    Após a definição do modelo, basta clicar no menu “Arquivo” → “Modelos” → “Salvar como modelo”.
                    Nesse caso, chamamos o modelo de “Tabela de Comissão” e escolhemos como categoria modelo a “Meus modelos”.
                    Para finalizar o processo, basta clicar em “salvar”.</strong></p>
                    <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>

              <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 4:</strong>
                Salvar Como</p>
              <div class="zoom">
                <a href="imgs01/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem4">
                  <img src="imgs01/Figura04.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem4" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura04.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
                  </div> 
                        </div>
                        <br>

            <!--  Título Calc03 -->
            <h2 class="ti wow fadeIn">Abertura de Uma Pasta de Trabalho Modelo</h2><br>

                <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">
            Sempre que você precisar da planilha, basta abrir a pasta de trabalho modelo, 
            que ela lhe será apresentada sem nenhum outro questionamento. Mas como abri-la?<br><br>
            Clique no menu “Arquivo” → “Modelos” → “Gerenciar modelos”.</p>
                <!--  Fim do Parágrafo com a biblioteca de animação -->

           <!-- IMAGEM NO SITE  -->
            <div class="text-center img-02 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 5:</strong>
            Abrir modelo</p>
              <div class="zoom">
                <a href="imgs01/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem5">
                  <img src="imgs01/Figura05.png" height="500px" width="800px" alt="Imagem que remete a organização" id="img-5">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem5" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura05.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

                <!-- Parágrafo com a biblioteca de animação  -->                
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">
            <strong>
            Uma outra opção é apertar as teclas CTRL + Shift + N.<br><br>
            Na caixa de diálogo seguinte, procure por sua planilha, selecione-a 
            e clique em abrir. Viu como é simples? A maior vantagem é que como é um modelo, 
            você não precisa se preocupar em apagar nada que já tenha feito por engano, o modelo sempre 
            estará disponível para um novo trabalho.</strong></p>
             <br><br>                               
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">
            <strong>
            Parabéns! Nome_Completo Você finalizou o Topico 01 do 
            modulo 01 do curso Calc Intermediário e Avançado. Boa sorte no Próximo Topico!</strong></p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

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
        <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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