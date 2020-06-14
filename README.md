He creado este proyecto con el siguiente comando del symfony cli:
$ symfony new Habitissimo_backend_API_test

configurar doctrine como especifica en esta url:
https://symfony.com/doc/current/doctrine.html

crear la base de datos tras configurar la conexión en .env:
$ php bin/console doctrine:database:create

creamos el entity usuario:
$ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console make:entity
