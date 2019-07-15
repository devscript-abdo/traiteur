<?php
/**
 * User: Abdelghafour
 * Date: 24/01/2019
 * Time: 21:24
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace Core;


class Autoloader
{

    static function register()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    static function autoload($class)
    {
        // var_dump($class,__NAMESPACE__.'\\');
        if(strpos($class,__NAMESPACE__.'\\') === 0)
        {
            //var_dump($class);
            $class = str_replace(__NAMESPACE__.'\\','',$class);
            //var_dump($class);
            $class = str_replace('\\','/',$class);
            // var_dump($class);
            require __DIR__.'/'. $class .'.php';
            // require __DIR__.'/controller/'. $class .'.php';
        }
    }

}