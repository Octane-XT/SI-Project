<div class="card">
    <div class="card-body">
        <div class="card-title">Ajoutez Aliment</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Aliment/add'); ?>">
            <div class="form-group">
                <label for="input-1">Nom</label>
                <div style="width: 300px;">
                    <input type="text" name="nom" class="form-control" id="input-1" placeholder="Entrer le nom de l'aliment">
                </div>
            </div>
            <div class="form-group">
                <label for="input-1">Type Aliment</label>
                <div style="width: 300px;">
                    <select name="type" class="form-control" id="">
                        <option value="">Choisissez Type</option>
                        <?php for ($i = 0; $i < count($listTypeAliment); $i++) { ?>
                            <option value="<?php echo $listTypeAliment[$i]->id; ?>"><?php echo $listTypeAliment[$i]->nom; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>