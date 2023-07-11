<?php
if (isset($error)) {
    $message =  $error;
?>
    <div class="alert alert-error">
        <div class="icon__wrapper">
            <i class="zmdi zmdi-alert-circle"></i>
        </div>
        <p><?php echo $message; ?><a href="<?php echo base_url('Code') ?>">.Acheter un code </a></p>
        <span class="mdi mdi-open-in-new open"></span>
        <span class="mdi mdi-close close"></span>
    </div>
    <style>
        :root {
            --primary: #0676ed;
            --background: #222b45;
            --warning: #f2a600;
            --success: #12c99b;
            --error: #e41749;
            --dark: #151a30;
        }

        .alert {
            position: absolute;
            z-index: 1;
            min-height: 67px;
            width: 560px;
            max-width: 90%;
            border-radius: 12px;
            padding: 16px 22px 17px 20px;
            display: flex;
            align-items: center;
        }

        .alert-error {
            background: var(--error);
        }

        .alert .icon__wrapper {
            height: 34px;
            width: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.253);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert .icon__wrapper span {
            font-size: 21px;
            color: #fff;
        }

        .alert p {
            color: #fff;
            font-family: Verdana;
            margin-left: 10px;
        }

        .alert p a,
        .alert p a:visited,
        .alert p a:active {
            color: #000;
        }

        .alert .open {
            margin-left: auto;
            margin-right: 5px;
        }

        .alert .close,
        .alert .open {
            color: #fff;
            transition: transform 0.5s;
            font-size: 18px;
            cursor: pointer;
        }

        .alert .close:hover,
        .alert .open:hover {
            transform: scale(1.3);
        }
    </style>
<?php  } ?>
<div class="card card-authentication1 mx-auto my-4">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="form-group">
            <h6>Pour selection un REGIME pour votre poids ideal mettez 0 SUR LE champ OBJECTIF</h6>
                <label for="exampleInputUsername" class="sr-only">Objectif</label>
                <div class="position-relative has-icon-right">
                    <form action="<?php echo base_url("Objectif/regime"); ?>" method="post">
                        <input type="number" name="poids" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Your Objectif">
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName" class="sr-only">Type de regime</label>
                            <div class="position-relative has-icon-right" id="select_champ">
                                <select name="type" id="exampleInputName1" class="form-control input-shadow">
                                    <option value="">Selectionnez le type de regime</option>
                                </select>
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light btn-block">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var url = "<?php echo base_url('Objectif/checkRegime'); ?>";
</script>
<script src="<?php echo base_url('assets/js/objectif.js'); ?>"></script>