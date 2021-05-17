#Descripcion
Practica voluntaria de Laravel para DWES.
Se aplican también conocimientos básicos de Tailwind.

#Comandos generales para la creación del proyecto
##Comando de Artisan interesantes
=> Para lanzar el proyecto: php artisan serve &

=> Crear un modelo: php artisan make:model NombreModelo -a

=> Migraciones: php artisan migrate:install
|-> php artisan migrate
|-> php artisan migrate:refresh

=> Crear seeders: php artisan make:seeder nombre_seeder
|-> Poblar: php artisan db:seed

=> recargar caché: php artisan config:cache
=> visualiza todas las rutas disponibles: php artisan route list


##Crear una migración
1º - Instalar en la bd las migraciones.
--> Desde un docker con phpmyadmin crear la bd. 
(https://migueldoctor.medium.com/run-mysql-phpmyadmin-locally-in-3-steps-using-docker-74eb735fa1fc)
2º - Configurar fichero .env con los datos de acceso.
3º - Crear migraciones: php artisan make:migration nombreTabla --table nombreTabla

##Modelos
Interactúan con las tablas de la base de datos.

##Autenticación
Documentacion Oficial: https://packagist.org/packages/laravel/breeze
Comandos: 
- composer update
- composer require laravel/breeze
- php artisan breeze:install
npm install
npm run

** nota: recomendable modificar fichero package.json para añadir en 
"dev": "npm run development -- --watch" el watch y npm run watch &



