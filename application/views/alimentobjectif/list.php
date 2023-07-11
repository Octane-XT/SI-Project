<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Recent Order Tables
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void();">Action</a>
                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Aliment</th>
                            <th>Regime</th>
                            <th>Quantite</th>
                            <th>Poids</th>
                            <th>Prix</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($aliment_objectifs); $i++) { ?>
                            <tr>
                                <td><?php echo $aliment_objectifs[$i]['aliment']; ?></td>
                                <td><?php echo $aliment_objectifs[$i]['regime']; ?></td>
                                <td><?php echo $aliment_objectifs[$i]['quantite']; ?></td>
                                <td><?php echo $aliment_objectifs[$i]['poids']; ?></td>
                                <td><?php echo $aliment_objectifs[$i]['prix']; ?></td>
                                <td><a href="<?php echo base_url('Alimentobjectif/edit/' . $aliment_objectifs[$i]['id']); ?>"><button class="btn btn-info">Modifier</button></a></td>
                                <td><a href="<?php echo base_url('Alimentobjectif/delete/' . $aliment_objectifs[$i]['id']); ?>"><button class="btn btn-danger">Supprimer</button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>