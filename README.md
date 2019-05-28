# oasis

test-developer

El proyecto se encuentra desarrollado en el entorno de PHP, específicamente con el framework Laravel en su versión 5.8.
Esto debido a la facilidad de desarrollar un proyecto en poco tiempo y funcional. La API se encuentra del lado del servidor aprovechando PHP y las características del framework mientras que el consumo de la misma se realiza mediante el frontend con Vue Js. El frontend se encuentra en el mismo proyecto gracias a la rápida integración de Vue con la que cuenta Laravel.

1. Clonar repositorio.
2. Tener instalado composer para bajar las dependecioas de Laravel.
3. Entrar a la carpeta del proyecto via terminal y bajar las dependencias de Laravel y VueJS: composer update y npm install
4. Renombrar el archivo .env.example que se encuentra en la raiz a: .env
5. Configurar el key de laravel via terminial para la API con: php artisan key:generate
6. Configurar la base de datos en los siguientes campos del archivo .env ya renombrado:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT= TU PUERTO
DB_DATABASE=NOMBRE DE TU BASE
DB_USERNAME=TU USUARIO
DB_PASSWORD= TU CONTRASEÑA

7. Limpiar cache para que se guarden los cambios de la base via terminal con:
   php artisan cache:clear Y
   php artisan config:cache

8) Correr servidor via terminal con: php artisan serve
   y entrar a: http://127.0.0.1:8000
   Y listo.

Las rutas APIS se encuentren en la carpeta routes, api.php.
Las archivos Vue del fronted en la carpeta resources/js
