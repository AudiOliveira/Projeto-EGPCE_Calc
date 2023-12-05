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

            <!--  Título Pricipal -->
            <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">02 - Organização de Dados</h2><br>

            <!--  Título Objetivo -->
            <p class="wow fadeIn"><strong>Objetivo:</strong> Organizar os dados existentes em uma tabela.</p>
                  <br>

            <!--  Título Calc01 -->
            <h2 class="ti wow fadeIn">Trabalhando com Nomes</h2><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s">Normalmente, sempre que queremos 
              calcular a soma, média ou qualquer outra função que necessite de um intervalo, usamos o 
              nome da função e digitamos o endereço das células como parâmetro do intervalo. Por exemplo, 
              se existem valores a serem somados em B2, B3, B4 e B5, a fórmula (que talvez esteja em B6) 
              ficaria assim:
              <br><br>
              <p class="wow fadeIn" id="text-center"><strong>=SOMA(B2:B5)</strong></p>
              <br>
              <p class="wow fadeIn" data-wow-delay="0.3s">Não há nada errado com essa fórmula. No entanto, esse intervalo (ou qualquer outro) pode ser ‘nomeado’, 
              para facilitar a sua localização e/ou compreensão.
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
            <br>

              <!--  Título Calc02 -->
              <h2 class="ti wow fadeIn">O que é um Nome?</h2><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s">É uma referência que fazemos a uma célula ou 
              intervalo de células de forma que esse nome possa ser utilizado em uma fórmula ou função, 
              dentro de qualquer planilha da pasta de trabalho. Usando nomes, você pode facilitar muito 
              o entendimento e a manutenção das fórmulas.<br><br>
              Depois de adotar a prática do uso de nomes, você poderá atualizá-los, auditá-los e 
              gerenciá-los facilmente.</p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->

          <!-- Parágrafo com a biblioteca de animação  -->
          <p class="wow fadeIn texto_apresentacao2 wow animate__zoomIn" data-wow-delay="0.5s">
                  <strong><i class="fa-solid fa-circle-info"></i> Clique no título abaixo
                    para mais informações</strong>
                  <strong></strong>
                </p><br><br><br>

                <p class="d-flex justify-content-center gap-1 wow animate__zoomIn" data-wow-delay="0.5s">
                  <button class="btn CorVerdeEstado" id="buton-t3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample3" aria-expanded="false"
                    aria-controls="multiCollapseExample3"><i class="fa-solid fa-table"> <strong
                        id="text-teste">
                        Utilizando Nomes </strong></i></i></button>
                </p>
                <!--  Fim do Parágrafo com a biblioteca de animação -->

                <div class="row">
                  <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample3">
                      <div class="table-responsive">
                    <table class="table table-bordered border-success">
                    <tbody>
                      <tr class="table-active" style="background-color: #d1e7dd;">
                        <td>Tipo</td>
                        <td>Exemplo sem nome</td>
                        <td>Exemplo com nome</td>
                      </tr>
                      <tr>
                        <td>Referência</td>
                        <td>=SOMA(C20:C30)</td>
                        <td>=SOMA(TOTALFINAL)</td>
                      </tr>
                      <tr>
                        <td>Constante</td>
                        <td>=PRODUTO(A5,8.3)</td>
                        <td>=PRODUTO(PRECO;QUANT)</td>
                      </tr>
                      <tr>
                        <td>Fórmula</td>
                        <td>=SOMA(PROCV(A1,B1:F20,5,FALSO),-G5)</td>
                        <td>=SOMA(PROCURA)</td>
                      </tr>
                      <tr>
                        <td>Tabela</td>
                        <td>=C4:G36</td>
                        <td>=TABELAPRINCIPAL</td>
                      </tr>
                    </tbody>
                  </table>
                  </div><br>
                    </div>
                  </div>
                </div>
                <br><br>
           <!-- Parágrafo com a biblioteca de animação  -->

           <p class="wow fadeIn" data-wow-delay="0.3s">Para nomear uma célula ou região, faça o seguinte:<br>
            1. Abra a planilha.<br><br>
            2. Clique na(s) célula(s) que deseja nomear. Tomemos, por exemplo, a imagem a seguir, 
            onde a célula B12 foi selecionada.</p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->     

          <!-- IMAGEM NO SITE  -->
          <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 6:</strong>
              Nomeando Células</p>
              <div class="zoom">
                <a href="imgs01/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem6">
                  <img src="imgs01/Figura06.png" height="auto" width="400px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>
            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem6" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura06.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            <br>
          
            <div class="passos">
                    <!-- Parágrafo com a biblioteca de animação  -->
                    <p class="wow fadeIn" id="text-left" data-wow-delay="0.3s">
                    <strong>
                    Para criar um nome, algumas regras devem ser bedecidas:<br><br>

                    <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> O primeiro caractere do nome deve ser letra ou underline.<br><br>

                    <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> O nome pode ter até 255 caracteres.<br><br>

                    <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Não pode haver espaços.</strong></p>
                    <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>

                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 7:</strong>
              Definir nome</p>
              <div class="zoom">
                <a href="imgs01/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem7">
                  <img src="imgs01/Figura07.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem7" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura07.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
                  </div> 
                        </div>

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
                    <p class="txt-caixasecundaria">Ao nomear intervalos, não podem ser usados nomes de funções existentes no Calc 
                      (SOMA, MEDIA, MAXIMO, etc), nem nomes de endereços de células (A2, B5, D9, etc), pois essas palavras são palavras 
                      reservadas do Calc, e caso pudessem ser utilizadas causariam ambiguidade (o Calc não saberia se estaríamos falando 
                      da função ou do nome do intervalo).</p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA FIQUE ATENTO -->

          <!-- Parágrafo com a biblioteca de animação  -->
          <p class="wow fadeIn" data-wow-delay="0.3s">Ao definirmos um nome para uma célula ou região, 
            ele passa a ser exclusivo da pasta de trabalho, ou seja, em qualquer planilha, podemos fazer 
            referência a ele. <br>Por exemplo, em qualquer célula de qualquer planilha da pasta de trabalho em 
            que você digite =Poupança, aparecerá o valor digitado para a Poupança.</p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->   

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
                    <p class="txt-caixasecundaria">Você pode nomear uma célula ou região rapidamente. Basta selecionar a célula ou região, 
                      clicar na caixa Nome na barra de fórmulas, digitar o nome e pressionar Enter. Observe que ao adotar um nome, 
                      na utilização do autocomplementar, não se faz mais necessária a fixação do endereço.</p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

            <div class="passos">
                    <!-- Parágrafo com a biblioteca de animação  -->
                    <p class="wow fadeIn" id="text-left" data-wow-delay="0.3s">
                    Para visualizar todos os nomes atribuídos a células ou regiões nas planilhas, 
                    basta clicar na seta Drop Down, na caixa Nome, à esquerda na barra de fórmulas.</p>
                    <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>

                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 8:</strong>
              Definir nome</p>
              <div class="zoom">
                <a href="imgs01/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem8">
                  <img src="imgs01/Figura08.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem8" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura08.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
                  </div> 
                        </div>
            
                <div class="passos">
            <!-- Parágrafo com a biblioteca de animação  -->
            <ol class="wow fadeIn" id="text-left" data-wow-delay="0.3s">
  <p>Para excluir um nome, faça o seguinte:<p>
  <li>Clique no menu “Planilha” → “Intervalos Nomeados e Expressões” → “Gerenciar nomes”. 
      Ou, aperte simplesmente CTRL + F3 no teclado.
      Ou, aperte simplesmente CTRL
