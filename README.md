## Fast Workflow in Laravel With EasyRouting

### Installation

<<<<<<< HEAD
Begin by installing this package through Composer. Edit your project's ```composer.json``` file to require ```avnir/EasyRouting```.

```
"require": {
    "avnir/EasyRouting": "~1"
}
```

Next, update Composer from the Terminal:

```
composer update
```

Once this operation completes, the final step is to add the service provider. Open app/config/app.php, and add a new item to the providers array.

```
'Avnir\Easyrouting\EasyroutingServiceProvider'
```

That's it! You're all set to go.

### Usage

On the ```routes.php``` file you need to call 

```
EasyRouting::run();
```

this will setup REST routes for all the public methods of the Controllers.

An easy way to see your routes is 

```
php artisan routes
```

If you ever want to exclude a controller from having a route, just add

```
var $exclude = true;
```

to the Controller
=======
Begin by installing this package through Composer. Edit your project's ``composer.json`` file to require ``avnir/EasyRouting``.

``
"require": {
    "avnir/EasyRouting": "~2"
    }
    ``

    Next, update Composer from the Terminal:

    ``
    composer update
    ``

    Once this operation completes, the final step is to add the service provider. Open app/config/app.php, and add a new item to the providers array and aliases array.

    ``
    'Avnir\Easyrouting\EasyroutingServiceProvider::class'
    ``

    ``
    'Easyrouting' => Avnir\Easyrouting\Easyrouting::class'
    ``

    That's it! You're all set to go.

    ### Usage

    On the ``routes.php`` file you need to call

    ``
    \EasyRouting::run();
    ``

    this will setup REST routes for all the public methods of the Controllers.

    An easy way to see your routes is

    ``
    php artisan route:list
    ``

    If you ever want to exclude a controller from having a route, just add

    ``
    var $exclude = true;
    ``

    into the Controller
    `
>>>>>>> updating
