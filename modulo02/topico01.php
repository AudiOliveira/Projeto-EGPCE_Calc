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
            <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">
              </span>01 - Validação de Dados</h2><br>
            <!--  Título Principal -->

            <div class="passos">
              <div>
             <!--  Objetivo -->
             <p class="wow fadeIn" style="margin-bottom: 10px;"><strong>Objetivo:</strong> Assegurar a entrada de dados de uma planilha, através da validação de dados.</p>
             <br>
             <!-- Parágrafo com a biblioteca de animação  -->
              <p class="wow fadeIn" data-wow-delay="0.3s">Assegurar a entrada de dados válidos é uma tarefa importante.<br><br>

              Por exemplo, convém restringir a entrada de dados a um determinado intervalo de datas e a 
              escolhas usando uma lista limitada, ou certificar-se de que apenas números inteiros positivos sejam digitados.<br><br>

              Fornecer ajuda imediata para orientar os usuários e mensagens claras quando dados inválidos forem digitados também é 
              essencial para permitir que a entrada de dados aconteça de forma adequada.<br><br>
                            </p>
              <!--  Fim do Parágrafo com a biblioteca de animação -->
            </div>
            <!--  Figura da página -->
            <div class="img_apresentacao wow animate__slideInRight" data-wow-delay="0.3s">
                                <img src="imgs/Group 17.png" alt="">
                                <p class="FonteFigura FonteMenor text-secondary" id="text-freepik">
                                    <strong>Fonte: </strong>
                                    <a href="https://www.freepik.com/free-vector/multitasking-concept_6596995.htm"
                                        target="_blank" rel="noopener noreferrer"> <strong> Imagem retirada do
                                            Freepik</strong></a>
                                </p>
                            </div>
              </div>

              <!--  Título Calc01 -->
              <h2 class="ti wow fadeIn">Criação de uma Validação de Dados</h2><br>
              

              <div class="passos">
              <div>
              <p class="wow fadeIn" data-wow-delay="0.3s"><ol class="wow fadeIn" id="" data-wow-delay="0.3s">
  <p>Uma vez decidida que validação você deseja usar em uma planilha, configure-a, adotando o seguinte procedimento:<p>
  <li>Abra a pasta de trabalho e selecione a planilha;
<br></li>
  <li>Selecione uma ou mais células para validar;<br></li>
  <li>Depois, acesse o menu Dados – Validade;</li>
  <li>Na guia <strong>Critérios,</strong> caixa <strong>Permitir,</strong> selecione a opção mais adequada.</li>
