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
                    <h3><span>Devis</span></h3>


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
            <div class="col-md-12 centered">
                <!-- form start -->
                <form class="wpcf7 contact-form-extended" method="post">
                    <fieldset>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="nom" class="wpcf7-text" id="contact-name" placeholder="Nom..." required>
                                    <input type="hidden" name="type" value="devis" class="wpcf7-text" id="contact-name" placeholder="Nom..." required>
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
                                    <textarea rows="8" name="message" class="wpcf7-textarea" id="contact-message" placeholder="Message..." required></textarea>
                                </span>
                    </fieldset>
                    <input type="submit" class="wpcf7-submit btn btn-big black btn-centered" value="Envoyer">
                </form><!-- .wpcf7 end -->
                <?php

                if(isset($_POST['type']) and isset($_POST['tel'])and isset($_POST['email'])and isset($_POST['message']) && !is_null($_POST['nom']))
                {

                    \App\Table\Messages::sendMessage($_POST['type'],$_POST['nom'],$_POST['tel'],$_POST['email'],$_POST['message'],"encours");
                }

                ?>
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->