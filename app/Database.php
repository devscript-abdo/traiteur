<?php
/**
 * User: Abdelghafour
 * Date: 18/01/2019
 * Time: 10:31
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App;

use PDO;

class Database
{

    private $db_name;

    private $db_user;

    private $db_pass;

    private $db_host;

    private $pdo;

    public function __construct($db_name,$db_user ,$db_pass,$db_host)
    {

        $this->db_name = $db_name;

        $this->db_user = $db_user;

        $this->db_pass = $db_pass;

        $this->db_host = $db_host;
    }

    private function getDb()
    {

        if($this->pdo === null)
        {
            $option = [PDO::MYSQL_ATTR_INIT_COMMAND=>Config::getInstance()->get('db_char')];// for Global string(Arabic and other)

            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user, $this->db_pass,$option);

            $pdo->setAttribute(PDO::ATTR_ERRMODE,Config::getInstance()->get('ERROR_MODE'));

            $this->pdo = $pdo;
        }

        return  $this->pdo;
    }

    public function query($stmt , $classname)
    {
        $req = $this->getDb()->query($stmt);

        // fetcher 3la hassab kola table ou attacher le m3a Class dyalha :)
        $data = $req->fetchAll(PDO::FETCH_CLASS,$classname);
        return $data;
    }

    public function prepare($stmt, $Attr ,$classname = null,$one = false)
    {

        $req  = $this->getDb()->prepare($stmt);

        $data =  $req->execute($Attr);

        //ila position dyal chi mot clé  men hado kayna flawel exemple('UPDATE apropos SET titre = ? WHERE id = 1')
        if(strpos($stmt,'UPDATE')===0 ||strpos($stmt,'INSERT')===0 ||strpos($stmt,'DELETE')===0)
        {
            // var_dump($data);
            // die();
            return $data; // Rje3 data bla matder hta Fetch
        }

        if($classname === null)
        {
            $req->setFetchMode(PDO::FETCH_OBJ);
        }
        else
        {
            $req->setFetchMode(PDO::FETCH_CLASS,$classname);
        }

        if($one) // ila bghina resultat wa7ed exemple : WHERE id = 1
        {

            $data = $req->fetch();
            // var_dump($data);
        }
        else
        {
            $data = $req->fetchAll();

        }

        return $data;

    }
}