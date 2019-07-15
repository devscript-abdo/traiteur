
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRAITEUR PANEL</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="css/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="css/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin.php">TRAITEUR</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?= \App\Table\Admins::get()->email ;?> &nbsp; <a href="admin.php?p=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a class="" href="admin.php"><i class="fa fa-home fa-3x"></i> ACCUEIL</a>
                </li>

                <li >
                    <a class="" href="admin.php?p=apropos"><i class="fa fa-sign-in fa-3x"></i>apropos</a>
                </li>
                <li >
                    <a class="" href="admin.php?p=message"><i class="fa fa-envelope fa-3x"></i>message</a>
                </li>

                <li >
                    <a class="" href="admin.php?p=planifier"><i class="fa fa-picture-o fa-3x"></i> Planifions votre mariage</a>
                </li>
                <li >
                    <a class="" href="admin.php?p=decoration"><i class="fa fa-picture-o fa-3x"></i> DÉCORATION</a>
                </li>
                <li >
                    <a class="" href="admin.php?p=gastronomie"><i class="fa fa-picture-o fa-3x"></i> Gastronomie</a>
                </li>
                <li >
                    <a class="" href="admin.php?p=patisserie"><i class="fa fa-picture-o fa-3x"></i> Patisserie</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Administration</h2>
                    <h5>biennvenu <?= \App\Table\Admins::get()->nom ;?> </h5>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text"><?= count(\App\Table\Messages::getAll());?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >

                <!-- .page-content start -->

                <?= $content ?>

                <!-- .page-content start -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="css/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="css/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="css/assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="css/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="css/assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="css/assets/js/custom.js"></script>


</body>
</html>
