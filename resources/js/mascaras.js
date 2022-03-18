window._ = require('lodash');

try {
    window.Popper = require('@popperjs/core').default;
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

jQuery(function () {
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