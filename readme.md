# Template Wordpress

Um repositório com um template inicial para iniciar novos projetos em Wordpress usando o pré-processador de estilos e scripts com o Laravel Mix.

## Tecnologias
- Sass
- Bootstrap
- Javascript
- HTML
- Laravel-Mix
- PHP
- Wordpress

## Como iniciar o projeto Front-End

1 - Crie um repositório para o projeto e clone o projeto na sua maquina

2 - Rode `git flow init` para trabalharmos de forma organizada

3 - Extraia o zip `wp-tema-padrao` no projeto

4 - Rode o comando no terminal na pasta raiz do projeto `npm install` para baixar as dependencias

5 - agora desenvolva htmls, css e ja de forma organizada e padronizada

6 - Todos seus arquivos .php, pasta upload devem ser criados na pasta /thema que vai se tornar o tema no wordpress após conclusão dos HTMLs

7 - por fim procure se divertir, de séria já chega a vida =]


## Como iniciar o projeto Wordpress

1 - Rode na raiz do projeto o comando `wp core download --locale=pt_BR` para baixar o wordpress

2 - abra a pasta do wordpress e acesse `wp-content/themes/`

3 - Exclua os temas padrões 

4 - Mova a pasta `thema` para `wp-content/themes/` 

5 - Edita o arquivo `style.css` em `wp-content/themes/thema` com os dados do projeto

6 - rode `npm install` ou `npm run watch` na raiz do projeto

7 - e desenvolva algo bem legal e organizado =]

## Install Wordpress CLI

Site: [acessar](https://wp-cli.org/#installing)

Ajuda: [acessar](https://www.hastedesign.com.br/wordpress/como-instalar-o-wordpress-em-portugues-com-o-wp-cli/)

1 - curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

2 - php wp-cli.phar --info

3 - chmod +x wp-cli.phar

4 - sudo mv wp-cli.phar /usr/local/bin/wp

## Plugins para projetos

1 - (*) Contact Form 7 - [download](https://br.wordpress.org/plugins/contact-form-7/)

2 - (*) Advanced Custom Fields - [download](https://github.com/wp-premium/advanced-custom-fields-pro)

3 - (*) Kit Google - [download](https://br.wordpress.org/plugins/google-site-kit/) - Configurar quando estiver publicado

4 - (*) Yoast - [download](https://br.wordpress.org/plugins/wordpress-seo/) - Instalar somente após publicação

5 - (*) SSL - [download](https://br.wordpress.org/plugins/really-simple-ssl/) - Instalar somente após publicação

6 - Categories Images - [download](https://br.wordpress.org/plugins/categories-images/)

7 - Custom Taxonomy Order - [download](https://br.wordpress.org/plugins/custom-taxonomy-order-ne/)

8 - (*) GDPR Consentimento de Cookie - [download](https://wordpress.org/plugins/cookie-law-info/)

9 - WP Mail SMTP - [download](https://br.wordpress.org/plugins/wp-mail-smtp/)

10 - (*) WP Migrate DB - [download](https://br.wordpress.org/plugins/wp-migrate-db/)

11 - Redirection - [download](https://br.wordpress.org/plugins/redirection/)

12 - (*) Insert Headers and Footers - [download](https://br.wordpress.org/plugins/insert-headers-and-footers/)

13 - (*) Advanced Contact form 7 DB - [download](https://br.wordpress.org/plugins/advanced-cf7-db/)

14 - (*) EWWW Image Optimizer - [download](https://wordpress.org/plugins/ewww-image-optimizer/)

15 - (*) NitroPack - [download](https://wordpress.org/plugins/nitropack/)

16 - (*) Disqus - [download](https://br.wordpress.org/plugins/disqus-comment-system/)

17 - ACF Font Awesome - [download](https://br.wordpress.org/plugins/advanced-custom-fields-font-awesome/)

