<?php
/**
 * User: Abdelghafour
 * Date: 18/01/2019
 * Time: 21:04
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App\Table;

use App\App;

use App\Config;

class Table
{


    protected static $table;


    /**
     * @return mixed
     */
    private static function getTable()
    {
        if(static::$table === null)
        {

            $classname = explode('\\',get_called_class());

            static::$table = strtolower(end($classname));
        }

        return static::$table;
    }

    /**
     * @param $id
     * @return array|bool|mixed
     */
    public static function getSingle($id)
    {

        return self::call()->prepare("SELECT *  FROM " .static::getTable(). " WHERE id = ?",[$id],get_called_class(),true);

    }

    /**
     * @return array
     */
    public static function getAll()
    {

        return self::call()->query("SELECT *  FROM  " . static::getTable() . " ",get_called_class());

    }

    /**
     * @param $id
     * @param $img
     * @return array|bool|mixed
     */
    public static function delete($id,$img)
    {

        $sql = "DELETE  FROM ".static::getTable()." WHERE id = ? ";

        $config = Config::getInstance();

        $file = $config->get("pathOfFile").static::getTable()."/".$img;

        if(file_exists($file))
        {
            unlink($file);
            //var_dump($file);
        }

        return self::call()->prepare($sql,[$id],null);
    }

    protected static function call()
    {
        return App::getInstance()->getDb();
    }

}