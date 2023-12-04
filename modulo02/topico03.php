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
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">03 - Funções</h2><br>
                        <!--  Título Principal -->

                        <!--  Objetivo -->
                        <p class="wow fadeIn" style="margin-bottom: 10px;"><strong>Objetivo:</strong> Trabalhar com funções de pesquisa, que auxiliem na busca mais rápida por informações.</p>
                        <br>

                        <!--  Título Calc01 -->
                        <h2 class="ti wow fadeIn">Proteção de Todas as Células e Planilhas</h2><br>
                        
                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Essa categoria é composta por funções que localizam 
                            valores em uma lista ou retornam sua referência. Existem 18 funções nessa categoria. Dentre elas, 
                            vamos conhecer algumas de grande utilidade no desenvolvimento de planilhas inteligentes.<br><br>

                            A seguir, você conhecerá as funções PROCV, PROCH, ÍNDICE e CORRESP. Em muitos casos, 
                            elas trabalham em conjunto, proporcionando excelentes resultados.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!--  Título Calc01 -->
                        <h2 class="ti wow fadeIn">PROCV</h2><br>
                        
                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >A função PROCV é uma função de procura muito útil.
                             Com ela podemos fazer uma busca de um determinado valor dentro de um intervalo e retornar como resultado um valor 
                             de uma coluna adjacente.<br><br>

                            A estrutura da função PROCV é a seguinte:<br><br>

                            <strong>=PROCV (VALOR_PROCURADO; INTERVALO_DE_PESQUISA; ÍNDICE_DA_COLUNA; ORDEM)</strong><br><br>

                            O valor procurado é pesquisado dentro da primeira coluna do intervalo de pesquisa. Quando o valor é encontrado, 
                            o resultado correspondente, indicado pelo índice da coluna, é apresentado. A ordem é um argumento opcional, que 
                            pode assumir o valor verdadeiro ou falso. Caso tenha o valor falso, a pesquisa será realizada sempre considerando 
                            valores exatos. Por exemplo, podemos fazer uma procura por dados de uma pessoa a partir do seu nome ou do seu número de cadastro.<br><br>

                            No exemplo abaixo, temos uma tabela com dados de alunos e suas respectivas notas.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 14:</strong>
                        Definir nome</p>
                        <div class="zoom">
                            <a href="imgs02/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                            <img src="imgs02/Figura14.png" height="auto" width="600px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs02/Figura14.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >Para fazer uma busca pelo desempenho dos alunos na disciplina, 
                            podemos usar a função PROCV. Procurando pelo campo de matrícula na primeira coluna do intervalo, podemos 
                            achar os demais dados do aluno. Se desejássemos como resultado o nome do aluno cuja matrícula é 126-4, 
                            teríamos a seguinte fórmula:<br><br></p>

                            <p class="wow fadeIn" data-wow-delay="0.3s" id="text-center"><strong>=PROCV(H9;A10:D18;2;FALSO)</strong></p><br>

                            <p class="wow fadeIn" data-wow-delay="0.3s" >O resultado seria o nome Éverton Brenner Oliveira. Para chegar a esse resultado, a função procurou 
                            pela matrícula 126-4 na primeira coluna do intervalo A10:D18. Ao encontrar o registro pesquisado, a 
                            função verificou qual o índice da coluna do intervalo A10:D18. O índice, cujo valor é 2, indica a segunda 
                            coluna do intervalo. A intersecção entre a linha indicada pelo número de matrícula e o índice da coluna do 
                            intervalo indicam o resultado final da fórmula.<br><br>

                            Para evitar a pesquisa por aproximação, inserimos o quarto argumento com o valor FALSO.<br><br>

                            Dessa forma, somente os valores existentes no intervalo retornarão resultados válidos.
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
                    <p class="txt-caixasecundaria">- Sempre utilizar intervalos ordenados pela primeira coluna;<br>