</ol><br><br>
                            </p>
              </div>
                            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
              Validação</p>
              <div class="zoom" style="margin-left: 10%;">
                <a href="imgs02/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                  <img src="imgs02/Figura01.png" height="auto" width="400px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura01.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
              </div>

           <!--CAIXA DE TEXTO EXEMPLO-->
           <section class="container wow fadeIn" data-wow-delay="0.3s" style="margin-bottom: 0%;">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloexemplo">
                    <div class="div_teste">
                      <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Por exemplo, você pode selecionar Lista para limitar respostas a perguntas como:<br><br>
                    <i class="fa-solid fa-arrow-right" style="color: #44833d"></i><strong> Mensalidade paga? Sim ou Não.<strong><br>
                    <i class="fa-solid fa-arrow-right" style="color: #44833d"></i><strong> A quantidade vendida foi: Baixa, Média, Alta.<strong><br>
                    <p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s">5. Clique na caixa Fonte e, em seguida, digite os valores da lista separados por ponto e vírgula.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

          <!--CAIXA DE TEXTO EXEMPLO-->
          <section class="container wow fadeIn" data-wow-delay="0.3s" style="margin-bottom: 0%;">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloexemplo">
                    <div class="div_teste">
                      <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Suponha que você trabalha numa revendedora de veículos e tem que fazer 
                      a planilha de controle de vendas. Digamos que existam três vendedores (por exemplo: Paulo, Ricardo e João) e 
                      cinco carros (Gol, Fox, Palio, Civic e Corsa).
                    <p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s ms-3">Vamos selecionar primeiramente a coluna dos nomes. 
              Em seguida, as células que serão utilizadas. Depois, acessaremos a janela de Validação, e selecionaremos a 
              opção ‘Lista’. Após isso, em ‘Entradas’, digite os nomes que você quer que sejam possíveis utilizar, um em cada linha. 
              Para passar para a linha seguinte, pressione ENTER. Caso você deseje que os nomes sejam classificados em ordem alfabética, 
              marque ‘Classificar os valores em ordem crescente’.<br><br>
              A lista preenchida ficará mais ou menos assim:
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
              Validando Células</p>
              <div class="zoom">
                <a href="imgs02/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem2">
                  <img src="imgs02/Figura02.png" height="auto" width="500px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem2" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura02.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            <br>

            <div class="passos">
            <div>
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">Feito isso, clique em ‘OK’. Você voltará para a planilha, 
              porém ao selecionar uma das células, que foram validadas, aparecerá o símbolo, que ao ser pressionado 
              mostrará uma caixa de seleção, contendo os valores que foram digitados na lista. Veja:<p>
          </div>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>

                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 3:</strong>
              Validação de Células (lista)</p>
              <div class="zoom">
                <a href="imgs02/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem3">
                  <img src="imgs02/Figura03.png" height="auto" width="250px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem3" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura03.png" alt="Alt da imagem fica aqui">
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
            
                <div class="passos">
                  <div>
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">Isso quer dizer que, no intervalo em que foi feita a validação, 
              será permitido digitar ou selecionar apenas os valores que estão na lista. Caso você digite um valor diferente 
              dos valores da lista, aparecerá uma mensagem de erro, similar à da Imagem 04.<p>
          </div>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
          <div>

            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 4:</strong>
              Mensagem de Erro Padrão de Validação</p>
              <div class="zoom">
                <a href="imgs02/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem4">
                  <img src="imgs02/Figura04.png" height="auto" width="200px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem4" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura04.png" alt="Alt da imagem fica aqui">
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

                        <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">Essa mensagem é a mensagem padrão de erro. 
              No entanto, você pode escrever a sua própria. Para isto, selecione novamente as células que 
              foram/serão validadas e selecione a opção de Validação de Dados novamente. Em seguida, acesse a aba alerta de erro. 
              Aparecerá a janela da imagem 05.<p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

          <!-- IMAGEM NO SITE  -->
          <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 5:</strong>
              Mensagem de Erro Padrão de Validação</p>
              <div class="zoom">
                <a href="imgs02/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem5">
                  <img src="imgs02/Figura05.png" height="auto" width="500px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem5" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura05.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            <br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">Na figura acima, já 
              foram preenchidos os valores. Essa janela contém os seguintes itens:<p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br><br>

            <div class="passos">
            <div>
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s"><i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Ação: que tipo de ação será 
            efetuado pelo Calc. As ações podem ser de três tipos:<br><br>

            <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Parar: faz com que o usuário tenha que alterar 
            obrigatoriamente o valor digitado para um dos valores da lista. Aparece apenas o botão ‘OK’;<p>
          </div>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>

                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 6:</strong>
              Exemplo da Opção</p>
              <div class="zoom">
                <a href="imgs02/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem6">
                  <img src="imgs02/Figura06.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem6" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura06.png" alt="Alt da imagem fica aqui">
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
            
                <div class="passos">
                  <div>
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s"><i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Aviso: permite que o usuário escolha entre 
              aceitar o valor que não está na lista ou não. Possui os botões ‘OK’ e ‘Cancelar’, que, se pressionados, 
              farão com que o valor que não esteja na lista seja aceito ou não, respectivamente;<br><br>

              <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Informações: permite que o usuário escolha entre aceitar o valor que não está na lista ou não. 
              Possui os botões ‘OK’ e ‘Cancelar’, que, se pressionados, farão com que o valor que não esteja na 
              lista seja aceito ou não, respectivamente;<br><br>

              <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Título: é o que aparecer na barra de títulos (a barra azul da mensagem);<br><br>

              <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Mensagem de erro: é a mensagem propriamente dita, informando sobre o erro ocorrido.<p>
          </div>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
          <div>

            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 7:</strong>
              Exemplo da Opção Aviso</p>
              <div class="zoom">
                <a href="imgs02/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem7">
                  <img src="imgs02/Figura07.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem7" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura07.png" alt="Alt da imagem fica aqui">
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
          
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="" data-wow-delay="0.3s">Outras colunas podem ser validadas também, 
              usando tanto a opção lista quanto outras opções. Para a coluna do veículo, podemos usar a opção 
              lista novamente, incluindo agora os nomes dos veículos, e, no alerta de erro, podemos escrever 
              para selecionar um veículo da lista.<br><br>

              Já para a coluna do preço, usaremos a opção ‘Número Decimal’, pois no exemplo colocaremos que 
              o valor mínimo é R$10.000. Para isso, temos que selecionar em ‘Dados’ a opção ‘Maior que’ e, 
              em ‘Mínimo’, digitarmos 10000 (sem pontos, vírgulas etc., a menos que se queira usar um valor 
              “quebrado” como mínimo, por exemplo, 10345,32).<p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br><br>

            <div class="bd-callout bd-callout-success passos wow animate__slideInLeft">
            

                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 8</strong></p>
              <div class="zoom">
                <a href="imgs02/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem8">
                  <img src="imgs02/Figura08.png" height="auto" width="450px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem8" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs02/Figura08.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            
            <div>
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" id="text-left" data-wow-delay="0.3s">Para esse caso, colocaríamos como alerta de erro a mensagem “O valor mínimo aceitável é R$10.000,00” ou algo do tipo.<p>
          </div>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>
                  </div> 
                        </div>
                        <br><br>

                        <div class="passos" style="justify-content: space-around;">
                        <div class="alert alert-primary scrool wow animate__slideInLeft" role="alert" data-sr-id="76" style="visibility: visible; opacity: 1; transition: opacity 1s cubic-bezier(0.5, 0, 0, 1) 0s; color: white; background-color: #029eff; border-radius: 25px;">
                            <p><strong>Além de Lista e número decimal, podem ser validados os seguintes tipos de dados:</strong></p>
                            <p>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Data;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Hora;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Número Inteiro;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Comprimento de Texto.</p>
                        </div>

                        <div class="alert alert-primary scrool wow animate__slideInRight" role="alert" data-sr-id="76" style="visibility: visible; opacity: 1; transition: opacity 1s cubic-bezier(0.5, 0, 0, 1) 0s; color: white; background-color: #029eff; border-radius: 25px;">
                            <p><strong>Todos esses, com exceção de lista, podem ser validados comparando valores, usando os seguintes operadores matemáticos:</strong></p>
                            <p>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Igual a;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Maior que;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Menor que;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Menor ou igual a;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Maior ou igual a;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Diferente de;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Entre;<br>
                            <i class="fa-solid fa-arrow-right" style="color: white"></i> Não está entre.</p>
                        </div>
                        </div>

                        <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn"  data-wow-delay="0.3s"><strong>Cada opção selecionada deverá ser preenchida com um tipo de valor diferente.</strong><p>
          
            <!--  Fim do Parágrafo com a biblioteca de animação -->



            <!--CAIXA DE TEXTO EXEMPLO-->
           <section class="container wow fadeIn" data-wow-delay="0.3s" style="margin-bottom: 0%;">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloexemplo">
                    <div class="div_teste">
                      <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Ao selecionar ‘Maior ou igual a’, deve-se preencher o valor mínimo. Ao selecionar ‘Menor que’, deverá ser preenchido o valor máximo. Ao selecionar ‘Entre’, deve-se preencher o valor máximo e o valor mínimo permitidos, e assim por diante.
                    <p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn"  data-wow-delay="0.3s"><strong>Parabéns! Nome_Completo Você finalizou o Topico 01 do modulo 02 do curso Calc Intermediário e Avançado. Boa sorte no Próximo Topico!</strong><p>
          
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
    <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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