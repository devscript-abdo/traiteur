
<!-- .page-content start -->
<div  style="background-image: url(./img/slide01.jpg);" class="page-content custom-img-background dark page-title page-title-4 mb-100">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <br/> <h1><span>  </span></h1>
                    <br/> <h1><span>  </span></h1>
                    <br/> <h1><span>  </span></h1>
                    <br/> <h1><span>  </span></h1>
                    <br/> <h1><span>  </span></h1>
                    <br/> <h1><span>  </span></h1>
                    <br/> <h1><span>  </span></h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->


<div class="page-content custom-img-background bkg-img1">
    <div class="container">
        <!-- .row start -->

        <?php //var_dump($apropo) ?>
        <div class="row">
            <!-- .col-md-3 start -->
            <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                <img src="img/apropos/<?= $apropo->photoa ;?>" alt="Royal Plate - Restaurant & Catering HTML Template" />
            </div><!-- .col-md-3 end -->

            <!-- .col-md-6 start -->
            <div class="col-md-6 col-sm-6 centered">
                <div class="frame-box custom-img-background ">
                    <div class="custom-heading style-1">
                        <h3><span>A PROPOS</span></h3>
                        <!--   <h3>Love for food</h3>

                        .divider.style-1 start -->
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="fa fa-circle hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div>

                    <h3><?= nl2br($apropo->titre);?></h3>

                    <p> <?= nl2br($apropo->description);?></p>

                    <br />

                    <h3><?= nl2br($apropo->titrea);?></h3>

                </div>
            </div><!-- .col-md-6 end -->

            <!-- .col-md-3 start -->
            <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                <img src="img/apropos/<?= $apropo->photob ;?>" alt="Royal Plate - Restaurant & Catering HTML Template" />
            </div><!-- .col-md-3 end -->
        </div><!-- .row end -->

    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->
<div class="page-content custom-img-background dark bkg-img3 custom-col-padding mb-100">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>

                    <h2>Laissez-nous faire votre mariage sans faille</h2>

                    <!-- .divider.style-2 start -->
                    <div class="divider style-2 center">
                        <span class="hr-double left"></span>
                        <span class="divider-svg">
                                    <img src="img/svg/heading-icon.svg" alt="">
                                </span>
                        <span class="hr-double right"></span>
                    </div>
                    <a href="#" class="btn btn-warning" role="button">ENVOYER UNE DEMANDE</a>

                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->
<div class="page-content">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <!-- .simple-gallery.row start -->
                <ul class="simple-gallery row">

                    <?php if($photo) : ?>
                        <li class="gallery-item col-md-6 triggerAnimation animated" data-animate='fadeIn'>
                            <img src="<?= 'img/accueil/'.$photo->photo1 ;?>" alt="" style=" height: 240px !important;width: 100%;" />
                            <div class="hover-mask-container">
                                <div class="hover-mask"></div>
                                <div class="hover-zoom">
                                    <a href="<?= 'img/accueil/'.$photo->photo1 ;?>" class="triggerZoom"></a>
                                </div><!-- .hover-details end -->
                            </div><!-- .hover-mask-container end -->
                        </li><!-- .col-md-6 end -->
                        <li class="gallery-item col-md-6 triggerAnimation animated" data-animate='fadeIn'>
                            <img src="<?= 'img/accueil/'.$photo->photo2 ;?>" alt="" style=" height: 240px !important;width: 100%;" />
                            <div class="hover-mask-container">
                                <div class="hover-mask"></div>
                                <div class="hover-zoom">
                                    <a href="<?= 'img/accueil/'.$photo->photo2 ;?>" class="triggerZoom"></a>
                                </div><!-- .hover-details end -->
                            </div><!-- .hover-mask-container end -->
                        </li><!-- .col-md-6 end -->
                        <li class="gallery-item col-md-6 triggerAnimation animated" data-animate='fadeIn'>
                            <img src="<?= 'img/accueil/'.$photo->photo3 ;?>" alt="" style=" height: 240px !important;width: 100%;" />
                            <div class="hover-mask-container">
                                <div class="hover-mask"></div>
                                <div class="hover-zoom">
                                    <a href="<?= 'img/accueil/'.$photo->photo3 ;?>" class="triggerZoom"></a>
                                </div><!-- .hover-details end -->
                            </div><!-- .hover-mask-container end -->
                        </li><!-- .col-md-6 end -->
                        <li class="gallery-item col-md-6 triggerAnimation animated" data-animate='fadeIn'>
                            <img src="<?= 'img/accueil/'.$photo->photo4 ;?>" alt="" style=" height: 240px !important;width: 100%;" />
                            <div class="hover-mask-container">
                                <div class="hover-mask"></div>
                                <div class="hover-zoom">
                                    <a href="<?= 'img/accueil/'.$photo->photo4 ;?>" class="triggerZoom"></a>
                                </div><!-- .hover-details end -->
                            </div><!-- .hover-mask-container end -->
                        </li><!-- .col-md-6 end -->
                    <?php endif;  ?>
                </ul>
            </div><!-- .col-md-6 end -->
            <!-- .col-md-6 start -->
            <div class="col-md-6 content-padding-left">
                <div class="custom-heading style-2">
                    <h3><span>Planifions votre mariage parfait</span></h3>
                    <h3>BIENVENUE</h3>
                    <div class="divider style-1">
                        <i class="fa fa-circle hr-icon left"></i>
                        <span class="hr-simple right"></span>
                    </div>
                </div><!-- .custom-heading.style-2 end -->
                <ul class="menu-style-1">

                    <?php foreach($planifions as $planifion): ?>
                        <li class="menu-item">
                            <div class="menu-item-thumbnail"><img src="<?= 'img/planifions/'.$planifion->image ;?>" alt=" " /></div>
                            <div class="menu-item-description">
                                <h5 style="margin-top:25px"><?= $planifion->titre ;?> </h5>
                                <!--    <p>Grilled Beaf steak, roasted red potatos with rosemary, mashrooms sause, vine</p>
                                --->
                            </div>
                            <div class="menu-item-price">
                                <p>Réserver</p>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->