- Usar, na primeira coluna, valores únicos e não nulos.</p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

            <!--  Título Calc01 -->
            <h2 class="ti wow fadeIn">Função PROCH( )</h2><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Essa função localiza um valor na linha 
                superior de uma tabela ou matriz de valores e retorna um valor na mesma coluna de
                 uma linha especificada na tabela ou matriz.<br><br>

                Use<strong>PROCH</strong> quando seus valores de comparação estiverem localizados em uma linha ao longo 
                da parte superior de uma tabela de dados e você quiser observar um número específico de 
                linhas mais abaixo.<br><br>

                A sintaxe é a seguinte:<br><br></p>

                <p class="wow fadeIn" id="text-center" data-wow-delay="0.3s" > <strong> =PROCH(valor_procurado;matriz_tabela;núm_índice_lin; procurar_intervalo]) </strong></p><br>

                <p class="wow fadeIn" data-wow-delay="0.3s" > onde:<br><br></p>

                <div class="passos">
              <div> <p class="wow fadeIn" data-wow-delay="0.3s" >
                <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> <strong>Valor_procurado</strong> – É o valor a ser localizado na primeira linha da tabela. Valor_procurado pode 
                ser um valor, uma referência ou uma sequência de caracteres de texto.<br><br>

                <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> <strong>Matriz_tabela</strong> – É uma tabela de informações, onde os dados devem ser procurados.<br><br>
                Use uma referência para um intervalo ou um nome de intervalo.<br><br>

                – Os valores na primeira linha de matriz_tabela podem ser texto, números ou valores lógicos.<br><br>

                – Se procurar_intervalo for VERDADEIRO, os valores na primeira linha de matriz_ 
                tabela deverão ser colocados em ordem ascendente: ...-2, -1, 0, 1, 2,... , A-Z, FALSO, 
                VERDADEIRO. Em caso contrário, PROCH pode não retornar o valor correto. Se procurar_ intervalo 
                for FALSO, a matriz_tabela não precisará ser ordenada.<br><br></p>
                </div>
                <!--  Figura da página -->
                <div class="img_apresentacao wow animate__slideInRight" data-wow-delay="0.3s">
                                        <img src="imgs/Group 18.png" alt="">
                                        <p class="FonteFigura FonteMenor text-secondary" id="text-freepik">
                <strong>Fonte: </strong>
                <a href="https://br.freepik.com/vetores-gratis/gerente-dando-documento-ao-chefe-feminino-para-assinatura-lider-assistente-masculino-acordo-ilustracao-de-desenho-animado_12699157.htm#page=2&query=vetor%20pessoa%20com%20planilha&position=5&from_view=search&track=ais&uuid=43b0aa11-e3b8-493b-b52f-79f523481c0e"
                    target="_blank" rel="noopener noreferrer"> <strong> Imagem retirada do
                        Freepik</strong></a>
            </p>
                                                        </div>
                </div>
                <p class="wow fadeIn" data-wow-delay="0.3s" >
                    
                – Textos em maiúsculas e minúsculas são equivalentes.<br><br>

                – Classifique os valores em ordem crescente, da esquerda para a direita. 
                Para obter mais informações, consulte Classificar dados.<br><br>

                <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> <strong>Núm_índice_lin</strong> – É o número da linha em matriz_tabela, da qual o valor 
                correspondente deve ser retirado. Um núm_índice_lin equivalente a 1 retorna o 
                valor da primeira linha na matriz_tabela, um núm_índice_lin equivalente a 2 retorna 
                o valor da segunda linha na matriz_tabela e assim por diante.
                Se núm_índice_lin for menor do que 1, PROCH retornará o valor de erro #VALOR!; se núm_índice_lin 
                for maior do que o número de linhas na matriz_tabela, PROCH retornará o valor de erro #REF!.<br><br>

                <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> <strong>Procurar_intervalo</strong> – É um valor lógico que especifica se você quer que PROCH localize uma 
                correspondência exata ou aproximada. Se VERDADEIRO (1) ou omitido, uma correspondência aproximada 
                é retornada. Em outras palavras, se uma correspondência exata não for localizada, o valor maior mais 
                próximo que seja menor que o valor_procurado será retornado. Se FALSO (0), PROCH encontrará uma correspondência exata.<br><br>

                Se nenhuma correspondência for localizada, o valor de erro #N/D será retornado.<br><br>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <div class="passos" style="justify-content: space-around;">
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
                    <p class="txt-caixasecundaria"><i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Se PROCH não localizar valor_procurado e procurar_intervalo
                         for VERDADEIRO, PROCH usará o maior valor que é menor do que o valor_procurado;<br><br>

                         <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Se o valor_procurado for menor do que o menor valor na primeira linha de matriz_ tabela, 
                        PROCH retornará o valor de erro #N/D;<br><br>

                        <i class="fa-solid fa-arrow-right" style="color: #44833d"></i> Se procurar_intervalo for FALSO e valor_procurado for texto, você poderá usar os caracteres
                         curingas ponto de interrogação (?) e asterisco (*) em valor_procurado. Um ponto de interrogação 
                         coincide com qualquer caractere único; um asterisco coincide com qualquer sequência de caracteres.<br>
                        Se você quiser localizar um ponto de interrogação ou asterisco real, digite um til (~) antes do caractere.</p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA FIQUE ATENTO -->

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
                    <p class="txt-caixasecundaria">Que tal praticar? Tente resolver a “planilha 05” que 
                        está disponível dentro do material do curso, utilizando as fórmulas do PROCV e PROCH!
                        <strong>Esta atividade não precisa ser entregue à escola. </strong></p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->
            </div>

            <!--  Título Calc01 -->
            <h2 class="ti wow fadeIn">Função Índice( ) + Função CORRESP( )</h2><br>
            
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Embora a função PROCV dê conta do recado 
                na maioria dos casos, existem situações, em que ela sozinha não resolve o problema.<br><br>

                E é aí que entra a fórmula que combina a função ÍNDICE e CORRESP.<br><br>

                Vamos ver primeiro como elas funcionam separadamente.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

             <!--  Título Calc01 -->
             <h2 class="ti wow fadeIn">Índice</h2><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Esta função funciona de maneira simples, o 
                usuário indica a área, a linha e a coluna e a fórmula retorna o dado que está na posição indicada pelo usuário.<br><br></p>

                            <p class="wow fadeIn" data-wow-delay="0.3s" id="text-center"><strong>Sintaxe: =ÍNDICE(matriz; núm_linha; [núm_coluna])</strong></p><br>

                            <p class="wow fadeIn" data-wow-delay="0.3s" >Onde:<br><br>

                            <span style="color:red">matriz</span> → área onde estão os dados desejados.<br><br>

                            <span style="color:blue">núm_linha</span> → o número da linha onde está o dado desejado.<br><br>

                            <span style="color:green">[núm_coluna]</span> → o número da coluna onde está o dado desejado.<br><br><br>
                            </p>

                            <div class="passos" style="justify-content: space-around;">
                                <div>
                                <p class="wow fadeIn" data-wow-delay="0.3s" >
                            Digamos que queiramos usar a função índice para encontrar a informação 
                            correspondente ao Brasil para o Dado 3, assim nossa função deve ser montada da seguinte maneira:<br><br>

                            <span style="color:red">matriz</span> → Toda tabela onde estão os dados dos países do Mercosul.<br><br>

                            <span style="color:blue">matriz</span> → O número da linha que o Brasil está em relação à tabela de dados dos países.<br><br>

                            <span style="color:green">[núm_coluna]</span> → O número da coluna onde está o Dado 3 em relação à tabela de dados dos países.<br><br>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
