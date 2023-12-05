
//BOTÃO BACK TO TOP
let calcScrollValue = () => {
    let scrollProgress = document.getElementById("back_to_top")
    let progressValue = document.getElementById("btn_back")
    let pos = document.documentElement.scrollTop
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
    let scrollValue = Math.round((pos * 100) / calcHeight)

    if (pos > 100) {
        scrollProgress.style.display = "grid"
    } else {
        scrollProgress.style.display = "none"
    }

    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0
    })
    scrollProgress.style.background = `conic-gradient(#03cc65 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
}

window.onscroll = calcScrollValue
window.onload = calcScrollValue


// teste header
var lastScrollTop = 0;
navbar = document.getElementById("navmenu");
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-80px";
    } else {
        navbar.style.top = "0";
    }

    lastScrollTop = scrollTop;
})


//MODO ESCURO 
const btnDarkModeToggle = document.getElementById('btn_tema')
const icon = document.getElementById('icone')
const themeSystem = localStorage.getItem('themeSystem') || 'light'


btnDarkModeToggle.addEventListener('click', () => {

    let oldTheme = localStorage.getItem('themeSystem') || 'light'
    let newTheme = oldTheme == "light" ? "dark" : "light"
    localStorage.setItem('themeSystem', newTheme)
    defineCurrentTheme(newTheme)
});


function defineCurrentTheme(theme) {
    const darkSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16"><path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/><path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/></svg>'

    const lightSvg = '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>'

    document.documentElement.setAttribute("data-theme", theme)
    if (theme == "light") {
        document.getElementById('logo').src = "imgs/logoEGP2.png"
        document.getElementById('img_logo').src = "imgs/logoEGP2.png"
        icon.innerHTML = darkSvg
        return
    }
    document.getElementById('logo').src = "imgs/logoEGP1.png"
    document.getElementById('img_logo').src = "imgs/logoEGP1.png"
    icon.innerHTML = lightSvg
}

defineCurrentTheme(themeSystem)
//FIM DA FUNÇÃO MODO ESCURO 


//Amanda// 

// barra de progresso embaixo - JS 

const progressbar = document.querySelector('#progress-bar')

const section = document.querySelector('section')

/*fazer minha animação e scroll - barra de progresso*/
const animateProgressBar = () => {
    let scrollMouse = -section.getBoundingClientRect().top;
    let progressWidth = (scrollMouse / (section.getBoundingClientRect().height - document.documentElement.clientHeight)) * 100;

    let value = Math.floor(progressWidth)
    console.log(value)

    progressbar.style.width = value + "%"

    if (value < 0) {
        progressbar.style.width = '0%'
    }
}
window.addEventListener('scroll', animateProgressBar)
animateProgressBar()

// CORES DO MENU QUE MUDAM CONFORME O USUARIO MUDA DE PAG

document.addEventListener("DOMContentLoaded", function () {
    const currentPage = window.location.pathname.split("/").pop();
    const links = document.querySelectorAll(".menu a");

    links.forEach(link => {
        const href = link.getAttribute("href");
        if (href === currentPage || link.getAttribute("data-valor") === currentPage) {
            link.classList.add("ativo");
        }
    });
});


// SUBTÓPICO COM JQUERY
$(document).ready(function () {

    // Adicione um evento de clique a todos os botões de dropdown
    $(".dropdown-btn").click(function (event) {
        // Encontre o conteúdo de dropdown associado a este botão
        var dropdown = $(this).next('.dropdown-container');

        dropdown.stop(true, true).slideToggle();

        event.stopPropagation();

        //    fecha o dropdown no evento "mouseleave" na ul "dropDown"
        $('.menulateral').mouseleave(function () {
            dropdown.slideUp();
        });
    });
});

// ################# FUNÇÃO PARA ABRIR OS CARDS COM IMAGEM E TEXTO #################
var cards = document.querySelectorAll('.card');

// Adiciona evento de clique a cada card
cards.forEach(function (card) {
    card.addEventListener('click', function () {
        var isActive = card.classList.contains('active');

        // Remove a classe 'active' de todos os cards
        cards.forEach(function (c) {
            c.classList.remove('active');
        });

        // Adiciona a classe 'active' apenas ao card clicado se não estiver ativo
        if (!isActive) {
            card.classList.add('active');
        }
    });
});
// ################# FUNÇÃO PARA ABRIR OS CARDS COM IMAGEM E TEXTO END #################

// TOOLTIP 
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
// TOOLTIP END 
