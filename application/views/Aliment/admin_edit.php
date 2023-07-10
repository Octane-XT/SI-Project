<div class="card">
    <div class="card-body">
        <div class="card-title">Modifier Aliment</div>
        <hr>
        <form method="POST" action="<?php echo base_url(''); ?>">
            <div class="form-group">
                <label for="input-1">Nom</label>
                <div style="width: 300px;">
                    <input type="text" name="nom" class="form-control" id="input-1" placeholder="Entrer le nom du regime">
                </div>
            </div>
            <div class="form-group">
                <label for="input-1">Type Aliment</label>
                <div style="width: 300px;">
                    <select name="type" class="form-control" id="">
                        <option value="">Choisissez Type</option>
                        <option value="">A</option>
                        <option value="">B</option>
                        <option value="">C</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div