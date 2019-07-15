

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
                        <th>nom</th>
                        <th>tele</th>
                        <th>email</th>
                        <th>description</th>
                        <th>etat</th>
                        <th>type</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach(\App\Table\Messages::getAll()as $message) : ?>
                        <tr>
                            <td>#</td>
                            <td><?= nl2br($message->nom);?></td>
                            <td><?= nl2br($message->tel);?></td>
                            <td><?= nl2br($message->email);?></td>
                            <td><?= nl2br($message->description);?></td>
                            <td><?= nl2br($message->etat);?></td>
                            <td><?= nl2br($message->type);?></td>
                            <td>
                                <form role="form" method="post" style="display: inline-block">
                                    <input type="hidden" name="etat" class="form-control" value="<?= $message->id ;?>">
                                    <input type="submit" value="Vué" class="btn btn-primary btn-xs">
                                </form>
                                <?php

                                if(isset($_POST['etat']) && !is_null($_POST['etat']))
                                {

                                    \App\Table\Messages::readMessage($_POST['etat']);

                                    \App\App::getInstance()->load();

                                }
                                ?>
                                <form role="form" method="post" style="display: inline-block">
                                    <input type="hidden" name="deleted" class="form-control" value="<?= $message->id ;?>">
                                    <input type="submit" value="supprimer" class="btn btn-danger btn-xs">
                                </form>
                                <?php

                                if(isset($_POST['deleted']) && !is_null($_POST['deleted']))
                                {

                                    \App\Table\Messages::deleteMessage($_POST['deleted']);

                                    \App\App::getInstance()->load();

                                }
                                ?>
                            </td>

                        </tr>
                    <?php endforeach ;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
