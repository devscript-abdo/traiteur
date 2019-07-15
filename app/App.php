<?php
/**

 * User: Abdelghafour
 * Date: 18/01/2019
 * Time: 20:11
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

namespace App;


class App
{

    private static $_instance;

    private static $_controller;

    private  $db_instance;

    public static function getInstance()
    {

        if(is_null(self::$_instance))
        {

            // var_dump(new self());
            self::$_instance = new App();
        }

        return self::$_instance;
    }

    public function getDb()
    {
        $config = Config::getInstance();

        if(is_null($this->db_instance))
        {
            $this->db_instance =  new Database($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
        }

        return  $this->db_instance;
    }

    public function forbidden()
    {

        header('HTTP/1.0 403 forbidden');

        header('location: index.php?p=login');

        // die('accee interdit');
    }

    public function notFound()
    {

        header('HTTP/1.0 404 Not Found ');

        $this->redirect('404');

    }

    /**
     * @param $to
     */
    public function redirect($to)
    {

        switch ($to)
        {
            case "cpanel";
                header('location: admin.php');
                break;

            case "home";
                header('location: index.php');
                break;

            case "404";
                header('location: 404.php');
                break;
            default:
                header('location: index.php?p=login');
        }
        // return  header('location: index.php?p=login');
    }

    /**
     *
     */
    public function load()
    {

        $path = explode("/",$_SERVER['REQUEST_URI']);

        //  var_dump($page);

        $page = end($path);

        return  header("location: $page");
    }

    /**
     *  Run the Application by using the Autoloader
     */
    public static function Run()
    {
        session_start();

        require 'Autoloader.php';

        Autoloader::register();

        require '../core/Autoloader.php';

        \Core\Autoloader::register();
    }

    /**
     * @param $controllers
     * @return mixed
     */
    public static function loadController($controllers)
    {

        if(is_array($controllers))
        {
            foreach ($controllers as $controller)
            {
                if(is_null(self::$_controller))
                {

                    $controller  = __NAMESPACE__."\\Controller\\".$controller;

                    self::$_controller = new $controller();
                    // echo"yy";
                }
            }
        }
        else
        {

            if(method_exists($controllers, '__construct'))
            {
                self::$_controller = new $controllers(new DBAuth(self::getInstance()->getDb()));
            }
            else
            {
                self::$_controller = new $controllers(); // call Controller exemple : new HomeController()
            }

            /* if($controllers === __NAMESPACE__."\\Controller\\UserController")
             {

                 self::$_controller = new $controllers(new DBAuth(self::getInstance()->getDb())); // injection de dependance  ||| hitach UserController M7taj l DBAuth f __construct dyalo   :p  :p :)
             }
             else
             {
                 self::$_controller = new $controllers(); // call Controller exemple : new HomeController()
             }*/
        }

        return self::$_controller;
    }

    /**
     * @return mixed
     *
     * 3la 7sab class active dyal les Navigation bar :p :p
     */
    public function setActive()
    {

        $path = explode("/",$_SERVER['REQUEST_URI']);

        // var_dump($path[1]);

        $page = end($path);
        // var_dump($path);
        $page = explode("=",$page);
        // var_dump($page[0]);
        if(empty($page[0]))
        {
            $this->redirect('home');
        }

        if($page[0] === 'index.php')
        {
            $page[1] = $page[0].'?p=home';

            $pagee = explode("=",$page[1]);

            // var_dump($pagee[1]);

            return  $pagee[1];
        }
        /* if($path[1] === self::root())
         {
             $this->redirect('home');
         }*/
        //var_dump($page[1]);
        return  $page[1];

    }

    /**
     * @return mixed
     *
     * Jbed Root dyal Site (Folder fach kayn site in our case  traiteur)
     */
    public static function root()
    {
        $directoryURI = $_SERVER['REQUEST_URI'];

        $path = parse_url($directoryURI, PHP_URL_PATH);

        $components = explode('/', $path);

        $pathG = $components[1];

        return $pathG;
    }
}