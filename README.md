# Fast Workflow in Laravel With EasyRouting

<h3>Installation</h3>

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

# Usage

On the ```routes.php``` file you need to call 

```
EasyRouting::run();
```

this will setup REST routes for all the public methods of the Controllers

If you ever want to exclude a controller from having a route, just add ```var $exclude = true;``` to the Controller
