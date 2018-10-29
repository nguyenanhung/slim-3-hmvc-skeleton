# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the **PHP-View** template renderer, **Slim-PDO** is Database Handle, **symfony/console** is Console Handle. It also uses the **Monolog** logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

```shell
composer create-project nguyenanhung/slim-3-skeleton [my-app-name]
```

or

```shell
php composer.phar create-project nguyenanhung/slim-3-skeleton [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands

```shell
cd [my-app-name]
php composer.phar start
```

Run this command in the application directory to run the test suite

```shell
php composer.phar test
```

or 

```shell
./vendor/bin/phpunit
```

That's it! Now go build something cool.

## Running via CLI / Command Line Interface

Project **slim-3-skeleton** use **symfony/console** is handle Console request

Example

```shell
composer worker app:test-command
```

or 

```shell
php cli.php  app:test-command
```

@see: https://symfony.com/doc/3.4/components/console.html



## Structure Project

Now, Project structure project is follow structure below

```reStructuredText
[my-app-name]
├── CONTRIBUTING.md
├── README.md
├── cli.php
├── composer.json
├── composer.lock
├── docker-compose.yml
├── phpunit.xml
├── public
│   └── index.php
├── src
│   ├── App
│   │   └── AppController.php
│   ├── Commands
│   │   └── TestCommand.php
│   ├── Helper
│   ├── Library
│   │   ├── BaseModel.php
│   │   ├── BaseModelInterface.php
│   │   ├── Config.php
│   │   └── Db.php
│   ├── bootstrap.php
│   ├── classmap.php
│   ├── constants.php
│   ├── dependencies.php
│   ├── helpers.php
│   ├── middleware.php
│   ├── routes.php
│   └── settings.php
├── storage
│   ├── cache
│   │   └── README.md
│   ├── database
│   │   ├── README.md
│   └── logs
│       └── README.md
├── structure.md
├── templates
│   └── index.phtml
├── tests
│   └── Functional
│       ├── AppTest.php
│       ├── BaseTestCase.php
│       └── HomepageTest.php
└── vendor
    ├── autoload.php
    ├── bin
    │   └── phpunit -> ../phpunit/phpunit/phpunit
    ├── composer
    ├── container-interop
    ├── doctrine
    ├── kint-php
    ├── monolog
    ├── myclabs
    ├── nikic
    ├── paragonie
    ├── phpdocumentor
    ├── phpspec
    ├── phpunit
    ├── pimple
    ├── psr
    ├── sebastian
    ├── slim
    ├── symfony
    └── webmozart

425 directories, 2226 files
```



## Contact

If any quetion & request, please contact following infomation

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | [@nguyenanhung](https://fb.com/nguyenanhung) |

From Hanoi with Love <3

