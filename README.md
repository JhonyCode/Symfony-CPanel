# Symfony 5.4.9 Users Control panel #

Panel de control para la administración de usuarios, se puede actualizar a la versión más actual de symfony.

## Que hay dentro del paquete ##

### Instalación de CORS ###
### Jason web token ###
### Secuirty.yaml modificado para los permisos en ciertas rutas ###
### Composer ###
### Symfony 5.4.9 ###

# Cómo empezar #

### Requerimientos ### 

Verifica que tengas instalado NPM y apache, además de LAMP server.

### Instalación ### 

Clonamos el repositorio en nuestra máquina con git clone https://github.com/JhonyCode/Symfony-CPanel.git

```
composer install
````
[Ver documentación](https://symfony.com/doc/current/setup.html)

Ahora, debes modificar el archivo .env con la información de tu base de datos, o importar la que yo dejo en el repositorio.

### Importar BBDD o crearla y después: ### 

```
cd NombreProyecto 
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate

````

## Verás una pantalla parecida a esta en http://127.0.0.1:8000/ ##

![symfony 5 4](https://user-images.githubusercontent.com/99834645/203821451-9f863802-a253-4340-bd37-8353b2347721.jpg)



## Después para crear un usuario debes ir a : http://127.0.0.1:8000/admin/login : ##

### Deberás logear con un usuario ya creado previamente con DataFixtures o desde el archivo de BBDD que adjunto en el proyecto. ###
### Todas las contraseñas son 12345, Hasheadas. Verás algo como esto: ###

![login](https://user-images.githubusercontent.com/99834645/203821753-19eb26ed-16be-4a1f-8ac5-8a7c8e87dee4.jpg)


### Una vez logeado volverás a ver la página de inicio de symfony, eso es que has logeado correctamente, la redirección se puede cambiar a gusto del consumidor: 
### 

##
Panel creación usuario, URL: http://127.0.0.1:8000/admin/usuario/new
##
![crear usuario](https://user-images.githubusercontent.com/99834645/203822174-de459797-9451-4425-ad4a-3e9c6a45e6b7.jpg)


## Ahora podrás logear con el usuario que hayas creado, y editarle los ROLES, todos los usuarios nuevos empiezan con ROLE_USER, solo el SUPERADMIN puede cambiarlo ## 

### Ver todos los usuarios, URL: http://127.0.0.1:8000/admin/usuario ###

## Verás algo parecido a esto: ##

![usuarios](https://user-images.githubusercontent.com/99834645/203822775-b65c8825-f039-41c3-b97d-ceb58051188f.jpg)


## Editar un usuario ##

### Para editar y/o borrar un usuario debes acceder haciendo click en "Editar" al usuario en concreto. ###

### Verás algo parecido a esto: ###


![editar usuario](https://user-images.githubusercontent.com/99834645/203823399-ba5fa9c3-1ae0-4ce7-ba09-c8da23cac485.jpg)

## Ver información de un usuario ## 

### Acceder a la URL: http://127.0.0.1:8000/admin/usuario/ y seleccionar el usuario que queremos ver. ###

## Se verá así: ##

![informacion usuario](https://user-images.githubusercontent.com/99834645/203824055-526733a8-bdc2-4bb0-8d40-0ba387652e45.jpg)
