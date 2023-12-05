<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER  -->
<?php
include('layout/header.php');
?>
<!-- FIM DO HEADER  -->

<body>
  <div class="transparente"></div>

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
            <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s"></i>
              </span>02 - Segurança das Informações</h2><br>
            <!--  Título Principal -->

            <div class="passos">
              <div>
            <!--  Objetivo -->
            <p class="wow fadeIn" style="margin-bottom: 10px;"><strong>Objetivo:</strong> Apresentar formas de proteção aos conteúdos presentes nas planilhas.</p>
             <br>

             <!-- Parágrafo com a biblioteca de animação  -->
              <p class="wow fadeIn" data-wow-delay="0.3s">Dependendo do grau de automação de um modelo de planilha, 
                você pode desejar que os usuários não alterem nenhuma parte dela, ou tenham acesso a somente algumas de suas áreas, 
                exclusivamente, para entrada de dados, não permitindo que sejam alterados rótulos ou fórmulas de cálculo.<br><br>

                A seguir, apresentamos alguns níveis de proteção do Calc:<br><br>

                <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> <strong>Proteger Planilha:</strong> feita planilha por planilha, essa proteção permite alterar apenas o conteúdo das células que não estiverem travadas.<br><br>
                <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> <strong>Proteger Documento:</strong> protege todas as planilhas de uma vez só.<br><br>
                            </p>
              <!--  Fim do Parágrafo com a biblioteca de animação -->
              <br>
            </div>
            <!--  Figura da página -->
            <div class="img_apresentacao wow animate__slideInRight" data-wow-delay="0.3s">
                                            <img src="imgs/Group 6.png" alt="">
                                            <p class="FonteFigura FonteMenor text-secondary" id="text-freepik">
                                    <strong>Fonte: </strong>
                                    <a href=""
                                         rel="noopener noreferrer"> <strong> Imagem retirada do
                                            Freepik</strong></a>
                                </p>
                                        </div>
                          </div>

            <!--  Título Calc02 -->
            <h2 class="ti wow fadeIn">Proteção de Todas as Células e Planilhas</h2><br>
            

            <div class="passos" style="justify-content: space-around;">
                  <div>
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="text-left" data-wow-delay="0.3s">
            1. Abra a pasta de trabalho e selecione as células ou planilhas que deseja proteger;<br><br>

            2. No menu Ferramentas, clique em Proteger Planilha;<br><br>

            3. Na caixa de diálogo que se abre, selecione os itens que não devem ser alterados (devem ficar bloqueados) na planilha;<br><br>

            4. Digite uma senha de proteção com até 255 caracteres, podendo conter letras, números e símbolos. Ao clicar em OK, será aberta uma caixa para reinserir a senha de proteção.<p>
                      </div>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
          <div>

            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 9:</strong>
              Proteção de Células</p>
              <div class="zoom">
                <a href="imgs02/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem9">
                  <img src="imgs02/Figura09.png" height="auto" width="400px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem9" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura09.png" alt="Alt da imagem fica aqui">
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

            
            <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
            <section class="container wow fadeIn" data-wow-delay="0.3s">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="titulofiqueatento">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">O uso de senha é opcional. No entanto, caso você não digite uma senha, 
                      qualquer pessoa poderá desbloquear a planilha, bastando para isso apenas acessar o menu de proteção 
                      de planilha novamente..</p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA FIQUE ATENTO -->

            <div class="passos" style="justify-content: space-around;">
          <!-- Parágrafo com a biblioteca de animação  -->
          <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left">Enquanto a planilha estiver protegida,
             caso alguém tente fazer alguma alteração nas células, aparecerá a seguinte mensagem: </p>
              <!--  Fim do Parágrafo com a biblioteca de animação -->
            

          <!-- IMAGEM NO SITE  -->
          <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 10:</strong>
              Não é possível modificar células protegidas</p>
              <div class="zoom">
                <a href="imgs02/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                  <img src="imgs02/Figura10.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura10.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            </div>

            <div class="passos" style="justify-content: space-around;">
          <!-- CAIXA DE TEXTO IMPORTANTE -->
          <section class="container wow fadeIn" data-wow-delay="0.3s">
              <div class="accordion">
                <section id="content">
                  <div class="caixaprincipal" id="tituloimportante">
                    <div class="div_teste">
                      <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="importante">
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Por padrão, todas as células já vêm com o status de “protegidas”.
                       No entanto, essa proteção só é ativada quando protegemos a planilha. Para ter acesso a alterar
                      valores mesmo com a planilha protegida, temos que desmarcar a opção ‘Protegida’. Para retirar
                      essa proteção e permitir que algumas células fiquem editáveis na sua planilha, enquanto outras
                      ficam protegidas através do bloqueio, basta selecionar a(s) célula(s), clicar com o botão direito 
                      do mouse e escolher a opção “Formatar Células”. Na janela seguinte, retire a seleção do protegido.
                    </p> <!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA IMPORTANTE -->

            <!-- IMAGEM NO SITE  -->
          <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11:</strong>
              Proteção de Célula</p>
              <div class="zoom">
                <a href="imgs02/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                  <img src="imgs02/Figura11.png" height="auto" width="500px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura11.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            </div>

            <div class="bd-callout bd-callout-success wow animate__slideInLeft">

            <!-- IMAGEM NO SITE  -->
    <div class="text-center img-01" data-wow-delay="0.3s" id="img-right">
      <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11.1</strong></p>
      <div class="zoom">
        <a href="imgs02/Figura11_1.png" data-bs-toggle="modal" data-bs-target="#Imagem111">
          <img src="imgs02/Figura11_1.png" height="auto" width="500px" alt="Imagem que remete a organização" id="img-1">
        </a>
      </div>
      <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
    </div>

    <!-- Imagem - MODAL-->
    <div class="modal fade text-center" id="Imagem111" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
        <div class="modal-content w-75">
          <img class="img-fluid" src="imgs02/Figura11_1.png" alt="Alt da imagem fica aqui">
        </div>
        <div class="modal-footer w-75 bg-light justify-content-center">
          <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
        </div>
      </div>
    </div>
    <!-- Imagem - End-->
    
    <div>
    <!-- Parágrafo com a biblioteca de animação  -->
    <p class="wow fadeIn" id="text-left" data-wow-delay="0.3s">Digamos que, na planilha acima, 
      a qual será utilizada por outra pessoa, queiramos protegê-la, porém queremos que a pessoa 
      tenha acesso a alterar os nomes (Coluna A) e Salários (Coluna B), e não deve ter acesso a 
      alterar as fórmulas das Colunas C e D. Para isso, antes de proteger a planilha, temos que 
      selecionar as células que ficarão desprotegidas (no nosso caso, de A2 até B13), e em seguida 
      temos que ir na janela de formatação das células (menu Formatar → Células ou CTRL + 1 no teclado), 
      localizar a aba ‘Proteção de Células’.<br><br>

      Para ter acesso a alterar valores, mesmo com a planilha protegida, 
      temos que desmarcar a opção ‘Protegida’ e clicar em ‘OK’.<br><br>

      Proteja a planilha novamente e você verá que haverá acesso para alterar 
      livremente de A2 até B13 (células que foram desprotegidas), porém o restante 
      continuará bloqueado.<p>
  </div>
    <!--  Fim do Parágrafo com a biblioteca de animação -->
          <div>
          </div> 
                </div>
                <br><br>

        <!--  Título Calc03 -->
        <h2 class="ti wow fadeIn">Ocultar Fórmula</h2><br>

          <!--CAIXA DE TEXTO REFLITA -->
    <section class="container">
      <div class="accordion ">
        <section id="content">
          <section id="content">
            <div class="caixaprincipal" id="tituloreflita">
              <div class="div_teste">
                <div> <i class="fa-solid fa-head-side-virus fa-xl me-2"></i>REFLITA</div>
                <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
              </div>
            </div> <!--caixa Principal-->
            <div class="accordion-content" id="reflita">
              <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
              <p class="txt-caixasecundaria">Você deve estar se perguntando: e a opção ‘Ocultar Fórmula’?</p>
            </div>
          </section><!--caixa secundaria-->
      </div>
    </section>
    <!-- FIM DA CAIXA REFLITA-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Ela também só funciona quando a planilha está protegida, 
              e serve para ocultar a fórmula das células selecionadas na barra de fórmulas.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
          <br>

          <!--  Título Calc04 -->
        <h2 class="ti wow fadeIn">Salvar com Senha</h2><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Uma outra opção é salvar o arquivo todo com uma senha. 
              Assim, ele só poderá ser aberto por possuir o código. Para isso, quando for salvar o arquivo, “tique” a opção “Salvar com Senha”.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br>

          <!-- IMAGEM NO SITE  -->
    <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
      <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12:</strong>
      Salvar documento com senha</p>
      <div class="zoom">
        <a href="imgs02/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
          <img src="imgs02/Figura12.png" height="auto" width="700px" alt="Imagem que remete a organização" id="img-1">
        </a>
      </div>
      <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
    </div>

    <!-- Imagem - MODAL-->
    <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
        <div class="modal-content w-75">
          <img class="img-fluid" src="imgs02/Figura12.png" alt="Alt da imagem fica aqui">
        </div>
        <div class="modal-footer w-75 bg-light justify-content-center">
          <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
        </div>
      </div>
    </div>
    <!-- Imagem - End-->

    <div class="passos" style="justify-content: space-around;">
    <!-- Parágrafo com a biblioteca de animação  -->
    <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left">Feito isso, clique no botão “Salvar”.<br><br>
        Será aberta, em seguida, uma caixa para que você digite a senha  e confirme.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

    <!-- IMAGEM NO SITE  -->
    <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
      <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13:</strong>
      Salvar documento com senha</p>
      <div class="zoom">
        <a href="imgs02/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
          <img src="imgs02/Figura13.png" height="auto" width="350px" alt="Imagem que remete a organização" id="img-1">
        </a>
      </div>
      <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
    </div>

    <!-- Imagem - MODAL-->
    <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
        <div class="modal-content w-75">
          <img class="img-fluid" src="imgs02/Figura13.png" alt="Alt da imagem fica aqui">
        </div>
        <div class="modal-footer w-75 bg-light justify-content-center">
          <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
        </div>
      </div>
    </div>
    <!-- Imagem - End-->
    </div>
    <br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s">Pronto! O documento agora só poderá ser aberto por quem tiver a senha digitada por você.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br>

    <!--  Título Calc05 -->
    <h2 class="ti wow fadeIn">Desproteção de células e planilhas</h2>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s"><ol class="wow fadeIn" id="" data-wow-delay="0.3s">
            <p>Para desproteger células ou planilhas, faça o seguinte:<p>
            <li>Selecione a célula ou planilha que deseja desproteger;
          <br></li>
            <li>No menu Ferramentas, clique em Desproteger Planilha.<br></li>
          </ol>
                                      </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br>
            
            <div class="passos" style="justify-content: space-around; grid-template-columns: 40% 50%;">

              <div class="img_apresentacao wow animate__zoomIn" style="margin-left: 0%;">
                <img src="imgs/Group 4.png" alt="" style="width: 400px;">
                <p class="FonteFigura FonteMenor text-secondary" id="text-freepik"><strong>Fonte:Imagem retirada do
                    Freepik</strong>
                </p>
              </div>
              <div>
                <!-- Parágrafo com a biblioteca de animação  -->
                <p class="wow fadeIn texto_apresentacao wow animate__zoomIn" data-wow-delay="0.3s">
                  <strong>Olá, Nome_Completo!</strong><br> Clique no botão a seguir e teste seus conhecimentos.
                </p><br>


                <!-- começo do Quiz botao -->
                <div class="start_btn wow animate__bounceInRight" data-wow-delay="0.4s"><button id="openModalBtn"><i
                      class="icone fa-solid fa-puzzle-piece"></i>TESTE SEUS
                    CONHECIMENTOS</button></div>

                <div class="center">
                  <div class="info_box">
                    <div class="info-title"><span><i class="icone fa-solid fa-pen-clip"></i>Regras do
                        QUIZ</span></div>
                    <div class="info-list">
                      <div class="info">1. Depois que você selecionar a respota, não poderá ser desfeito.
                      </div>
                      <div class="info">2. Você não pode sair durante o quiz.</div>
                      <div class="info">3. Você vai receber a pontuação conforme responde as questões.
                      </div>
                      <div class="info">4. Esse quiz não vai interferir na sua nota final.</div>
                    </div>
                    <div class="buttons">
                      <button class="quit">Sair</button>
                      <button class="restart">Continuar</button>
                    </div>
                  </div>
                </div>

                <!-- caixa do quiz -->
                <div class="center">
                  <div class="quiz_box">
                    <header>
                      <div class="title"><i class="fa-solid fa-puzzle-piece icone"></i>QUIZ</div>
                      <div class="time_line"></div>
                    </header>
                    <section>
                      <div class="que_text">
                        <!-- Aqui é inserido o quiz do javascript -->
                      </div>
                      <div class="option_list">
                        <!-- Aqui é inserido as opções do JavaScript -->
                      </div>
                    </section>

                    <!-- footer do quiz -->
                    <footer>
                      <div class="total_que">
                        <!-- aqui está inserido o número de questões do js -->
                      </div>
                      <button class="next_btn">Próximo</button>
                    </footer>
                  </div>
                </div>

                <!-- Resultado -->
                <div class="center">
                  <div class="result_box">
                    <div class="img">
                      <!-- <i class="fa-solid fa-puzzle-piece"></i> -->
                    </div>
                    <div class="complete_text">Você completou o quiz!</div>
                    <div class="score_text">
                      <!-- Aqui é inserido o resultado -->
                    </div>
                    <div class="buttons">
                      <button class="restart">Tentar novamente</button>
                      <button class="quit">Fechar</button>
                    </div>
                  </div>
                </div>
                <!-- Fim do Quiz -->


              </div>
            </div><br><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" data-wow-delay="0.3s"><strong>Parabéns! Nome_Completo Você finalizou o Topico 02 
          do modulo 02 do curso Calc Intermediário e Avançado. Boa sorte no Próximo Topico!</strong>
            </p>
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
    <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">
      <i class="fa-solid fa-chevron-left"></i> Voltar </a>
    <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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