<div class="page-content custom-img-background dark bkg-img4 custom-col-padding mb-100">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>

                    <h2>PACK ANNIVERSAIRE</h2>

                    <!-- .divider.style-2 start -->
                    <div class="divider style-2 center">
                        <span class="hr-double left"></span>
                        <span class="divider-svg">
                                    <img src="img/svg/heading-icon.svg" alt="">
                                </span>
                        <span class="hr-double right"></span>
                    </div>
                    <a href="#" class="btn btn-warning" role="button">ENVOYER UNE DEMANDE</a>

                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<!-- .page-content start -->


<!-- .page-content start -->
<div class="page-content">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-4 start -->
            <div class="col-md-4 col-sm-3 hidden-xs pt-100">
                <img src="img/pics/img-02.jpg" alt="Royal Plate - Restaurant & Catering HTML Template" />
            </div><!-- .col-md-4 end -->

            <!-- .col-md-4 start -->
            <div class="col-md-4 col-sm-6 centered pt-150 open-table-widget-style-1">
                <div class="custom-heading style-1">
                    <h3><span>Réservation</span></h3>


                    <!-- .divider.style-1 start -->
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="fa fa-circle hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                </div><!-- .custom-heading.style-1 end -->

                <!-- Open table widget start -->
                <div class="otw-bare-bones-style widget open-table-widget triggerAnimation animated" data-animate='fadeIn'>
                    <div class="otw-bare-bones">
                        <div class="otw-widget-form-wrap">
                            <form method="post" class="otw-widget-form">
                                <div class="otw-wrapper">

                                    <div class="otw-name-wrap otw-input-wrap">
                                        <input name="nom" class="otw-reservation-name" type="text" placeholder="Nom" required >
                                        <input name="type" value="home" class="otw-reservation-email" type="hidden" >
                                    </div>
                                    <div class="otw-name-wrap otw-input-wrap">
                                        <input name="tel" class="otw-reservation-name" type="text" placeholder="Tel" required >
                                    </div>
                                    <div class="otw-email-wrap otw-input-wrap">
                                        <input name="email" class="otw-reservation-email" type="email" placeholder="Your email" required >
                                    </div>

                                    <div class=" otw-input-wrap">
                                        <textarea name="message" class="" cols="36" rows="10" required>    Message</textarea>
                                    </div>
                                    <div class="otw-button-wrap">
                                        <input type="submit" class="otw-submit" value="Valider">
                                    </div>
                                </div>
                            </form>

                            <?php

                            if(isset($_POST['type']) and isset($_POST['tel'])and isset($_POST['email'])and isset($_POST['message']) && !is_null($_POST['nom']))
                            {

                                $validator = new \App\Validator($_POST);
                                \App\Table\Messages::sendMessage($_POST['type'],$_POST['nom'],$_POST['tel'],$_POST['email'],$_POST['message'],"encours");
                            }

                            ?>
                        </div><!-- .otw-widget-form-wrap end -->
                    </div>
                </div><!-- Open table widget end -->
            </div><!-- .col-md-4 end -->

            <!-- .col-md-4 start -->
            <div class="col-md-4 col-sm-3 hidden-xs pt-100">
                <img src="img/pics/img-03.jpg" alt=" " />
            </div><!-- .col-md-4 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

