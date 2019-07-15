<!-- .page-content start -->
<div  style="background-image: url(./img/gateau/p.jpg);" class="page-content custom-img-background dark page-title page-title-4 mb-100">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <br/> <h1><span> PATISSERIE </span></h1>

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

                    <h3>PATISSERIE</h3>

                    <!-- .divider.style-1 start -->
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="fa fa-circle hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                </div><!-- .custom-heading.style-1 end -->
                <ul id="filters">
                    <li class="active"><a href="#" data-filter="*">Tous</a></li>

                    <li><a href="#" data-filter=".maroc">PATISSERIE MAROCAINE</a></li>

                    <li><a href="#" data-filter=".autre">AUTRE</a></li>

                </ul>
            </div><!-- .col-md-12 end -->
        </div><!-- .row.gallery-filters end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <ul id="galleryitems" class="isotope isotopeitems-full">
                <?php foreach($patisseries as $patisserie ): ?>
                    <li class="col-xs-6 col-md-3 isotope-item <?=$patisserie->type;?>">
                        <figure class="gallery-item-container">
                            <div class="gallery-img">
                                <img src="<?= 'img/patisserie/'.$patisserie->image ;?>" alt="" style="width: 380px;height: 208px;"/>
                                <div class="hover-mask-container">
                                    <div class="hover-zoom">
                                        <a href="<?= 'img/patisserie/'.$patisserie->image ;?>" class="triggerZoom fa fa-search"></a>
                                    </div><!-- .hover-zoom end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .gallery-img end -->
                        </figure><!-- .gallery-item-container end -->
                    </li><!-- .isotope-item end -->
                <?php endforeach;?>
            </ul><!-- #galleryitems.isotope end -->
        </div><!-- .row end -->
    </div><!-- .container-fluid end -->
</div><!-- .page-content end -->
<!-- .page-content start -->


<div class="page-content">
    <div class="container">
        <!-- .row start -->
        <div class="row mb-40">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered mb-0">
                <div class="custom-heading style-1">
                    <h3><span>Réservation</span></h3>


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
                                </span>
                        <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" class="wpcf7-text" id="contact-email" placeholder="Email..." required>
                             <input name="type" value="patisserie" class="otw-reservation-email" type="hidden" >
                                </span>
                        <span class="wpcf7-form-control-wrap your-phone">
                                    <input type="text" name="tel" class="wpcf7-text" id="contact-phone" placeholder="Tel..." required>
                                </span>
                    </fieldset>

                    <fieldset>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea rows="8" name="message" class="wpcf7-textarea" id="contact-message" placeholder="Réserver..." required></textarea>
                                </span>
                    </fieldset>
                    <input type="submit" class="wpcf7-submit btn btn-big black btn-centered" value="Send">
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