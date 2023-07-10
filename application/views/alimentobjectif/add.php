<?php var_dump($regime); ?>
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
                    <input type="number" name="quantite" class="form-control" id="input-1" placeholder="Entrer votre code">
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Poids</label>
                <div style="width: 300px;">
                    <input type="number" name="poids" class="form-control" id="input-1" placeholder="Entrer votre code">
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Prix</label>
                <div style="width: 300px;">
                    <input type="number" name="prix" class="form-control" id="input-1" placeholder="Entrer votre code">
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>