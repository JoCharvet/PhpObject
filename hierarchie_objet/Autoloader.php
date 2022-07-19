<?php 

class Autoloader{

    static function autoload($class){
        $class = str_replace('\\','/',$class); 
        if(is_file(__DIR__ . '/model/' . $class . '.php')){
            require __DIR__ . '/model/' . $class . '.php'; 
        }
        else{
            $class = str_replace('\\','/',$class); 
            if(is_file(__DIR__ . '/model/Animal/' . $class . "/$class.php")){
                require __DIR__ . '/model/Animal/' . $class . "/$class.php"; 
            }
            if(is_file(__DIR__ . '/model/Animal/Herbivore/' . $class . "/$class.php")){
                require __DIR__ . '/model/Animal/Herbivore/' . $class . "/$class.php"; 
            }
            if(is_file(__DIR__ . '/model/Animal/Dog/' . $class . "/$class.php")){
                require __DIR__ . '/model/Animal/Dog/' . $class . "/$class.php"; 
            }
            
        }
    }
    static function register()
    {   
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }
}

