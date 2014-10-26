#Boxes

Es un proyecto de prueba desarrollado en el Framework de PHP Laravel, en su versión 4, combinando tecnologías tales
como HTML5, CSS3, PHP, MySQL, Programación MVC, librerias JS

-----

##Requerimientos

	PHP >= 5.4.0
	MySQL >= 5.0

##Como instalar
### Paso 1: Instalar Composer, saltar este paso si ya se tiene

### Paso 2: Usar Composer para instalar las dependencias del framework

    cd boxes
	composer install --dev

### Paso 4: Configurar base de datos

app/config/database.php

Previamente configurado con las opciones

BD nombre: "boxes"
Usuario: "root"
Contraseña: ""

Crear base de datos

### Paso 5: Llenar base de datos

Correr los siguientes comandos para instalar de ejemplo (usuarios de prueba)

	php artisan migrate
	php artisan db:seed


### Paso 6: Acceder al sistema

http://localhost/boxes

### Opcional: Navegar con data por defecto

http://localhost/boxes/user/login

    username : jonathan.araul
    password : 12345678

## Crear nuevo usuario
http://localhost/boxes/user/create

-----
Basado en https://github.com/andrewelkins/Laravel-4-Bootstrap-Starter-Site
