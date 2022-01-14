import axios from 'axios';

import AjaxSetup from './AjaxSetup';
import MobileToggle from './MobileToggle';

AjaxSetup();
MobileToggle();

// $('.banners').cycle({
//     slides: '>.slide',
// });


// Hover de submenu termos

function toggleButton() {
    var subMenu = document.getElementById("dropdown-content");
    
    if(subMenu.style.display == "none") {
        subMenu.style.display = "block";
    } else if (subMenu.style.display == "block") {
        subMenu.style.display = "none";
    } else {
        subMenu.style.display = "block";
    }
    }
   
var termos = document.getElementById("termos");
termos.addEventListener("click", toggleButton, false);

// MenuBurger

var botao = document.getElementById("menuburger");
botao.addEventListener("click", abrirBurger, false);

function abrirBurger() {
    var temp = document.getElementById("menuburgerlist");
    temp.classList.toggle("menuburgerlist");
}

// EFFECTS FUNCINANDO

function addClass(element, className) {
    const arrayClasses = element.className.split(" ");
    if (arrayClasses.indexOf(className) === -1) {
        element.className += " " + className;
    }
}

//EFFEITOS - HOME

document.addEventListener("DOMContentLoaded", function(event) {
    document.addEventListener("scroll", function(event) {
        const animatedBoxescards = document.getElementsByClassName("cards");
        const animatedBoxes = document.getElementsByClassName("serv1");
        const animatedBoxes2 = document.getElementsByClassName("serv2");
        const animatedBoxes3 = document.getElementsByClassName("serv3");
        const animatedBoxesbtn = document.getElementsByClassName("btn_ser");
        const animatedBoxesbox = document.getElementsByClassName("boxbox");
        const windowOffsetTop = window.innerHeight + window.scrollY;

// HOME / Diferenciais / vindo por baixo

        Array.prototype.forEach.call(animatedBoxescards, (animatedBoxcards) => {
            const animatedBoxOffsetTop = animatedBoxcards.offsetTop;

            if (windowOffsetTop >= animatedBoxOffsetTop) {
                addClass(animatedBoxcards, "cards2");
            }
        });

// HOME / Serviços / vindo pelas laterais

        Array.prototype.forEach.call(animatedBoxes, (animatedBox) => {
            const animatedBoxOffsetTop = animatedBox.offsetTop;

            if (windowOffsetTop >= animatedBoxOffsetTop) {
                addClass(animatedBox, "servcenter");
            }
        });

        Array.prototype.forEach.call(animatedBoxes2, (animatedBox2) => {
            const animatedBoxOffsetTop = animatedBox2.offsetTop;

            if (windowOffsetTop >= animatedBoxOffsetTop) {
                addClass(animatedBox2, "servcenter");
            }
        });

        Array.prototype.forEach.call(animatedBoxes3, (animatedBox3) => {
            const animatedBoxOffsetTop = animatedBox3.offsetTop;

            if (windowOffsetTop >= animatedBoxOffsetTop) {
                addClass(animatedBox3, "servcenter");
            }
        });

// HOME / Serviços / botão 

        Array.prototype.forEach.call(animatedBoxesbtn, (animatedBoxbtn) => {
            const animatedBoxOffsetTop = animatedBoxbtn.offsetTop;

            if (windowOffsetTop >= animatedBoxOffsetTop) {
                addClass(animatedBoxbtn, "btn_new");
            }
        });

// EFFEITOS - SERVIÇOS

        Array.prototype.forEach.call(animatedBoxesbox, (animatedBoxbox) => {
            const animatedBoxOffsetTop = animatedBoxbox.offsetTop;

            if (windowOffsetTop >= animatedBoxOffsetTop) {
                addClass(animatedBoxbox, "boxbox2");
            }
        });
    });
});


// AVISO DE COOKIES
$(".aviso-cookies").show();

$(".aceitar-cookies").click(function () {
var url = window.location.origin + window.location.pathname +"/aceite-de-cookies";

$.ajax({
    type: "POST",
    url: url,
    success: function (data, textStatus, jqXHR) {
    $(".aviso-cookies").hide();
    },
    error: function (jqXHR, textStatus, errorThrown) {
    console.log(jqXHR, textStatus, errorThrown);
    },
    });
});