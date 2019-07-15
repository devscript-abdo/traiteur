<?php
/**
 * Abdelghafour
 * Date: 18/01/2019
 * Time: 22:39
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App;

class Config
{

    private $settings = [];

    private static $__instance;

    public function __construct()
    {

        $this->settings = require dirname(__DIR__).'/config/Config.php';

        // fhad l7ala $this->settings ghadi Yweli Array fih les keys est les values dyalhom

    }

    public static function getInstance()
    {
        if(is_null(self::$__instance)) // singlotemp hhhhhhhhhhhh
        {
            self::$__instance = new Config();
        }
        return self::$__instance;
    }

    public function get($key)
    {
        if(!isset($this->settings[$key])) //ila dakhel chi valeur makaynach f '/config/Config.php' return null
        {
            return null;
        }
        return $this->settings[$key]; //reje3 3la chkel Array exemple :get("db_user")
    }

}