require('jquery');
require('bootstrap');
require('@fortawesome/fontawesome-free');
require('slick-carousel');
require('jquery-mask-plugin/dist/jquery.mask.min');
require('./mascaras');

window._ = require('lodash');

try {
    window.Popper = require('@popperjs/core').default;
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

jQuery(function () {
    mainHeight();
    themeColor();
    eyePass();

    $(window).scroll(function () {
        mainHeight();
    })

    $(window).on('resize', function () {
        mainHeight();
    })

    $(window).ready(function () {
        mainHeight();
    })

    $(window).on('load', function () {
        mainHeight();
    })

    //Adiciona margin entre header e a sessao, quando o header for fixo
    function mainHeight() {
        $('header').next().not($('.behind')).css('margin-top', $('header').outerHeight());
    }

    //Adiciona cor principaldo thema nos meta tags do header
    function themeColor() {
        const themeColor = $('[name="theme-color"], [name="msapplication-navbutton-color"], [name="msapplication-TileColor"]');
        const value = getComputedStyle(document.documentElement).getPropertyValue('--bs-primary');
        themeColor.attr('content', value);
    }

    //Oculta Copyright NitroPack Plugin
    document.addEventListener("DOMContentLoaded", function () {
        let divc = document.querySelectorAll('div[style]');
        for (let i = 0, len = divc.length; i < len; i++) {

            let actdisplay = window.getComputedStyle(divc[i], null).display;
            let actclear = window.getComputedStyle(divc[i], null).clear;

            if (actdisplay == 'block' && actclear == 'both') {
                divc[i].remove();
            }
        }
    });

    //Adiciona botão para visualização de senha, caso campo tenha um ID
    function eyePass() {
        element = $("[type='password']");
        if (element.is("[id]")) {
            element.after("<button class='showPass'><i class='fa-solid fa-eye'></i></button>");
            const buttons = element.after();
            buttons.each(function (i) {
                const id = $(this).after().attr('id');
                const button = $(this).siblings('.showPass').eq(i);
                button.attr("toggle", "#" + id);
                $(button).click(function () {
                    $(button).children().toggleClass("fa-eye fa-eye-slash");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") == "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });
            });
        }
    }

    //Adiciona Mascara para telefone
    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ?
                '(00) 00000-0000' :
                '(00) 0000-00009'
        },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        }
    $('.mask-phone , [type="tel"]').mask(SPMaskBehavior, spOptions);

    //Adiciona Validação para campo de e-mail
    $('.mask-email , [type="email"]').blur(function () {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if ($('.mask-email , [type="email"]').val().match(mailformat)) {
            return false;
        } else {
            alert("Você digitou um endereço de e-mail inválido!");
        }
    });
});