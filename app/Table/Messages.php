<?php
/**
 * User: Abdelghafour
 * Date: 20/01/2019
 * Time: 14:29
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App\Table;


class Messages extends Table
{

    protected static $table ="messages";

    public static function sendMessage($type,$name,$tele,$email,$desc,$etat)
    {

        $sql = "INSERT INTO ".self::$table." SET nom = ? ,tel = ? ,email = ? ,description = ?,etat = ? ,type = ?";

        return self::call()->prepare($sql,[$name,$tele,$email,$desc,$etat,$type],null);

    }

    public static function readMessage($id,$etat = "ok")
    {

        $sql = "UPDATE ".self::$table." SET etat = ? WHERE id = ?";

        return self::call()->prepare($sql,[$etat,$id],null,true);

    }

    public static function deleteMessage($id)
    {

        $sql = "DELETE  FROM ".self::$table." WHERE id = ? ";


        return self::call()->prepare($sql,[$id],null);
    }

}