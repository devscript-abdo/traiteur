<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>TRAITEUR</title>
    <meta name="description" content=" ">
    <meta name="author" content=" ">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/><!-- bootstrap grid -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
    <link rel="stylesheet" href="css/style.css"/><!-- template styles -->
    <link rel="stylesheet" href="css/color-default.css"/><!-- default template color styles -->
    <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
    <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->
    <link rel="stylesheet" href="css/animate.css"/><!-- animation for content -->
    <link rel="stylesheet" href="css/masterslider/style/masterslider.css" /><!-- Master slider css -->
    <link rel="stylesheet" href="css/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
    <link rel='stylesheet' href='css/owl-carousel/owl.carousel.css'/><!-- Events carousel -->
    <link rel='stylesheet' href='css/owl-carousel/owl.theme.css'/><!-- Events carousel -->

    <!-- Magnific Popup - image lightbox -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Google Web fonts 
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>-->

    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/>
</head>

<body>

<!-- .header-wrapper start -->
<div id="header-wrapper" >
    <!-- #header start -->
    <header id="header">

        <!-- Main navigation and logo container -->
        <div class="header-inner">
            <!-- .container start -->
            <div class="container">
                <!-- .main-nav start -->
                <div class="main-nav">
                    <!-- .row start -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- .navbar start -->
                            <nav style="background-color:black;"class="navbar navbar-default nav-left">

                                <!-- .navbar-header start -->
                                <div class="navbar-header">
                                    <!-- .logo start -->
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="img/logo.png" width="90px" alt="">
                                        </a>
                                    </div><!-- logo end -->
                                </div><!-- .navbar-header end -->

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav pi-nav">
                                        <li class="<?= $active ==="home" ? "current-menu-item":"" ;?> dropdown">

                                            <a href="index.php?p=home">ACCUEIL</a>

                                        </li>
                                        <li class="<?= $active ==="aniv" ? "current-menu-item":"" ;?> dropdown">
                                            <a href="index.php?p=aniv">ANNIVERSAIRE</a>

                                        </li>

                                        <li class="<?= $active ==="decoration" ? "current-menu-item":"" ;?> dropdown">
                                            <a href="index.php?p=decoration">DÉCORATION</a>

                                        </li>

                                        <li class="<?= $active ==="gastronomie" ? "current-menu-item":"" ;?> dropdown">
                                            <a href="index.php?p=gastronomie">GASTRONOMIE</a>

                                        </li>
                                        <li class="<?= $active ==="patisserie" ? "current-menu-item":"" ;?> dropdown">
                                            <a href="index.php?p=patisserie">PÂTISSERIE</a>

                                        </li>

                                        <li class="<?= $active ==="devis" ? "current-menu-item":"" ;?> dropdown">
                                            <a href="index.php?p=devis">DEVIS</a>
                                        </li>

                                        <li class="<?= $active ==="contact" ? "current-menu-item":"" ;?> dropdown">
                                            <a href="index.php?p=contact">CONTACT</a>
                                        </li>
                                    </ul><!-- .nav.navbar-nav.pi-nav end -->

                                    <!-- Responsive menu start -->
                                    <div id="dl-menu" class="dl-menuwrapper">
                                        <button class="dl-trigger">Accueil</button>

                                        <ul class="dl-menu">
                                            <li class="current-menu-item dropdown">
                                                <a href="index.php?p=home">ACCUEIL</a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="index.php?p=aniv">ANNIVERSAIRE</a>

                                            </li>

                                            <li class="dropdown">
                                                <a href="index.php?p=decoration">DÉCORATION</a>

                                            </li>

                                            <li>
                                                <a href="index.php?p=gastronomie">GASTRONOMIE</a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="index.php?p=patisserie">PÂTISSERIE</a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="index.php?p=devis">DEVIS</a>
                                            </li>

                                            <li class="dropdown">
                                                <a href="index.php?p=contact">CONTACT</a>
                                            </li>
                                    </div><!-- (Responsive menu) #dl-menu end -->
                                </div><!-- .navbar.navbar-collapse end -->
                            </nav><!-- .navbar end -->
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .main-nav end -->
            </div><!-- .container end -->
        </div><!-- .header-inner end -->
    </header><!-- #header end -->
</div><!-- #header-wrapper end -->





<!-- .page-content start -->


<?= $content ?>



<!-- .page-content start -->


<div id="footer-wrapper">
    <!-- #footer start -->
    <footer id="footer">
        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row mb-60">
                <!-- .col-md-4 start -->
                <div class="col-md-1">

                </div><!-- .col-md-4 end-->

                <!-- .col-md-4 start -->
                <div class="col-md-10 centered">
                    <a href="index.html">
                        <img src="img/foot.png" alt=" " >
                    </a>


                </div>

                <!-- .col-md-4 start -->
                <div class="col-md-1">

                </div><!-- .col-md-4 end-->
            </div><!-- .row end -->

            <!-- .row start -->
            <div class="row mb-40">
                <!-- .col-md-6 start -->


                <!-- .col-md-6 start -->

            </div><!-- .row end -->
        </div><!-- .container end -->
    </footer><!-- #footer end -->
</div><!-- #footer-wrapper end -->

<!-- #copyright-container start -->
<div id="copyright-container">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-4">
                <p> </p>
            </div><!-- .col-md-6 end -->
            <div class="col-md-4">
                <p>© Traiteur 2018. All rights reserved.</p>
            </div><!-- .col-md-6 end -->
            <div class="col-md-4">


                <!-- .social-links start -->
                <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul><!-- .social-links end -->

            </div><!-- .col-md-6 end -->
            <!-- .col-md-6 start -->

        </div><!-- .row end -->
    </div><!-- .container end -->

    <a href="#" class="scroll-up"><i class="fa fa-angle-double-up"></i></a>

</div><!-- .copyright-container end -->
<!-- #footer-wrapper start -->
<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="js/gallery.js"></script><!-- for gallery -->
<script src="js/masterslider/masterslider.min.js"></script><!-- Master slider main js -->
<script src="js/masterslider/jquery.easing.min.js"></script><!-- Master slider easing js -->
<script src="js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->
<script src="js/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->
<script src="js/jquery.isotope.min.js"></script><!-- jQuery isotope plugin -->
<script src="js/instagram-stream.jquery.js"></script><!-- instagram stream plugin -->
<script src="js/TweenMax.min.js"></script> <!-- Plugin for smooth scrolling-->
<script src="js/retina.min.js"></script><!-- retina images script -->
<script src="js/ScrollToPlugin.min.js"></script> <!-- Plugin for smooth scrolling-->


</body>
</html>
