<?php
/**
 * User: Abdelghafour
 * Date: 24/01/2019
 * Time: 21:55
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App\Controller;

use App\Config;

use Core\Controller\Controller;

class AppController extends Controller
{

    protected $layouts ="default";

    public function __construct()
    {
        $config = Config::getInstance();

        $this->viewPath = $config->get('pathOfSite').'app/views/';
    }

}