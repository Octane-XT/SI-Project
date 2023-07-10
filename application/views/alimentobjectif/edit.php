<div class="card">
    <div class="card-body">
        <div class="card-title">Code</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Code/check_code'); ?>">
            <input type="hidden" name="id" values="<?php echo $aliment_objectif[0]["id"]; ?>">
            <div class="form-group">
                <label for="input-1">Aliment</label>
                <div style="width: 300px;">
                    <select class="form-control" name="aliment" id="">
                        <option value="<?php echo $aliment_objectif[0]["id_aliment"]; ?>"><?php echo $aliment_objectif[0]["aliment"]; ?></option>
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
                        <option value="<?php echo $aliment_objectif[0]["id_regime"]; ?>"><?php echo $aliment_objectif[0]["regime"]; ?></option>
                        <?php for ($i = 0; $i < count($regime); $i++) { ?>
                            <option value="<?php echo $regime[$i]->id; ?>"><?php echo $regime[$i]->nom; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Quantite</label>
                <div style="width: 300px;">
                    <input type="number" name="quantite" class="form-control" id="input-1" placeholder="<?php echo $aliment_objectif[0]["quantite"]; ?>">
                </div>
            </div>

            <div class=" form-group">
                <label for="input-1">Poids</label>
                <div style="width: 300px;">
                    <input type="number" name="poids" class="form-control" id="input-1" placeholder="<?php echo $aliment_objectif[0]["poids"]; ?>">
                </div>
            </div>

            <div class=" form-group">
                <label for="input-1">Prix</label>
                <div style="width: 300px;">
                    <input type="number" name="prix" class="form-control" id="input-1" placeholder="<?php echo $aliment_objectif[0]["prix"]; ?>">
                </div>
            </div>


            <div class=" form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>