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
            <h2 class="Titulo fw-bolder">03 - Funções Lógicas</h2><br>
            <!--  Título Principal -->

            <div class="passos">
              <div>
      
            <!--  Título Calc11 -->
            <h2 class="ti wow fadeIn">Função E( )</h2>

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left">Essa função é utilizada em conjunto com a função SE e permite criar até 30 condições, 
              que retornarão um valor verdadeiro, se todas elas forem satisfeitas. No entanto, caso uma delas não seja satisfeita, o resultado será falso.<br><br>
              Sintaxe: =SE(E(condição1; condição2);VERDADEIRO;FALSO)<br><br>
              Exemplo de emprego da função lógica E( ) :<br><br>
              Uma escola estabeleceu condições para que os alunos fossem aprovados: obter média maior ou igual a 7 (sete) e frequência maior ou igual a 75% (setenta e cinco por cento).
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
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
            </div> <br>

             <!--  Título Calc12 -->
             <h2 class="ti wow fadeIn">Função Ou( )</h2>

            
            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left">Essa função é utilizada em conjunto com a função SE e 
              permite criar uma cadeia de condições, com uma única diferença em relação à função E: basta que uma condição 
              seja satisfeita, para que o resultado seja verdadeiro.<br><br>
              Exemplo de emprego da função lógica OU( ) :<br><br>
              Um comerciante deseja aumentar suas vendas e propõe a seus clientes que, em compras acima de cinco unidades OU valor 
              gasto acima de R$ 150,00, terão direito a um abatimento de 12%.<br><br>
              Sintaxe: =SE(OU(condição1; condição2);VERDADEIRO;FALSO)
            </p>
            <!--  Fim do Parágrafo com a biblioteca de animação -->
           
            <!--CAIXA DE TEXTO EXEMPLO-->
            <section class="container wow fadeIn" data-wow-delay="0.3s">
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
                    <p class="txt-caixasecundaria">Vá até o material do curso e aproveite para treinar as fórmulas com as tabelas 03 e 04.<br>
                      <strong>Não precisa enviar à atividade para a escola.</strong>
                    <p>
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA EXEMPLO-->

            <!-- Parágrafo com a biblioteca de animação  -->
            <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left"><strong>Parabéns! Nome_Completo Você finalizou o Topico 03 
              do modulo 01 do curso Calc Intermediário e Avançado.</strong></p>
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
    <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">
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