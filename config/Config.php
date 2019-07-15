<?php
/**
 * User: Abdelghafour
 * Date: 18/01/2019
 * Time: 22:39
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

return [

    /*DataBase */

    "db_user" => "root",
    "db_pass" => "",
    "db_host" => "localhost",
    "db_name" => "traiteur",
    "db_char" => "SET NAMES utf8",

    /* error mode silence or warnning :p*/

    "ERROR_MODE"=>PDO::ERRMODE_EXCEPTION,

    /*PathOf site() */

    "pathOfSite" => dirname(__DIR__).'/',

    /*PathOf file(images) */

    "pathOfFile" => dirname(__DIR__)."/public/img/",

    // the path that using by move_uploaded_file  function |||| in  live server mode  take your attention about root() function

    "pathToUp" => $_SERVER['DOCUMENT_ROOT'].'/'.\App\App::root().'/public/img',

];