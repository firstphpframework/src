<?php

/**
* global function
*/

/**
* 引入类文件
*/
function loadclass($classname)
{
    static $classes = array();
    if(!isset($classes[$classname]))
    {
        $classpath = BASE_PATH.'classes'.DIRECTORY_SEPARATOR.$classname.'.class.php';
        if(file_exists($classpath))
        {
            include $classpath;
            $classes[$classname] = $classpath;
        }
    }
    //var_dump($classes);
}


/**
* 引入函数文件
*/
function loadfunction($funcname)
{
    static $funcs = array();
    if(!isset($funcs[$funcname]))
    {
        $funcpath = BASE_PATH.'functiones'.DIRECTORY_SEPARATOR.$funcname.'.func.php';
        if(file_exists($funcpath))
        {
            include $funcpath;
            $funcs[$funcname] = $funcpath;
        }
    }    
    //var_dump($funcs);
}
