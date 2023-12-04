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
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">03 - Mudança de Hábitos</h2><br>
                        <!--  Título Principal -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01 wow animate__zoomIn" data-wow-delay="0.3s" id="img-left">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 3:</strong>
                                Representação de hábitos saudáveis</p>
                            <div class="zoom">
                                <a href="imgs02/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs02/Figura03.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>banco de imagens
                                gratuitas do canvas, 2021.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs02/Figura03.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>banco de imagens gratuitas do
                                        canvas, 2021.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s" id="text-left">A realização de um objetivo futuro é
                            o resultado de
                            suas ações no presente. Se
                            seus hábitos te levam à direção oposta de tudo que deseja atingir, será necessário que uma
                            mudança seja realizada, pois continuar fazendo as mesmas coisas vai te levar a obter o
                            <strong> mesmo resultado </strong>. Isso é muitas vezes entendido como sair da zona de
                            conforto. Eu pessoalmente não gosto dessa expressão porque nossa mente é muito astuta e,
                            como eu disse na primeira parte, nossa vida é em grande medida condicionada pelo nosso
                            inconsciente. Você pode dizer à sua mente, vamos sair da zona de conforto e acreditar
                            piamente nisso e seu inconsciente simplesmente sabotar todas as suas ações.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">Uma das funções primordiais de nosso cérebro é a
                                            autopreservação. Logo, a tendência a se manter como se sente confortável é
                                            prioridade para ele. Por esta razão, quando pensamos em mudar de hábitos já
                                            perpetuados, nossos cérebros recebem os sinais de que algo está errado e
                                            ativa a função de preservação. “Isso coloca a mente subconsciente no modo de
                                            luta ou fuga para tentar preservar o corpo através da inação, na tentativa
                                            de evitar que aconteçam perigos. Isso resulta em um sentimento cada vez mais
                                            lento, levando-nos a procrastinar” (JONES, 2020, p.7).
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="wow fadeIn" data-wow-delay="0.3s">Para evitar tal movimento do cérebro é preciso que
                            você substitua hábitos, mas
                            isso só ocorre a partir de uma nova visão e de um bom planejamento. Desse modo, eu evito
                            pensar que estou saindo da zona de conforto. Em contraste, eu aviso ao meu cérebro que
                            estaremos indo em direção a uma <strong> zona de conforto </strong> de maior qualidade,
                            afinal, se eu consigo dirigir melhor as minhas atividades eu posso reduzir o estresse e as
                            preocupações e talvez tenha tempo para atividades recreativas e sociais.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        <br>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3 wow fadeIn" data-wow-delay="0.3s">

                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class=" blockquote">
                                    <p> Uma nova zona de conforto implica novos hábitos, mas estes não são elaborados
                                        para tirar o meu conforto e sim, melhorar a minha qualidade de vida. Desse modo,
                                        é preciso considerar que “a única maneira de fazer mudanças pessoais duradouras
                                        (...) subconscientes ou conscientes, é reprogramando sua mente subconsciente”.
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title"> (JONES, 2020, p.7)</cite>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->
                        <br>

                        <p>Uma boa ideia para começar a <strong> mudar hábitos </strong> é avaliar como seu tempo está
                            sendo utilizado no
                            presente. Anote todas as suas atividades, durante as 24 horas e perceba como o seu tempo
                            está sendo investido. Faça sua lista de prioridades e uma lista de tarefas que deve ser
                            executada para desafogar sua programação. Planeje sua semana escrevendo tudo o que precisa
                            fazer em cada dia e inclua o horário.</p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">Se necessário, compre ou confeccione pastas,
                                            cestas, caixas, colmeias e demais acessórios de organização e limpeza. Eu
                                            indico a utilização de um planner. Não esqueça de incluir nos novos hábitos
                                            os cuidados com a saúde e as rotinas de autocuidado. Qual foi a última vez
                                            que realizou um check-up?
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">Além de objetivos claros, para formular novos
                            hábitos é bastante importante que você estabeleça metas com os prazos necessários para a
                            execução das atividades. Isso evitará que você se comprometa demais ou procrastine no
                            caminho da execução das atividades. Vale lembrar que pausas e descanso são muito importantes
                            no processo, porém quando você se permite entrar no estado mental da procrastinação será
                            sempre um sacrifício voltar à ativa.</p>


                        <p class="wow fadeIn" data-wow-delay="0.3s">Sugiro que você preencha os novos hábitos que deseja
                            absorver para a nova versão de você.
                            Pense nesses hábitos em relação ao que foi dito acima sobre o sistema s. Desse modo, os
                            hábitos que possuem utilidade para sua nova identidade, os relacionados à organização e
                            limpeza e os que seriam necessários para gerar comprometimento a longo prazo e disciplina.
                            Lembre-se que o que for definido aqui no curto prazo deve viabilizar o longo prazo já
                            determinado na primeira parte.<br>
                        </p>
                        <br>

                        <div class="apresentacao">

                            <div class="img_apresentacao wow animate__zoomIn">
                                <img src="imgs/Group 11.png" alt="">
                            </div>
                            <div>
                                <!-- Parágrafo com a biblioteca de animação  -->
                                <p class="wow fadeIn texto_apresentacao2 wow animate__zoomIn" data-wow-delay="0.3s">
                                    <strong><i class="fa-solid fa-circle-info"></i> Clique nos títulos abaixo para mais
                                        informações</strong>
                                </p><br><br><br>

                                <div class="row">
                                    <div class="col">
                                        <p class="d-flex justify-content-center wow animate__zoomIn">
                                            <a class="btn CorVerdeEstado" id="buton-t3" data-bs-toggle="collapse"
                                                href="#multiCollapseExample1" role="button" aria-expanded="false"
                                                aria-controls="multiCollapseExample1"><i class="fa-solid fa-computer">
                                                    <strong>
                                                        Vida
                                                        Profissional</strong></i></a>
                                        </p>

                                        <div class="collapse multi-collapse" id="multiCollapseExample1">

                                            <table class="table table-bordered border-success">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Objetivo:</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">Quando: [ x ] curto prazo [ ] médio prazo [ ]
                                                            longo
                                                            prazo
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">legado</td>
                                                    </tr>
                                                </tbody>
                                            </table><br>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <p class="d-flex justify-content-center wow animate__zoomIn"><button
                                                class="btn CorVerdeEstado" id="buton-t3" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"
                                                aria-expanded="false" aria-controls="multiCollapseExample2"><i
                                                    class="fa-solid fa-umbrella-beach"> <strong id="text-teste">
                                                        Vida
                                                        Pessoal </strong></i></i></button></p>


                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <table class="table table-bordered border-success">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">Objetivo:</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">Quando: [ x ] curto prazo [ ] médio prazo [ ]
                                                            longo
                                                            prazo
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">legado</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div><br><br>
                        <br>
                        <p class="wow fadeIn" data-wow-delay="0.3s">Por fim, cabe ressaltar que toda agenda deve
                            funcionar como um ideal a ser perseguido. Porém,
                            é necessário a consciência de que nem sempre todas as atividades poderão ser de fato
                            executadas pois a vida também é cheia de imprevistos. Se porventura você não conseguir
                            realizar certas atividades em um dia não deve se desgastar com culpa, mas apenas
                            redirecionar as suas ações.</p>
                        <br>

                        <!-- VÍDEO DO YOUTUBE -->
                        <div class="video wow fadeInDown">
                            <div>
                                <iframe width="700" height="380" src="https://www.youtube.com/embed/HMeSOjEMqrw"
                                    title="6 Micro-Hábitos diários para Conquistar seus Objetivos" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="descricao">
                                <div class="titulo_video">Saiba mais</div>
                                <p>Neste vídeo Chistian Barbosa relata de forma simples 06 (seis)
                                    micro-hábitos para
                                    serem incorporados no nosso dia a dia e que podem nos auxiliar a trabalhar melhor
                                    com o nosso tempo. Autor do livro Estratégias Práticas para Ganhar Mais Tempo
                                    (2013), é considerado o maior especialista do pa´s em gerenciamento do tempo e
                                    produtividade pessoal. Um dos mais jovens profissionais certificados pela Microsoft.
                                </p>
                            </div>
                        </div>


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