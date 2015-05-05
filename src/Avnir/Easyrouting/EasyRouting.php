<?php namespace Avnir\Easyrouting;

class EasyRouting {

    public static function run()
    {
        foreach(glob(app_path().'/controllers/*.php') as $filename) {
            $file_parts = explode('/', $filename);
            $file = array_pop($file_parts);
            $file = rtrim($file,'.php');
            $controller = new $file();
            if(isset($controller->exclude) && $controller->exclude === true)
                continue;

            $reflector = new \ReflectionClass($controller);
            $methods = [];
            foreach ($reflector->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->class == $reflector->getName())
                    $methods[] = $method->name;
            }

            \Route::resource(str_replace('Controller', '', $file),                     $file,['only'=>$methods]);
        }
    }
}