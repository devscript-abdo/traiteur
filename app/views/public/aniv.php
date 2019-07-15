<!-- .page-content start -->
<div  style="background-image: url(./img/anniv.jpg);" class="page-content custom-img-background dark page-title page-title-4 mb-100">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <br/> <h1><span>  ANNIVERSAIRE</span></h1>

                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->
<div class="page-content">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row gallery-filters">
            <div class="col-md-12 mb-20 centered triggerAnimation animated" data-animate='fadeIn'>
                <div class="custom-heading style-1">

                    <h3>ANNIVERSAIRE</h3>

                    <!-- .divider.style-1 start -->
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="fa fa-circle hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                </div>
            </div><!-- .col-md-12 end -->
        </div><!-- .row.gallery-filters end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<div class="page-content">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <div class="col-md-12 centered">
                <!-- form start -->
                <form class="wpcf7 contact-form-extended" method="post">
                    <fieldset>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="nom" class="wpcf7-text" id="contact-name" placeholder="Nom..." required>
                                    <input type="hidden" name="type" value="aniv" class="wpcf7-text" id="contact-name" placeholder="Nom..." required>
                                </span>
                        <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" class="wpcf7-text" id="contact-email" placeholder="Email..." required>
                                </span>
                        <span class="wpcf7-form-control-wrap your-phone">
                                    <input type="text" name="tel" class="wpcf7-text" id="contact-phone" placeholder="Tel..." required>
                                </span>
                    </fieldset>

                    <fieldset>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="message" rows="8" class="wpcf7-textarea" id="contact-message" placeholder="Réserver..." required></textarea>
                                </span>
                    </fieldset>
                    <input type="submit" class="wpcf7-submit btn btn-big black btn-centered" value="Send">
                </form><!-- .wpcf7 end -->
                <?php

                if(isset($_POST['type']) and isset($_POST['tel'])and isset($_POST['email'])and isset($_POST['message']) && !is_null($_POST['nom']))
                {
                    /* $validator = new \App\Validator($_POST);

                     $validator->isAlpha('nom',"votre nom n'est pas valid");

                     $validator->isEmail('email',"votre email n'est pas valid");

                     $validator->isNumber('tel',"votre numero de tele n' est pas valid");

                     $validator->isEmpty('message','entrer un contenu svp ! ');

                     if($validator->isValid())*/
                    // {
                    \App\Table\Messages::sendMessage($_POST['type'],$_POST['nom'],$_POST['tel'],$_POST['email'],$_POST['message'],"encours");

                    /* }
                     else
                     {
                         $errors = $validator->getErrors();
                     }*/

                }

                ?>
            </div>

        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->