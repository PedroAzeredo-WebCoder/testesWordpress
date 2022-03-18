const mix = require('laravel-mix');
const fs = require('fs');

// directory to check if exists
const dir = './wp-content';

if (fs.existsSync(dir)) {
    var dirRaiz = "./wp-content/themes/thema/assets";
} else {
    var dirRaiz = "./thema/assets";
}

mix.options({
    publicPath: "./"
});

mix.webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ],
        alias: {
            jquery: 'jquery/src/jquery',
        },
    },
});

/**
 * Javascripts
 */
mix.js('resources/js/app.js', dirRaiz + '/js')
    .sourceMaps();

/**
 * Folhas de Estilo
 */
mix.sass('resources/scss/app.scss', dirRaiz + '/css')
    .options({
        processCssUrls: false
    });

/**
 * Arquivos de Imagens
 */
mix.copyDirectory('resources/img', dirRaiz + '/img');

/**
 * Slick Images
 */
mix.copyDirectory(
    'node_modules/slick-carousel/slick/fonts/',
    dirRaiz + '/fonts'
);

mix.copyDirectory(
    'node_modules/slick-carousel/slick/ajax-loader.gif',
    dirRaiz + '/img'
);

/**
 * 
 * Arquivos de fontes
 */
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts/', dirRaiz + '/fonts');