# Laravel - Marival

Aplicación desarrollada en **Laravel 5**, en el box de **Vagrant** de **Homestead**.

## Instalación

La documentación para instalar vagrant y el box de Homestead se encuentra en:

[https://laravel.com/docs/5.5/homestead]()

Una vez instalado el box, hay que copiar los archivos de este repositorio en la carpeta compartida que se configuró en el paso anterior.

Para llenar el sitio de contenido hay que ejecutar lo siguiente:

```bash
php artisan migrate:refresh --seed
```

Si se usa con el box de homestead la base de datos estará configurada para usarse, sino, hay que configurar la base de datos en el archivo `.env`

## Desarrollo

### Modelos

* Post
* Menu

### Provedores de Servicio

Encargado de mantener la variable `$menu` en todos los request.

* MenuProvider

### Seeders

Encargados de llenar de datos aleatorios y configurar el sitio por medio de los seeders.

* PostSeeder
* MenuSeeder

### Factories

Encargado de crear instancias del modelo `Post` con texto e imagenes aleatorias, usa `Faker` para generar ese contenido.

* PostFactory