</div>

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01 wow animate__slideInRight" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 15:</strong>
                        Definir nome</p>
                        <div class="zoom">
                            <a href="imgs02/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                            <img src="imgs02/Figura15.png" height="auto" width="400px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs02/Figura15.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->
                        </div>

                    <!--  Título Calc01 -->
            <h2 class="ti wow fadeIn">Corresp( )</h2><br>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" >Na tabela abaixo, queremos determinar em qual posição a Rússia aparece organizada nos dados.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <div class="passos">
                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01 wow animate__slideInLeft" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 16:</strong>
                        Definir nome</p>
                        <div class="zoom">
                            <a href="imgs02/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                            <img src="imgs02/Figura16.png" height="auto" width="400px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs02/Figura16.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" >
                            <span style="color:red">matriz</span> → Rússia é pois, o dado que queremos definir a posição.<br><br>

                            <span style="color:blue">matriz</span> → A área onde aparece o dado Rússia.<br><br>

                            <span style="color:green">[núm_coluna]</span> → 0 (zero) é pois, o valor que indica a função para a qual queremos uma
                             correspondência exata, ou seja, queremos procurar exatamente pela posição de Rússia.<br><br>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        </div>

                        <!--  Título Calc01 -->
            <h2 class="ti wow fadeIn">Índice( )+Corresp( )</h2><br>

            <div class="passos" style="justify-content: space-around;">
            <!-- IMAGEM NO SITE  -->
            <div class="text-center img-01 wow animate__slideInLeft" data-wow-delay="0.3s" id="img-right">
                        <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 17:</strong>
                        Definir nome</p>
                        <div class="zoom">
                            <a href="imgs02/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                            <img src="imgs02/Figura17.png" height="auto" width="400px" alt="Imagem que remete a organização" id="img-1">
                            </a>
                        </div>
                        <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                        </div>

                        
                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                            <img class="img-fluid" src="imgs02/Figura17.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                            <p class="text-secondary"><strong>Fonte:</strong> CEDIS.</p>
                            </div>
                        </div>
                        </div>
                        <!-- Imagem - End-->

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
                    <p class="txt-caixasecundaria">Que tal praticar? Tente resolver a “planilha 06” que está disponível dentro do 
                        material do curso, utilizando as fórmulas do ÍNDICE e CORRESP!<br>
                        <strong>Esta atividade não precisa ser entregue à escola. </strong></p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->

            </div>
            <br><br>

            <!-- Parágrafo com a biblioteca de animação  -->
        <p class="wow fadeIn" data-wow-delay="0.3s"><strong>Parabéns! Nome_Completo Você finalizou o Topico 03 
          do modulo 02 do curso Calc Intermediário e Avançado. Boa sorte no Próximo Modulo!</strong>
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