## Desafio 1

**1. Obtener precio total de la factura.**

    Invoice::find($id)
            ->product()
            ->sum('price');

**2. todos id de las facturas que tengan productos con cantidad mayor a 100.**

    Invoice::whereHas('product', function($query){
            $query->where('quantity', '>', 100);
        })->get('id');

**3. Obtener todos los nombres de los productos cuyo valor final sea superior a $1.000.000 CLP.**

    Product::where('price', '>', 1000000)
            ->get('name');
            
## Desafio 2

Instalar PHP

```
# Windows
# utilizar WAMP o Laragon

## Linux(debian, ubuntu)
sudo apt install php
## Linux(Red Hat distros)
sudo yum install php
```

Instalar Composer

```
## Descarga el instalador en el directorio actual con php.
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

## Verifica si el hash del instalador es correcto y retorna un mensaje de validacion de lo contrario remueve el instalador.
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

## Ejecuta el instalador.
php composer-setup.php

## Remueve el instalador.
php -r "unlink('composer-setup.php');

## Mover composer.phar para poder utilizar composer globalmente.
sudo mv composer.phar /usr/local/bin/composer
```

Crear proyecto de laravel
```
## Crea el proyecto de laravel
composer create-project laravel/laravel nombre-proyecto

## Nos movemos a la ruta del proyecto
cd nombre-proyecto

## levanta nuestro proyecto
php artisan serve
```

## Desafio 4

**¿qué es "Laravel Jetstream"?**

Es un "scaffolding" para aplicaciones laravel que trae consigo desarrolladas tareas como Autenticacion, verificacion de email, manejo de sesion, login y registro, ahorradonos con esto parte del tiempo de nuestro proyecto.

**¿qué permite "Livewire" a los programadores?**

Livewire permite crear interfaces de usuarios dinamicas sin tener que recurrir a frameworks o librerias como Vue o React, pudiendo asi trabajar con nuestras vistas blade de laravel.
