<?php 

namespace Avnir\Easyrouting;

class Easyrouting {

    public static function run()
    {
        foreach(glob(app_path().'/Http/Controllers/*.php') as $filename) {
            $file_parts = explode('/', $filename);
            $file = array_pop($file_parts);
            $file = rtrim($file,'.php');
            if($file == 'Controller')
                continue;
            
            $controllerName = 'App\Http\Controllers\\'.$file;
            $controller = new $controllerName();
            if(isset($controller->exclude) && $controller->exclude === true)
                continue;

            $methods = [];
            $reflector = new \ReflectionClass($controller);
            foreach ($reflector->getMethods(\ReflectionMethod::IS_PUBLIC) as $rMethod) {
                // check whether method is explicitly defined in this class
                if ($rMethod->getDeclaringClass()->getName() == $reflector->getName())
                    $methods[] = $rMethod->getName();
            }

            \Route::resource(strtolower(str_replace('Controller', '', $file)),  $file, ['only'=>$methods]);
        }
    }
}
