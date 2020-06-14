He creado este proyecto con el siguiente comando del symfony cli:
$ symfony new Habitissimo_backend_API_test

configurar doctrine como especifica en esta url:
https://symfony.com/doc/current/doctrine.html

crear la base de datos tras configurar la conexión en .env:
$ php bin/console doctrine:database:create

creamos el entity usuario:
    $ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console make:entity
    name -> string 255
    email -> string 255
    phone -> string 255

creamos el entity de fechas estimadas "EstimatedDate" (pueden ser "Lo antes posible", "de 1 a 3 meses" y "más de 3 meses")
$ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console make:entity
    title -> string 255

creamos el entity de preferencia de precio "PricePreference" (puede tener estas opciones: "Lo más barato", "Relación calidad precio", "Mejor calidad")
$ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console make:entity
    title -> string 255


creamos el entity de presupuestos
$ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console make:entity
    title -> string
    description -> text
    estimateddate -> relation EstimatedDate | optional
    category -> integer (los ids los obtenemos de una api de habitissimo)
    subcategory -> integer(igual que category)
    pricepreference -> relation PricePreference | optional
    user -> relation User

Creamos una "migration"
$ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console make:migration

Y la volcamos en bdd:
$ D:/programas/wamp/bin/php/php7.4.7/php.exe bin/console doctrine:migrations:migrate

---

Ya tenemos las tablas creadas en nuestra base de datos, así que creamos los registros pertinentes que necesitamos:

INSERT INTO `estimated_date` (`id`, `title`) VALUES (NULL, 'Lo antes posible'), (NULL, 'De 1 a 3 meses'), (NULL, 'Más de 3 meses');
INSERT INTO `price_preference` (`id`, `title`) VALUES (NULL, 'Lo más barato'), (NULL, 'Relación calidad precio'), (NULL, 'Mejor calidad');
