<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre API LOL

API LOL és una web generada dinàmicament gràcies al framework Laravel basat en PHP, també incorpora la crida de l'API oficial de LOL per la generació automàtica de les dades mostrades i fotos.


## Com despleguem aquest projecte?

Per desplegar aquest projecte primer haurem de copiar el projecte al nostre equip amb un d'aquests mètodes:

1. Descarregant el projecte 
2. Clonant el projecte a través de SSH o HTTPS o GtitHub CLI

Després serà necessari copiar el fitxer .env i configuar-lo amb el nom de la base de dades i altres paràmetres com generar la clau de l'aplicació.

Aquest podria ser el resultat del fitxer .env

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:q4iS9mmyZDrPUKPhDnAwK5OtP20YojtEp/TF5ktwb8U=
APP_DEBUG=true
APP_URL=http://apilol.test

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=apilol
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

Com a últim pas, haurem de realitzar les següents comandes al terminal per instal·lar les dependències, crear les taules i les dades que tindran.

Instal·lar les dependències
```console
composer install
```

Crear les taules
```console
php artisan migrate
```

Insertar les dades
```console
php artisan db:seed
```

Si tot funciona correctament, tindrem el projecte desplegat correctament 

