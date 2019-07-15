<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            A PROPOS
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre 1</th>
                        <th>Titre 2</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $apropo = \App\Table\Apropos::getSingle(1) ?>
                    <tr>
                        <td>#</td>
                        <td><?= nl2br($apropo->titre);?></td>
                        <td><?= nl2br($apropo->titrea);?></td>
                        <td><?= nl2br($apropo->description);?></td>

                        <td>
                            <a data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs">modifier</a>
                        </td>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">A PROPOS</h4>
                                    </div>
                                    <div class="modal-footer">

                                        <form role="form" method="post">
                                            <div class="form-group has-success">
                                                <label class="control-label" for="inputSuccess">Titre 1</label>
                                                <input type="text" name="titre" class="form-control" value="<?= nl2br($apropo->titre) ;?>">
                                            </div>

                                            <div class="form-group has-success">
                                                <label class="control-label" for="inputSuccess">Titre 2</label>
                                                <input type="text"  name="titrea" class="form-control" value="<?= nl2br($apropo->titrea) ;?>">
                                            </div>
                                            <div class="form-group has-warning">

                                                                    <textarea name="descr" class="form-control" rows="20">
                                                                        <?= $apropo->description ;?>
                                                                    </textarea>
                                            </div>

                                            <input type="submit" value="modifier" class="btn btn-primary btn-xs">
                                        </form>
                                        <?php

                                        if(isset($_POST['titre']) and isset($_POST['descr'])and isset($_POST['titrea']) && !is_null($_POST['titre']))
                                        {

                                            $validator = new \App\Validator($_POST);

                                            $validator->isEmpty('titre','le champs Titre 1 ne peu pas être vide');

                                            $validator->isEmpty('titrea','le champs Titre 2 ne peu pas être vide');

                                            if($validator->isValid())
                                            {

                                                \App\Table\Apropos::updateApropos($_POST['titre'],$_POST['titrea'],$_POST['descr']);

                                                \App\App::getInstance()->load();

                                            }
                                            else
                                            {
                                                $errors = $validator->getErrors();
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($errors)): ?>
                            <?php foreach($errors as $error ): ?>
                                <div class="alert alert-danger"><?= $error ;?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a data-toggle="modal" data-target="#myModalfilea" class="btn btn-primary btn-xs">modifier</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>image</th>
                    </tr>
                    </thead>
                    <tbody >

                    <tr>

                        <td>photo 1</td>
                        <td>
                            <img  class="image-fixer img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/apropos/'.$apropo->photoa ;?>">
                        </td>
                    </tr>
                    <tr>

                        <td>photo 2</td>
                        <td>
                            <img class="  img-responsive img-rounded" style=" height: 240px !important;width:240px !important;" src="<?= 'img/apropos/'.$apropo->photob ;?>">
                        </td>
                    </tr>

                    <div class="modal fade" id="myModalfilea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">image 1</h4>
                                </div>
                                <div class="modal-footer">

                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group has-success">
                                            <!--<label class="control-label" for="inputSuccess">Input with success</label>-->
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                        <select name="selector">
                                            <option name="photo1" value="photoa"> PHOTO 1</option>
                                            <option name="photo2" value="photob"> PHOTO 2</option>
                                        </select>
                                        <input type="submit" value="modifier" class="btn btn-primary btn-xs">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                    if($_SERVER['REQUEST_METHOD']=='POST'):

                        if(isset($_POST['selector']) && !is_null($_POST['selector'])) {

                            $photo = $_POST['selector'];

                            \App\Table\Apropos::updateAproposImage($_FILES['file'],$photo);

                            \App\App::getInstance()->load();
                        }

                    endif;

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>