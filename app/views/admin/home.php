
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
                        <th>Titre</th>
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
                                        <?php

                                        if(isset($_POST['titre']) and isset($_POST['descr']) && !is_null($_POST['titre']))
                                        {

                                            //
                                            if(\App\Table\Apropos::updateApropos($_POST['titre'],$_POST['titrea'],$_POST['descr']))
                                            {
                                                \App\App::getInstance()->load();

                                            }
                                        }

                                        ?>

                                        <form role="form" method="post">
                                            <div class="form-group has-success">
                                                <!--<label class="control-label" for="inputSuccess">Input with success</label>-->
                                                <input type="text" name="titre" class="form-control" value="<?= nl2br($apropo->titre) ;?>">

                                            </div>

                                            <div class="form-group has-success">
                                                <input type="text" name="titrea" class="form-control" value="<?= nl2br($apropo->titrea) ;?>">
                                            </div>

                                            <div class="form-group has-warning">

                                                                    <textarea name="descr" class="form-control" rows="20">
                                                                        <?= $apropo->description ;?>
                                                                    </textarea>
                                            </div>

                                            <input type="submit" value="modifier" class="btn btn-primary btn-xs">

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
