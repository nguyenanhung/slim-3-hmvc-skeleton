# Slim Framework 3 Skeleton HMVC Application

**Modular Extensions** makes the **Slim 3** micro framework modular. Modules are groups of independent components, typically model, controller and view, arranged in an application modules sub-directory that can be dropped into other **Slim 3** applications.

**HMVC** stands for **Hierarchical Model View Controller**.

Module Controllers can be used as normal Controllers or HMVC Controllers and they can be used as widgets to help you build view partials.

### What HMVC ?

**Hierarchical model–view–controller** (**HMVC**) is a software architectural pattern, a variation of **model–view–controller** (**MVC**) similar to **presentation–abstraction–control** (**PAC**), that was published in 2000 in an article in JavaWorld Magazine, the authors apparently unaware of PAC, which was published 13 years earlier.

The controller has some oversight in that it selects first the model and then the view, realizing an approval mechanism by the controller. The model prevents the view from accessing the data source directly.

**PAC**

![](https://upload.wikimedia.org/wikipedia/commons/4/4a/Pac-schema.png)



and **HMVC**

![](https://res.cloudinary.com/inviqa-uk/image/upload/v1470135273/gazouillement.png)

See: [Hierarchical Model View Controller from Wikipedia](https://en.wikipedia.org/wiki/Hierarchical_model%E2%80%93view%E2%80%93controller)

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

```shell
composer create-project nguyenanhung/slim-3-hmvc-skeleton [my-app-name]
```

or

```shell
php composer.phar create-project nguyenanhung/slim-3-hmvc-skeleton [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `storage/` is web writeable.

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

Project **slim-3-hmvc-skeleton** use **symfony/console** is handle Console request

Example

```shell
composer worker app:test-command
```

or 

```shell
php cli.php  app:test-command
```

@see: [Symfony Console](https://symfony.com/doc/3.4/components/console.html)



## Structure Project

See full Structure: [TREE.md](https://github.com/nguyenanhung/slim-3-hmvc-skeleton/blob/master/TREE.md)

## Contact

If any quetion & request, please contact following infomation

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | [@nguyenanhung](https://fb.com/nguyenanhung) |

From Hanoi with Love <3