<br></li>
  <li>Na caixa Gerenciador de Nomes, selecione o nome desejado e clique no botão Excluir.<br></li>
  <li>Caso esse nome tenha sido utilizado em alguma fórmula ou função, aparecerá a seguinte mensagem de erro: #NOME?</li>
</ol>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
          <div>

            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 9:</strong>
              Definir nome</p>
              <div class="zoom">
                <a href="imgs01/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem9">
                  <img src="imgs01/Figura09.png" height="auto" width="300px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem9" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura09.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
                  </div> 
                        </div>

            <!--CAIXA DE TEXTO ATIVIDADE-->
            <section class="container wow fadeIn" data-wow-delay="0.3s">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloexemplo">
                    <div class="div_teste">
                      <div><i class="fa-regular fa-pen-to-square"></i></i> ATIVIDADE </div>
                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">Vá até a material do curso, baixe a planilha de nome “planilha01” 
                      e resolva. - As colunas de Mês/Ano e % não devem ser copiadas e coladas da tabela índice. 
                      Tente trazer o valor de lá, utilizando os endereços de células. - Nos cálculos dos valores, utilize as células renomeadas.
                       - Na coluna de %, aplique uma formatação condicional para os valores positivos e uma para os negativos.<br>
                       <strong>Esta atividade não precisa ser entregue à escola.</strong>
                    <p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA ATIVIDADE-->

          <!-- IMAGEM NO SITE  -->
          <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 10:</strong>
            Tabela de comissâo</p>
              <div class="zoom">
                <a href="imgs01/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                  <img src="imgs01/Figura10.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura10.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

          <!--  Título Calc03 -->
          <h2 class="ti wow fadeIn">Organização de Dados</h2><br>

          <!-- Parágrafo com a biblioteca de animação  -->
          <p class="wow fadeIn" id="" data-wow-delay="0.3s">
          Ao inserir dados em uma planilha, eles podem não se apresentar ordenados da maneira que você deseja visualizá-los.<br><br>
          Com os recursos de classificação e a aplicação de filtros simples vistos no módulo básico, são criadas novas 
          perspectivas para ajustar os dados às suas necessidades.</p>
          <!--  Fim do Parágrafo com a biblioteca de animação -->
          <br>

        <!--  Título Calc04 -->
        <h2 class="ti wow fadeIn">Classificação de dados</h2><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <ol class="wow fadeIn" id="" data-wow-delay="0.3s">
     <li>Selecione a planilha (planilha 02 – disponível no material do curso);
      <br></li>
      <li>Clique no menu Dados → Ordenar;<br></li>
      <li>Na caixa de diálogo Ordenar, selecione a coluna desejada, valores e ordem.</li>
      </ol>
        <!--  Fim do Parágrafo com a biblioteca de animação -->

      <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11:</strong>
            Ordenar</p>
              <div class="zoom">
                <a href="imgs01/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                  <img src="imgs01/Figura11.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura11.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

          <!-- Parágrafo com a biblioteca de animação  -->
          <p class="wow fadeIn" id="" data-wow-delay="0.3s">
          Nesse caso, solicitamos que a coluna da “Região” seja, primeiramente, ordenada de forma crescente e 
          depois disso, a coluna “Faturamento”, seja ordenada de forma decrescente.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

        <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12:</strong>
            Subtotais</p>
              <div class="zoom">
                <a href="imgs01/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                  <img src="imgs01/Figura12.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura12.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- Parágrafo com a biblioteca de animação  -->
          <p class="wow fadeIn" id="" data-wow-delay="0.3s">
          Você pode adicionar até três níveis de classificação.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->
        <br>

        <!--  Título Calc05 -->
        <h2 class="ti wow fadeIn">Subtotais</h2><br>
        <div class="passos">
        <!-- Parágrafo com a biblioteca de animação  -->
        <div>
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        Automaticamente, você pode calcular os subtotais e os totais gerais para uma coluna, usando o comando Subtotal, do menu Dados.<br><br>
        Os subtotais são calculados com uma função de resumo, como SOMA ou MÉDIA. Você pode exibir mais de um tipo de função de resumo para cada coluna.<br><br>
        Os totais gerais são derivados de dados de detalhes, e não dos valores nos subtotais.<br><br>
        Por exemplo, se você usar a função de resumo MÉDIA, a linha de total geral exibirá uma média de todas as linhas de detalhes, e não uma média dos valores das linhas de subtotal.
          </p>
        </div>

        <!--  Figura da página -->
          <div class="img_apresentacao wow animate__slideInRight" data-wow-delay="0.3s">
                                <img src="imgs/Group 15.png" alt="">
                                <p class="FonteFigura FonteMenor text-secondary" id="text-freepik">
                                    <strong>Fonte: </strong>
                                    <a href=""
                                         rel="noopener noreferrer"> <strong> Imagem retirada do
                                            Freepik</strong></a>
                                </p>
                            </div>
        </div>
         <!--  Fim do Parágrafo com a biblioteca de animação -->
         <br>

        <!--  Título Calc06 -->
        <h2 class="ti wow fadeIn">Criação de Subtotais</h2><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        1. Classifique a coluna que servirá de base para gerar o subtotal. Nesse caso, iremos utilizar a coluna “Produto”;
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

        <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13:</strong>
            Subtotais</p>
              <div class="zoom">
                <a href="imgs01/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                  <img src="imgs01/Figura13.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura13.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

          <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        2. No menu Dados, clique em Subtotais;<br><br>
        3. Na caixa de diálogo Subtotais, 1º Grupo, selecione a coluna a ser agrupada. Em nosso exemplo, é Produto;<br><br>
        4. No campo “Calcular subtotais para:” escolha “Faturamento”;<br><br>
        5. No campo Utilizar função, clique na função que você deseja utilizar para calcular os subtotais. Em nosso exemplo, é SOMA;        
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

         <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 14:</strong>
            Subtotais</p>
              <div class="zoom">
                <a href="imgs01/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                  <img src="imgs01/Figura14.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura14.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
          <br>

          <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        Se você desejar uma quebra de página automática após cada subtotal, 
        ou distinguir entre maiúscula e minúscula ou ainda realizar ordenações, clique na guia Opções e configure.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

         <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 15:</strong>
            Subtotais</p>
              <div class="zoom">
                <a href="imgs01/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                  <img src="imgs01/Figura15.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura15.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        6. Clique em OK.<br><br>
        Como opção, você poderá usar o 2º e 3º grupo do comando Subtotais, 
        para adicionar mais subtotais com funções de resumo diferentes.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

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
                    <p class="txt-caixasecundaria">Para exibir um resumo somente dos subtotais e totais gerais, clique nos símbolos de estrutura de 
                      tópicos 1,2,3,4,5 , ao lado dos números de linha. Use os símbolos + e - para exibir ou ocultar as linhas de detalhes dos subtotais 
                      individuais.</p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

          <!--  Título Calc07 -->
        <h2 class="ti wow fadeIn">Remoção de Subtotais</h2><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        Quando você remove subtotais, o Calc remove também a estrutura de tópicos e as quebras de 
        página que você inseriu na lista juntamente com os subtotais.
          </p>
          <ol class="wow fadeIn" id="" data-wow-delay="0.3s">
     <li>Clique em uma célula na lista que contém um subtotal;
      <br></li>
      <li>No menu Dados, clique em Subtotal. A caixa de diálogo Subtotal é exibida;<br></li>
      <li>Clique em Remover.</li>
      </ol>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

        <!-- IMAGEM E JOGO SOBRE O CURSO -->
        <div class="apresentacao" style="grid-template-columns: 40% 50%;">

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
  <div class="start_btn wow animate__bounceInRight" data-wow-delay="0.4s"><button
      data-bs-target="#exampleModalToggle" id="btn-game" data-bs-toggle="modal"><i
        class="icone fa-solid fa-puzzle-piece"></i>TESTE SEUS
      CONHECIMENTOS</button></div>

  <!-- ######################################## GAME DE EMBARALHAR PALAVRAS ##################################### -->
  <div id="game" class="wow fadeIn" data-wow-delay="0.3s">
    <!-- MODAL 1 - INSTRUÇÕES DO JOGO -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
      aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="exampleModalToggleLabel"><i class="fa-solid fa-pen-clip"></i>
              Instruções do
              Teste</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body fw-normal" id="instrucoes">

            1. Você deverá descobrir qual é a palavraque está embaralhada;<br><br>
            2. Haverá uma dica para lhe auxiliar;<br><br>
            3. Ao concluir clique em confirmar;<br><br>
            4. Este teste não influenciará na avaliação final.<br><br>

          </div>
          <div class="modal-footer">
            <button class="btn" id="btn-game" data-bs-target="#exampleModalToggle2"
              data-bs-toggle="modal">Continuar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL 2 - INÍCIO DO JOGO -->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
      aria-labelledby="exampleModalToggleLabel2" tabindex="-1" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-3" id="exampleModalToggleLabel2"><i class="fa-solid fa-gamepad"></i>
              Palavra
              Embaralhada</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="content">
              <div class="word"></div>
              <div class="details">
                <div class="hint"> <span></span></div>
              </div>

              <input type="text" spellcheck="false" placeholder="Escreva a palavra"
                id="palavras-respostas">

              <div class="buttons">
                <button class="btn-game" id="refresh-word">Embaralhar</button>
                <button class="btn-game" id="check-word">Confirmar</button>

                <div id="divTransparente" class="escondida"></div>
                <div id="d2" class="escondida" data-bs-dismiss="modal"></div>

                <!-- MODAIS DAS RESPOSTAS -->
                <!-- MODAL QUANDO A CAIXA DE RESPOSTA ESTIVER VAZIA -->
                <div id="modal-js">
                  <dialog class="modal01">
                    <i id="close01" class="bi bi-x"></i>
                    <div class="text-center">
                      <img src="imgs/opps.png" class="img-fluid"
                        alt="Imagem indicando que a caixa de resposta está vazia.">
                    </div>
                  </dialog>
                </div>

                <!-- MODAL QUANDO A RESPOSTA ESTIVER CORRETA -->
                <div id="modal-js">
                  <dialog class="modal02">
                    <i id="close02" class="bi bi-x" data-bs-dismiss="modal"></i>
                    <div class="text-center">
                      <img src="imgs/parabens.png" class="img-fluid"
                        alt="Imagem indicando que você acertou a resposta.">
                    </div>
                  </dialog>
                </div>

                <!-- MODAL QUANDO A RESPOSTA ESTIVER ERRADA-->
                <div id="modal-js">
                  <dialog class="modal03">
                    <i id="close03" class="bi bi-x"></i>
                    <div class="text-center">
                      <img src="imgs/que-pena.png" class="img-fluid"
                        alt="Imagem indicando que você errou a resposta.">
                    </div>
                  </dialog>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <br><br>
  <!-- ######################################## GAME DE EMBARALHAR PALAVRAS END ##################################### -->

