<?php

require '../app/Autoloader.php';

session_start();

App\Autoloader::register();


if(isset($_GET['p']))
{
    $p = $_GET['p'];
}
else
{
    $p = 'accueil';
}

$app =\App\App::getInstance();

$auth = new \App\DBAuth($app->getDb());

if(!$auth->logged())
{

    $app->forbidden();
}

ob_start();

if($p ==='accueil')
{

    require '../app/views/admin/home.php';

}
elseif ($p === 'apropos')
{

    require '../app/views/admin/apropos.php';

}
elseif ($p === 'message')
{

    require '../app/views/admin/message.php';
}
elseif ($p === 'planifier')
{

    require '../app/views/admin/planifier.php';
}
elseif ($p === 'decoration')
{

    require '../app/views/admin/decoration.php';
}
elseif ($p === 'gastronomie')
{

    require '../app/views/admin/gastronomie.php';
}
elseif ($p === 'patisserie')
{

    require '../app/views/admin/patisserie.php';
}

/******************** */
elseif ($p === 'logout')
{

    $auth->Logout();
}

$content = ob_get_clean();

require '../app/views/layouts/admin.php';