<?php
/**
 * User: Abdelghafour
 * Date: 19/01/2019
 * Time: 07:16
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App;

class DBAuth
{

    private $db;


    protected static $table = 'admins';


    public function __construct(Database $db)
    {

        $this->db = $db;
    }

    /**
     * @param $username
     * @param $password
     * @return bool
     *
     * Login from database
     */
    public function login($username , $password)
    {

        $user = $this->db->prepare('SELECT * FROM '.static::$table.' WHERE email = ? ',[$username],null,true);

        //var_dump(sha1('123456'));

        if($user) // hta yl9a chi recored f database fih email li dakhel 3ad verifier password wach extact
        {
            // var_dump($user);
            // die();
            if($user->password === sha1($password)) //verifier password wach extact
            {
                $_SESSION['auth'] = $user;

                return true;

            }
        }

        return false;
    }

    public function logged()
    {

        return isset($_SESSION['auth']);

    }

    public function logout()
    {
        session_destroy();

        header('location: index.php?p=login');

    }
}