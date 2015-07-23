## Fast Workflow in Laravel With EasyRouting

**Major Versions:**

* **2.x** (YOU ARE HERE) - For `laravel/framework:~5.*` and `avnir/easyrouting:~2`
* **1.x** ([1.0 branch](https://github.com/avnir/EasyRouting/tree/1.0)) - For `laravel/framework:4.*` and `avnir/easyrouting:~1`

### Installation


Begin by installing this package through Composer. Edit your project's ``composer.json`` file to require ``avnir/EasyRouting``.

```json
{
    "require": {
        "avnir/EasyRouting": "~2"
    }
}
```

Next, update Composer from the Terminal:

```sh
php composer.phar update
```

To use the EasyRouting Provider, you must register the provider when bootstrapping your Laravel application.

Find the `providers` key in your `config/app.php` and register the EasyRouting Provider.

```php
    'providers' => array(
        // ...
        'Avnir\Easyrouting\EasyroutingServiceProvider::class',
    )
```

Find the `aliases` key in your `config/app.php` and add the AWS facade alias.

```php
    'aliases' => array(
        // ...
        'Easyrouting' => Avnir\Easyrouting\Easyrouting::class,
    )
```


### Usage

On the ``routes.php`` file you need to call

``
    \EasyRouting::run();
``

this will setup REST routes for all the public methods of the Controllers.



If you ever want to exclude a controller from having a route, just add

``
    var $exclude = true;
``

into the Controller