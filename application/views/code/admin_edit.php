<div class="card">
    <div class="card-body">
        <div class="card-title">Code</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Code/insert'); ?>">
            <div class="form-group">
                <label for="input-1">Code</label>
                <div style="width: 300px;">
                    <input type="text" name="code" class="form-control" id="input-1" placeholder="Entrer votre code">
                </div>
            </div>
            <div class="form-group">
                <label for="input-1">Argent</label>
                <div style="width: 300px;">
                    <input type="number" name="argent" class="form-control" id="input-1" placeholder="Entrer montant">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>