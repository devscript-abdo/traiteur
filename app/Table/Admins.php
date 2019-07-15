<?php
/**
 * User: Abdelghafour
 * Date: 30/01/2019
 * Time: 20:51
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App\Table;

class Admins extends Table
{


    protected static $table ="admins";


    public static function get()
    {
        if (isset($_SESSION['auth']))
        {
            return $_SESSION['auth'];
        }
        return null;
    }

}