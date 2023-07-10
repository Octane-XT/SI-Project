<div class="card">
    <div class="card-body">
        <div class="card-title">Modifier le Sport</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Sport/update'); ?>">
            <div class="form-group">
                <label for="input-1">Nom</label>
                <div style="width: 300px;">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="text" name="nom" class="form-control" id="input-1" placeholder="Entrer le nom du sport">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div