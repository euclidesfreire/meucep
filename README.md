Introdução
------------
Sistema de busca de endereço com API viacep.api para teste de seletivo.

Utilizou-se uma estrutura de pastas para organizar a soluação
- teste 
    - app
        - controllers (com a classe Address)
        - views (como a página em HTML)
        - core.php (coração da aplicação)
    - public
        - assets 
            - css
        -imgs
        - .htaccess
        - index.php 
    - vendor
    - composer.json
    - README.me

Tecnologias utilizadas:
-----------------------
Backend:
--------
 * PHP 8.0
 * Composer

Frontend:
---------
 * HTML
 * CSS


Instalação
------------

Usando composer (recomendado)
----------------------------
Clone o repositório e manualmente execute o 'composer':

    cd (Caminho do Diretório em que desejas clonar)
    git clone https://github.com/euclidesfreire/fichacatalografica.git
    cd fichacatalografica

    Caso seja necessário, execute. 

    composer install ou composer dump-autoload

Agora execute o comando abaixo para iniciar a aplicação:

    php -S localhost:8080 -t public

