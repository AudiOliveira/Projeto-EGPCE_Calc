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
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">02 - Macros</h2><br>
                        <!--  Título Principal -->

                        <!--  Objetivo -->
                        <p class="wow fadeIn" style="margin-bottom: 10px;"><strong>Objetivo:</strong> Introduzir o desenvolvimento de rotinas através da criação de macros.</p>
                        <br>
                        
                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Uma macro é uma sequência de comandos e funções armazenadas em um módulo do LibreOffice Basic e pode ser executada sempre que você precisar executar a tarefa. A grande vantagem é que, 
                          caso você execute uma tarefa, várias vezes no Calc, você pode automatizá-la com uma macro.<br><br>

                            A seguir, apresentamos alguns níveis de proteção do Calc:
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!--  Título Calc01 -->
                        <h2 class="ti wow fadeIn">Programação de Macros e de Funções</h2><br>
                        
                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Antes de começarmos a ver 
                          funções propriamente ditas, veremos um pouco de como criarmos nossas próprias macros. 
                          Vamos começar com uma bem simples, que mostra ao usuário uma caixa de diálogo, 
                          solicitando o nome do usuário. Após o mesmo preencher e clicar em OK, será 
                          mostrada uma mensagem de boas-vindas personalizada com o nome do usuário.<br><br>

                          Para começar, abra a janela de gerenciamento de macros, que está em Ferramentas 
                          – Macros – Organizar Macros – <strong>LibreOffice Basic.</strong><br><br>

                          Em seguida, dê um nome para a sua macro e selecione “Novo”.
                        </p>

                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 9:</strong>
                        Criação de nova Macro.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem9">
                            <img src="imgs03/Figura09.png" height="auto" width="600px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Tecmundo.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem9" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura09.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> Tecmundo.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Aparecerá a janela de edição do Basic. 
                          Digite o código abaixo:<br><br></p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                      <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 10:</strong>
                        Código para Macro.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem9">
                            <img src="imgs03/Figura10.png" height="auto" width="600px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura10.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Feito isso, salve as alterações e execute a macro, 
                          clicando no botão “Executar o Basic” ou tecla “F5”.</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11:</strong>
                        Executar o Basic.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                            <img src="imgs03/Figura11.png" height="auto" width="600px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura11.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Será então, mostrada a janela abaixo, solicitando a digitação de nome: 
                          Digite o código abaixo:<br><br></p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12:</strong>
                        Macro em Execução - Parte 1</p>
                        <div class="zoom">
                            <a href="imgs03/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                            <img src="imgs03/Figura12.png" height="auto" width="600px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura12.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Após digitar seu nome e clicar em “OK”, aparecerá 
                          a caixa de mensagem abaixo, com o nome que foi digitado:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13:</strong>
                        Macro em Execução - Parte 2</p>
                        <div class="zoom">
                            <a href="imgs03/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                            <img src="imgs03/Figura13.png" height="auto" width="200px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura13.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Vamos analisar o que cada parte do código faz:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!--  Título Calc01 -->
                        <h2 class="ti wow fadeIn">Clique nos Títulos Abaixo para mais Informações!</h2><br>





                        <!-- ACORDION PARA ADICIONAR!!!!!!!  -->
                        <div class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <h5>Sub SeuNome</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Essa linha é o “cabeçalho” da macro, onde inicia 
                                          o código que será executado. Quando foi clicado em “Novo”, nessa linha aparece
                                           escrito o nome que você deu ao seu macro.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Rem</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Linhas que começam com essa palavra 
                                          são apenas comentários, que explicam o que será feito ou qualquer 
                                          outra observação que seja necessária fazer.<br>
                                          Não são consideradas pelo Basic na hora de executar.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTree"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Entretanto...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Isso de modo algum nos autoriza a pensar que as
                                            habilidades de um milionário
                                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos
                                            condicionados a
                                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em
                                            prejuízo de
                                            outras - como as motoras e musicais.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTree"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Entretanto...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Isso de modo algum nos autoriza a pensar que as
                                            habilidades de um milionário
                                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos
                                            condicionados a
                                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em
                                            prejuízo de
                                            outras - como as motoras e musicais.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTree"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Entretanto...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Isso de modo algum nos autoriza a pensar que as
                                            habilidades de um milionário
                                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos
                                            condicionados a
                                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em
                                            prejuízo de
                                            outras - como as motoras e musicais.</div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button text-light collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTree"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <h5>Entretanto...</h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Isso de modo algum nos autoriza a pensar que as
                                            habilidades de um milionário
                                            sejam mais importantes que as de um atleta. No entanto, socialmente, fomos
                                            condicionados a
                                            valorizar mais alguns tipos de habilidades - como as lógico-matemáticas - em
                                            prejuízo de
                                            outras - como as motoras e musicais.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        




                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Agora, veremos como criar uma função que será 
                          utilizada no Calc através do Basic.<br><br>

                          Além da macro, que vimos anteriormente, 
                          é possível criar também funções para uso próprio no Calc. 
                          Após ela estar programada, é possível utilizá-la da mesma maneira que se usam funções
                          ‘nativas’ do Calc, ou seja, usando-se o sinal de igual, o nome da função e os parâmetros desejados.<br><br>

                          A diferença é que, nesse caso, 
                          os parâmetros serão definidos por nós.<br><br>

                          Antes de começar, vamos fazer o seguinte: 
                          uma planilha no qual digitaremos uma data e 
                          desejaremos saber em que dia da semana (por extenso) essa data caiu. 
                          Apesar de trabalhar com funções de datas, o Calc não possui nenhuma que faça isso diretamente. 
                          O que se pode fazer é utilizar a função DIA.DA.SEMANA, que retornará um número de 0 a 6 ou de 1 a 7, 
                          dependendo de como for configurada a função. Usaremos para esse exemplo a contagem padrão, 
                          que atribui valor 1 para domingo, 2 para segunda-feira, 3 para terça-feira e assim por diante. 
                          A planilha deverá ficar mais ou menos assim:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 14:</strong>
                        Exemplo de Tabela para Demonstração de Funções.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                            <img src="imgs03/Figura14.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura14.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >A função em B2 ficará =DIA.DA.SEMANA(A2), 
                          e retornou 7 porque a data em A2 caiu num sábado, e assim sucessivamente.<br><br>

                          Feito isso, chegou a hora de criar a função. Para isso, iremos acessar o editor de macros, 
                          clicando em Ferramentas – Macros – Organizar Macros – LibreOffice Basic e, depois, vamos clicar em “Editar Macros”.<br><br>

                          Vamos criar uma função que denominaremos DiaPorExtenso, e que contém apenas um parâmetro, 
                          que será o valor que resultou da função DIA.DA.SEMANA. Todos os parâmetros devem ser declarados 
                          no cabeçalho da função, ao lado do nome da mesma. O código para ess e exemplo em específico ficou assim:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 15:</strong>
                        Exemplo de código criado para uma função personalizada.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                            <img src="imgs03/Figura15.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura15.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >O código da imagem 15 recebe o 
                          valor da célula (Numero) e o compara com valores de 1 a 7 (Select Case Numero 
                          indica que o valor a ser comparado é o da variável Numero). Caso o valor de Numero 
                          seja um valor que não esteja entre 1 e 7, retornará a mensagem “Dia Inválido” (Case Else). 
                          Após isso, devemos fechar a função com End Function.<br><br>

                          Vamos testar agora na planilha. Vamos colocar o cursor em C2 e digitar =DIAPOREXTENSO(B2). 
                          Depois podemos copiar a função para as linhas seguintes na mesma coluna. O resultado deverá ficar assim:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 16:</strong>
                        Exemplo de utilização de função criada pelo usuário.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                            <img src="imgs03/Figura16.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura16.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

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
                    <p class="txt-caixasecundaria">As funções personalizadas não aparecem na lista do 
                      assistente de funções, pelo fato de terem sido criadas pelo usuário. Somente 
                      aparecem nesta lista as funções ‘nativas’, ou seja, aquelas que foram criadas 
                      junto com o Calc.
                    </p> <!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA IMPORTANTE -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Para finalizar, vamos ver mais 
              um exemplo de utilização de funções personalizadas no Calc.<br><br>

              Suponhamos que você deseja criar uma planilha para o cálculo do IMC 
              (Índice de Massa Corpórea, medida utilizada calcular o peso ideal, e que 
              é calculado dividindo-se o peso pela altura ao quadrado).<br><br>
              Vamos primeiramente digitar os valores necessários na planilha:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 17:</strong>
                        Função para cálculo do IMC.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                            <img src="imgs03/Figura17.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura17.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->


                        <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Após isso, iremos ao editor do Basic e 
              digitaremos o código abaixo:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 18:</strong>
                        Função do IMC no BASIC.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                            <img src="imgs03/Figura18.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura18.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >A função da imagem 18 é uma função bem simples, sendo que seu cálculo ocupou apenas uma linha. Isso ocorreu porque não foi necessário escolher entre vários valores como no exemplo anterior. Apenas fez o cálculo e retornou o valor desse cálculo. 
              Lembre-se de salvar as alterações feitas no editor do Basic.</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


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
                    <p class="txt-caixasecundaria">Nos casos em que a função tiver mais de um argumento,
                       como é o nosso caso (peso e altura), eles devem ser 
                       colocados na MESMA ORDEM em que forem usados na função.
                    </p> <!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA IMPORTANTE -->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Feito isso, volte na planilha e 
              digite =INDICEMASSA(b1;b2). O resultado ficará assim:</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- IMAGEM NO SITE  -->
                      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 19:</strong>
                        Função IMC após preenchida.</p>
                        <div class="zoom">
                            <a href="imgs03/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                            <img src="imgs03/Figura19.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs03/Figura19.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->


                  <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Caso você tenha colocado primeiro a altura e depois o peso,
               basta inverter a ordem dos endereços do que está na função do exemplo que também dará certo. 
               Experimente alterar os valores para verificar o funcionamento da função.<br><br>

Esta aula foi apenas uma breve introdução ao funcionamento das macros e do editor Basic do LibreOffice. 
Não é possível explicar tudo, pois o material é muito extenso e ficaria inviável colocar aqui. No entanto,
 como já mencionamos anteriormente, no site oficial do LibreOffice, existem muito mais informações 
 disponíveis sobre este assunto.<br><br>

Estamos chegando ao fim deste curso de LibreOffice Calc Intermediário/Avançado. 
Esperamos que tenha sido útil e você possa utilizar os conhecimentos aqui adquiridos a 
seu favor. Até logo!!</p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        <br><br>

            <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" data-wow-delay="0.3s"><strong>Parabéns! Nome_Completo Você finalizou o Topico 02 
          do modulo 03 do curso Calc Intermediário e Avançado. Não esqueça de fazer a Avaliação. Boa sorte e até o próximo Curso!</strong>
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
        <a href="referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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