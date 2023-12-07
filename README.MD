# Practica02, Backend y Frontend

Este repositorio contiene el código para el backend en Laravel y el frontend Mobil en Ionic Angular para un portafolio personal creado en la Practica01.


## Requisitos Previos
 Para que funcione el codigo se debe tener instalado:

 - Composer.
 - PHP.
 - Node.js.
 - Angular CLI.
 - XAMPP.


## Configuración del Backend 

1. Asegurate de tener instalado SQL Server.

2. Crea una base de datos.

3. Clona el repositorio.

4. Abre el proyecto en tu editor de código.

5. Navega al directorio del backend: `cd backend`.
    
6. Instala las dependencias de Composer: `composer install`.
    
7. Copia el archivo de configuración: `cp .env.example .env`.
    
8. Genera la clave de la aplicación: `php artisan key:generate`.
    
9. Configura la base de datos en el archivo con tus datos `.env`.
    
10. Ejecuta las migraciones y los seeders: `php artisan migrate --seed`.
    
11. Inicia el servidor: `php artisan serve`.


## Configuración del Frontend(Ionic)

1. Dirígete a la carpeta principal: `cd mobile`

2. Instala las dependencias de la CLI de frameworks utilizando npm. `npm install -g @ionic/cli @angular/cli`

3. Instala las dependencias del proyecto utilizando npm. `npm install`

Ejecución de la aplicación
4. Para iniciar el servidor de desarrollo, utiliza el siguiente comando: `ionic serve`

Esto iniciará el servidor de desarrollo y podrás acceder a la aplicación en tu navegador web visitando http://localhost:8100.

## Uso

### Endpoint de la API

El backend proporciona un endpoint:

- **URL:** `http://localhost:8000/api/profile`
- **Método:** GET
- **Respuesta Esperada:** Un JSON con información del perfil, frameworks y hobbies.
