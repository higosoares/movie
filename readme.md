<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Movie

Movie é uma aplicação web de catálogo de filmes a partir do framework Laravel versão 5.7.6 e PHP 7.2.8. Utilização de banco de dados com o PostgresSQL.

## Uso
Crie no PgAdmin um banco chamado movie e em seguida rode o comando `php artisan migrate --seed` que irá criar as tabelas e popular o banco.
Na pasta raiz utilize o comando : `php artisan serve`.

##Testes
Para visualizar a cobertura de código, segue os passos para instalar o xdebug no Windows : 
- Rodar `php -i` e copie as informações do phpinfo e copie no link [https://xdebug.org/wizard.php](https://xdebug.org/wizard.php) que descobrirá qual .dll do xdebug irá baixar.
- Na pasta C:\php\ext colar o arquivo .dll baixado e inserir no final do `php -i` o trecho

```
zend_extension= "C:\PHP\ext\nome_arquivo.dll"
xdebug.remote_enable=1
xdebug.remote_host="localhost"
xdebug.remote_port=9000
```
- Para confirmar se o xdebug está instalado verificar com `php -v` se está da maneira abaixo

```
PHP 7.2.8 (cli) (built: Jul 18 2018 10:03:03) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Xdebug v2.7.2, Copyright (c) 2002-2019, by Derick Rethans
```


-
No projeto deve ter o arquivo phpunit.xml

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit backupGlobals="false"
         backupStaticAttributes="false"
         bootstrap="vendor/autoload.php"
         colors="true"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         processIsolation="false"
         stopOnFailure="false">
    <testsuites>
        <testsuite name="Unit">
            <directory suffix="Test.php">./tests/Unit</directory>
        </testsuite>

        <testsuite name="Feature">
            <directory suffix="Test.php">./tests/Feature</directory>
        </testsuite>
    </testsuites>
    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">./app</directory>
        </whitelist>
    </filter>
    <logging>
        <log type="tap" target="tests/build/report.tap"/>
        <log type="junit" target="tests/build/report.junit.xml"/>
        <log type="coverage-html" target="tests/build/coverage"/>
        <log type="coverage-text" target="tests/build/coverage.txt"/>
        <log type="coverage-clover" target="tests/build/logs/clover.xml"/>
    </logging>
    <php>
        <server name="APP_ENV" value="testing"/>
        <server name="BCRYPT_ROUNDS" value="4"/>
        <server name="CACHE_DRIVER" value="array"/>
        <server name="MAIL_DRIVER" value="array"/>
        <server name="QUEUE_CONNECTION" value="sync"/>
        <server name="SESSION_DRIVER" value="array"/>
        <env name="TELESCOPE_ENABLED" value="false"/>
    </php>
</phpunit>

```
No composer.json verificar se possui a linha test em scripts conforme abaixo : 
```json
"scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi"
        ],
        "test" : [
            "phpunit"
        ]
```

Após rodar `composer run test`, abrir o arquivo no caminho **tests/build/coverage/index.html**

##Telescope
Acesse a rota **/telescope** para visualizar as informações do Laravel Telescope.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

[1]: https://xdebug.org/wizard.php
