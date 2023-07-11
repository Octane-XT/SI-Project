<?php
if (isset($error)) {
    $message =  $error;
?>
    <div class="alert alert-error">
        <div class="icon__wrapper">
            <i class="zmdi zmdi-alert-circle"></i>
        </div>
        <p><?php echo $message; ?></p>
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
<div class="card">
    <div class="card-body">
        <div class="card-title">Aliment Objectif</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Alimentobjectif/store'); ?>">
            <div class="form-group">
                <label for="input-1">Aliment</label>
                <div style="width: 300px;">
                    <select class="form-control" name="aliment" id="">
                        <option value="">Choix Aliment</option>
                        <?php for ($i = 0; $i < count($aliment); $i++) { ?>
                            <option value="<?php echo $aliment[$i]['id']; ?>"><?php echo $aliment[$i]['nom']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Regime</label>
                <div style="width: 300px;">
                    <select class="form-control" name="regime" id="">
                        <option value="">Choix regime</option>
                        <?php for ($i = 0; $i < count($regime); $i++) { ?>
                            <option value="<?php echo $regime[$i]->id; ?>"><?php echo $regime[$i]->nom; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Quantite</label>
                <div style="width: 300px;">
                    <input type="number" name="quantite" class="form-control" id="input-1" >
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Poids</label>
                <div style="width: 300px;">
                    <input type="number" name="poids" class="form-control" id="input-1" >
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Prix</label>
                <div style="width: 300px;">
                    <input type="number" name="prix" class="form-control" id="input-1" >
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>