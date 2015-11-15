<?php

class Dispatch{
    static $self;
    function __construct()
    {
        $this->init();
    }

    // 单例模式
    public static function getInstance()
    {
        if(self::$self === null)
        {
           self::$self = new Dispatch();
        }
  
        return self::$self;
    }

    /**
    * 调用控制器和行为
    */
    public function init()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $paths = explode('/',$uri);
        if($paths[1] == 'index.php')
        {
            $controller = isset($paths[2]) && $paths[2] ? $paths[2] : 'index';
            $action = isset($paths[3]) && $paths[3] ? $paths[3] : 'index';
        }
        else
        {
            
            $controller = isset($paths[1]) && $paths[1] ? $paths[1] : 'index';
            $action = isset($paths[2]) && $paths[2] ? $paths[2] : 'index';
        }

        $controller_path = BASE_PATH.'controller'.DIRECTORY_SEPARATOR.$controller.'.php';
        if(file_exists($controller_path))
        {
            include $controller_path;
            $controller_name = $controller.'_controller';
            if(method_exists($controller_name,$action))
            {
                call_user_func(array($controller_name,$action));
            }
            else
            {
                 echo $controller_name.' haven\'t '.$action.' method!';
            }
        }
        else
        {
            echo $controller.'_controller.php file doesn\'t exist!';
        }

    }
}
