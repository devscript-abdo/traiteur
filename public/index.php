<?php
/**
 * User: Abdelghafour
 * email : goldvision93@gmail.com
 * tele : +212677512753
 */

require '../app/App.php';

$app =  App\App::getInstance();

$app::Run();

if(isset($_GET['p']))
{
    $p = $_GET['p'];
}
else
{
    $p = 'home';
}



// 3la chkel Array

//$controller = $app::loadController(['HomeController']);

// 3la chkel Object

$controller = $app::loadController(\App\Controller\HomeController::class);

/***Paging***/

if($p ==='home')
{

    $controller->index();

}
elseif ($p === 'aniv')
{

    $controller->aniv();

}
elseif ($p === 'decoration')
{

    $controller->decoration();

}
elseif ($p === 'gastronomie')
{

    $controller->gastronomie();

}
elseif ($p === 'patisserie')
{

    $controller->patisserie();

}
elseif($p ==='devis')
{

    $controller->devis();

}
elseif ($p ==='contact')
{

    $controller->contact();

}

elseif ($p ==='login') {

    $controller = $app::loadController(\App\Controller\UserController::class);

    $controller->login();

}
else
{
    $app->notFound();
}


