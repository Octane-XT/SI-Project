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
                            <th>Code</th>
                            <th>Valeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($code); $i++) { ?>
                            <tr>
                                <td><?php echo $code[$i]->nom; ?></td>
                                <td><?php echo $code[$i]->argent; ?> Ar</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>