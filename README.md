<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

Clonar este repositorio:

```bash
$ git clone https://github.com/m-elewa/vurtify.git
```

Luego instale la dependencia requerida.

```bash
# copie el archivo .env.example a .env
$ cp .env.example .env

# Genera la clave de la aplicación
$ php artisan key:generate

# Instale las dependencias de PHP
$ composer install

# Instalar módulos de modules
$ npm install --legacy-peer-deps

# Compila el código js y sass
$ npm run dev

# Migrar la aplicación
$ php artisan migrate

# Crea el enlace simbólico
$ php artisan storage:link
```

Una vez hecho todo, inicie un servidor de desarrollo

``` bash
php artisan serve
```

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y robustas.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