</div>
</div><br>
<!-- IMAGEM E JOGO SOBRE O CURSO END-->



        <!--  Título Calc08 -->
        <h2 class="ti wow fadeIn">Filtros</h2><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        A maioria das funcionalidades do LibreOffice tem um nome autoexplicativo, a função de Filtro não é diferente. 
        A ideia é possibilitar filtrar os dados de um conjunto de tabelas, quando a relação de dados é extensa é um recurso bem útil. 
        Como exemplo, é possível exibir o resultado de uma região em meio a várias, tornando a visualização e análise mais simples.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

         <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 16:</strong>
            Filtro Simples</p>
              <div class="zoom">
                <a href="imgs01/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                  <img src="imgs01/Figura16.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura16.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
         Para ter acesso, selecione o intervalo de dados analisado (também conhecido com matriz) 
         e acesse o menu Dado – Filtro e selecione uma das opções de filtro.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

         <!-- IMAGEM NO SITE  -->
      <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-center">
            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 17:</strong>
            Filtro</p>
              <div class="zoom">
                <a href="imgs01/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                  <img src="imgs01/Figura17.png" height="auto" width="800px" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura17.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

            <!--  Título Calc09 -->
        <h2 class="ti wow fadeIn">Autofiltro</h2><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        O autofiltro é uma das opções mais rápidas de filtro e também mais flexível. Ao selecionar a opção, 
        automaticamente será criada no topo da matriz uma seta para seleção da informação a ser filtrada, 
        ao clicar no combo (ou seta) será exibida uma caixa de diálogo com várias opções de filtro.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->
         <br>

         <div class="passos">
                    <!-- Parágrafo com a biblioteca de animação  -->
                    <p class="wow fadeIn" id="text-left" data-wow-delay="0.3s">
                    <i class="fa fa-dot-circle text-success" style="color: #44833d;"></i> As duas opções iniciais são de classificação dos dados, pode selecionar na ordem crescente ou decrescente;<br>
                    <i class="fa fa-dot-circle text-success" style="color: #44833d;"></i> O segundo bloco são opções predefinidas de filtros. A primeira opção de 10 primeiros resultados, 
                  exibe os maiores valores da coluna, só funciona com célula que possua números, a segunda opção é seleção 
                  dos dados vazios e, por fim, os não vazios;<br>
                  <i class="fa fa-dot-circle text-success" style="color: #44833d;"></i> Filtro padrão é a segunda opção filtragem, explicaremos a seguir;<br>
                  <i class="fa fa-dot-circle text-success" style="color: #44833d;"></i> A relação exibida é a consolidação dos dados da coluna, desmarque a opção todos abaixo e selecione o resultado que deseja exibir. Se quiser desmarcar ou marcar todas as opções, utilize os botões ao lado de “todos”. Agora, é só confirmar e os dados que serão filtrados.</p>
                    <!--  Fim do Parágrafo com a biblioteca de animação -->
                  <div>

                    <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 18:</strong>
              Autofiltro</p>
              <div class="zoom">
                <a href="imgs01/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                  <img src="imgs01/Figura18.png" height="auto" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura18.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
                  </div>             
                </div>

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
                    <p class="txt-caixasecundaria">Sempre que o filtro estiver ativo, a seta ficará marcada em azul, 
                      como no exemplo da imagem 17. Quando fazemos muito filtros e queremos desabilitar algum, esta é 
                      a melhor forma de localizar os valores filtrados.</p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

          <!--  Título Calc10 -->
        <h2 class="ti wow fadeIn">Filtro Padrão</h2><br>

        <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        A funcionalidade é utilizada para definir critérios de filtros preestabelecidos, ao clicar na opção 
        de Filtro Padrão poderão ser definidos condições para seleção das informações, algumas das condições são >, <, 
        contém, termina com, entre outras, acreditamos que cada opção é autoexplicativa, então não iremos nos aprofundar. 
        É possível adicionar vários parâmetros, a medida que forem sendo adicionados novos, devemos especificar o operador E ou OU.
         O E determina que o filtro deverá atender as duas condições e o OU determinar uma condição ou outra.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

         <!-- IMAGEM NO SITE  -->
         <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 19:</strong>
              Filtro Padrão</p>
              <div class="zoom">
                <a href="imgs01/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                  <img src="imgs01/Figura19.png" height="auto" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura19.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->

          <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        Para deixar mais claro segue um exemplo (imagem 19), se selecionarmos o produto = Borracha E com faturamento >= 100,
         serão exibidos todos os produtos relacionados a Borracha com faturamento de maior ou igual a 100. No caso do emprego do OU, 
         serão exibidos os produtos relacionados à Borracha ou os vários produtos que tenham faturamento >= 100.<br><br>
          Na parte abaixo das condições, clique em Opções para exibir critérios adicionais de seleção. São elas:<br><br>
          1. Distinção entre maiúsculas e minúsculas;<br><br>
          2. Expressões Regulares, como a ajuda do LibreOffice define “Se a caixa de seleção Expressões 
          regulares estiver selecionada, você poderá usar expressões regulares no campo Valor se a caixa de listagem 
          Condição estiver definida em ‘=’ IGUAL ou ‘<>’ DIFERENTE. Isso também se aplicará às respectivas células designadas para um filtro avançado;”<br><br>
          3. Sem Duplicatas – exclui os dados duplicados da seleção;<br><br>
          4. dados para – copia a seleção efetuada para algum outro da planilha.
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->

         <!-- IMAGEM NO SITE  -->
         <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
              <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 20:</strong>
              Filtro Padrão</p>
              <div class="zoom">
                <a href="imgs01/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                  <img src="imgs01/Figura20.png" height="auto" alt="Imagem que remete a organização" id="img-1">
                </a>
              </div>
              <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
            </div>

            <!-- Imagem - MODAL-->
            <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                <div class="modal-content w-75">
                  <img class="img-fluid" src="imgs01/Figura20.png" alt="Alt da imagem fica aqui">
                </div>
                <div class="modal-footer w-75 bg-light justify-content-center">
                  <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                </div>
              </div>
            </div>
            <!-- Imagem - End-->
            <br>

            <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" id="" data-wow-delay="0.3s">
        <strong>Parabéns! Nome_Completo Você finalizou o Topico 02 do modulo 01 do curso Calc Intermediário e Avançado. Boa sorte no Próximo Topico!</strong>
          </p>
         <!--  Fim do Parágrafo com a biblioteca de animação -->



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
</div>
</div>
</div>

  <!-- FOOTER  -->
  <?php
  include('layout/footer.php');
  ?>
  <!-- FIM DO FOOTER  -->

</body>

</html>