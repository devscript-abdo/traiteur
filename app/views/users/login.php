
<?php

if(!empty($_POST))
{

    $validator = new \App\Validator($_POST);

    $validator->isEmail('email',"entrer votre valid email");

    $validator->isEmpty("email","entrer votre email");

    $validator->isEmpty('password',"entrer votre mot de pass");

    if($validator->isValid())
    {
        $auth = new \App\DBAuth(\App\App::getInstance()->getDb());

        if($auth->login($_POST['email'],$_POST['password']))
        {

            \App\App::getInstance()->redirect("cpanel");
        }

    }
    else
    {
     //   \App\App::getInstance()->redirect("login");

        $errors = $validator->getErrors();
    }


}

?>
<!-- .page-content start -->
<div  style="background-image: url(./img/slider/slide01.jpg);" class="page-content custom-img-background dark page-title page-title-4 mb-100">
    <div class="container">
        <!-- .row start -->

    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->





<div class="page-content">
    <div class="container">
        <!-- .row start -->
        <div class="row mb-40">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered mb-0">
                <div class="custom-heading style-1">
                    <h3><span>Login</span></h3>

                    <?php if(isset($errors)): ?>
                        <?php foreach ($errors as $error): ?>

                            <div class="alert alert-danger"> <?= $error ;?></div>

                        <?php endforeach; ?>
                    <?php endif ?>
                    <!-- .divider.style-1 start -->
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="fa fa-circle hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->

        <!-- .row start -->
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <!-- form start -->
                <form class="wpcf7 contact-form-extended" method="post">

                    <div class="form-group">
                        <input type="email" name="email" class="form-control"  placeholder="entrer votre email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control"  placeholder="entrer votre password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="wpcf7-submit btn btn-big black" value="seconnecter">
                    </div>
                </form><!-- .wpcf7 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->