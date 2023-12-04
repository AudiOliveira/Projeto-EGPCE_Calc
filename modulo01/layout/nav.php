<!-- NAV  -->
<!-- coloquei um id pra chamar la no js --jayron-- -->
<nav class="navbar shadow-sm" id="navmenu">
    <div class="container-fluid">

        <!-- RESPONSIVIDADE -->

        <!-- MENU HAMBURGUER -->
        <button class="btn" id="btn_menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-2"></i></button>
        <!-- FIM DO MENU HAMBURGUER -->

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header text-center">
                <h5 class="offcanvas-title " id="offcanvasScrollingLabel"><img src="imgsmodulo01/logoEGP2.png"
                        alt="logo" id="img_logo">
                </h5>
                <button type="button" class="btn-close" id="close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <!-- CONTEÚDO DO MENU LATERAL RESPONSIVO -->
                <nav class="menulateral-responsivo">
                    <!-- os topicos começam aqui  -->
                    <ul>
                        <li class="menu">
                            <a href="index.php">
                                <span class="icon "><i class="bi bi-person-workspace"></i>
                                </span>
                                <span class="txt">Apresentação</i></span>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="topico01.php">
                                <span class="icon "><i class="bi bi-1-circle"></i>
                                </span>
                                <span class="txt">Pastas de Trabalho</i></span>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="topico02.php">
                                <span class="icon "><i class="bi bi-2-circle"></i>
                                </span>
                                <span class="txt">Organização de Dados</i></span>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="topico03.php">
                                <span class="icon "><i class="bi bi-3-circle"></i>
                                </span>
                                <span class="txt">Funções Lógicas</i></span>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="referencias.php">
                                <span class="icon"><i class="bi bi-book-half"></i></span>
                                <span class="txt">Referências</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- FIM DA RESPONSIVIDADE -->

        <!-- CONTEÚDO DA NAV -->
        <a class="navbar-brand"></a>
        <form class="form" role="search">
            <a class="nav-link active nonedec me-3" aria-current="page" href="#">Nome_Completo</a>

            <button type="button" class="btn btn-outline-success" id="moodle">Ir para o Moodle</button>

            <!--BOTÃO MODO ESCURO -->
            <button type="button" id="btn_tema">
                <div id="icone"></div>
                <div id="txtBtn"> Mudar Tema</div>
            </button>
            <!--BOTÃO MODO ESCURO -->

        </form>
    </div>
</nav>
<!-- FIM DA NAV -->