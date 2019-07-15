<?php
/**
 * User: Abdelghafour
 * Date: 24/01/2019
 * Time: 21:07
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App\Controller;

use App\App;

use App\DBAuth;

class UserController extends AppController
{


    private $auth;

    public function __construct(DBAuth $auth)
    {
        parent::__construct();

        $this->auth = $auth;
    }

    public function login()
    {
        if($this->auth->logged())
        {
            App::getInstance()->redirect('cpanel');
        }
        else
        {
            $this->render('users.login');
        }
    }

}