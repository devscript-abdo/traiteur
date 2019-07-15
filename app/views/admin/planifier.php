<div class="row">
    <div class="col-lg-6 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                Planifions votre mariage parfait
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <a data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs">Ajouter</a>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>image</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach(\App\Table\Planifions::getAll() as $planifions) : ?>
                            <tr>
                                <td>#</td>
                                <td><?= nl2br($planifions->titre);?></td>
                                <td>
                                    <img  class="image-fixer img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/planifions/'.$planifions->image ;?>">
                                </td>

                                <td>
                                    <form role="form" method="post">
                                        <div class="form-group has-success">
                                            <input type="submit" name="" value="delete" class="btn btn-danger btn-xs">
                                            <input type="hidden" name="delete" value="<?= $planifions->id;?>">
                                            <input type="hidden" name="img" value="<?= $planifions->image;?>">
                                        </div>
                                    </form>
                                </td>
                                <?php

                                if($_SERVER['REQUEST_METHOD']=='POST'):

                                    if(isset($_POST['delete']) && !is_null($_POST['delete'])&& !is_null($_POST['img'])) {


                                        \App\Table\Planifions::delete($_POST['delete'],$_POST['img']);

                                        \App\App::getInstance()->load();
                                    }

                                endif;

                                ?>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Planifions</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <?php

                                        if($_SERVER['REQUEST_METHOD']=='POST'):

                                            if(isset($_POST['titre']) && !is_null($_POST['titre'])) {

                                                \App\Table\Planifions::addPlanifions($_FILES['file'],$_POST['titre']);

                                                \App\App::getInstance()->load();
                                            }

                                        endif;

                                        ?>
                                        <form role="form" method="post" enctype="multipart/form-data">
                                            <div class="form-group has-success">
                                                <!--<label class="control-label" for="inputSuccess">Input with success</label>-->
                                                <input type="text" name="titre" class="form-control" value="" placeholder="Titre">
                                            </div>
                                            <div class="form-group has-success">
                                                <!--<label class="control-label" for="inputSuccess">Input with success</label>-->
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="form-group has-success">
                                                <input type="submit" value="Ajouter" class="btn btn-primary btn-big">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------------->


    <div class="col-lg-6 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                Planifions votre mariage images
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <a data-toggle="modal" data-target="#myModala" class="btn btn-primary btn-xs">Modifier une image</a>
                        <tr>
                            <th>#</th>
                            <th>image</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $accueil = \App\Table\Accueil::getSingle(1); ?>
                        <?php if($accueil) : ?>
                            <tr>
                                <td>#</td>
                                <td>
                                    <img  class="image-fixer img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/accueil/'.$accueil->photo1 ;?>">
                                </td>

                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <img  class="image-fixer img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/accueil/'.$accueil->photo2 ;?>">
                                </td>

                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <img  class="image-fixer img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/accueil/'.$accueil->photo3 ;?>">
                                </td>

                            </tr>
                            <tr>
                                <td>#</td>
                                <td>
                                    <img  class="image-fixer img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/accueil/'.$accueil->photo4 ;?>">
                                </td>

                            </tr>
                        <?php endif;  ?>
                        <?php if(isset($_SESSION['errors'])): ?>

                            <?php foreach ($_SESSION['errors'] as $error): ?>

                                <div class="alert alert-danger"><?= $error;?></div>

                            <?php endforeach; ?>

                        <?php endif ?>
                        </tbody>
                        <div class="modal fade" id="myModala" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Planifions</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <?php

                                        if($_SERVER['REQUEST_METHOD']=='POST'):

                                            if(isset($_POST['selector']) && !is_null($_POST['selector'])) {

                                                \App\Table\Accueil::addAccueilImage($_FILES['file'],$_POST['selector']);

                                                \App\App::getInstance()->load();
                                                //unset($_SESSION['errors']);

                                            }

                                        endif;?>


                                        <form role="form" method="post" enctype="multipart/form-data">
                                            <div class="form-group has-success">
                                                <label for="file">Sélectionner le fichier pour telecharger</label>
                                                <input type="file" name="file" class="form-control">
                                            </div>
                                            <div class="form-group has-success">

                                                <label for="selector">Sélectionner la photo que vous voulez modifier</label>
                                                <select name="selector">

                                                    <option name="photo1" value="photo1"> PHOTO 1</option>
                                                    <option name="photo2" value="photo2"> PHOTO 2</option>
                                                    <option name="photo3" value="photo3"> PHOTO 3</option>
                                                    <option name="photo4" value="photo4"> PHOTO 4</option>
                                                </select>
                                                <input type="submit" value="Modifier" class="btn btn-primary btn-big">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


