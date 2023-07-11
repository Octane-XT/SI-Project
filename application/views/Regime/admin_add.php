<div class="card">
    <div class="card-body">
        <div class="card-title">Ajoutez Regime</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Regime/add'); ?>" id="mon-formulaire">
            <div class="form-group">
                <label for="input-1">Nom</label>
                <div style="width: 300px;">
                    <input type="text" name="nom" class="form-control" id="input-1" placeholder="Entrer le nom de l'aliment" data-parsley-required="true">
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Type Regime</label>
                <div style="width: 300px;">
                    <select name="type" class="form-control" data-parsley-required="true">
                        <option value="">Choisissez Type</option>
                        <option value="1">Augmentation du poids</option>
                        <option value="-1">Diminution du poids</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Petit dejeuner</label>
                <?php for ($i = 0; $i < count($listPetitDejeuner); $i++) { ?>
                    <div class="form-check" style="width: 30%;">
                        <input class="form-check-input" type="checkbox" name="petitDejeuner[]" id="checkbox1-<?php echo $i; ?>" value="<?php echo $listPetitDejeuner[$i]['id']; ?>">
                        <label class="form-check-label"><?php echo $listPetitDejeuner[$i]['nom']; ?></label>
                        <div class="input-group">
                            <input type="number" name="quantitepetitdej[]" class="form-control" placeholder="Quantité" style="width: 70px;" data-parsley-required-if="#checkbox1-<?php echo $i; ?>:checked" min="1">
                            <input type="number" name="prixpetitdej[]" class="form-control" placeholder="Prix" style="width: 70px;" data-parsley-required-if="#checkbox1-<?php echo $i; ?>:checked" min="0">
                            <input type="number" name="poidspetitdej[]" class="form-control" placeholder="Poids" style="width: 70px;" data-parsley-required-if="#checkbox1-<?php echo $i; ?>:checked" min="1">
                        </div>
                    </div>
                <?php } ?>
            </div>


            <div class="form-group">
                <label>Gouter</label>
                <?php for ($i = 0; $i < count($listGouter); $i++) { ?>
                    <div class="form-check" style="width: 30%;">
                        <input class="form-check-input" type="checkbox" name="Gouter[]" id="checkbox2-<?php echo $i; ?>" value="<?php echo $listGouter[$i]['id']; ?>">
                        <label class="form-check-label"><?php echo $listGouter[$i]['nom']; ?></label>
                        <div class="input-group">
                            <input type="number" name="quantitegouter[]" class="form-control" placeholder="Quantité" style="width: 70px;" data-parsley-required-if="#checkbox2-<?php echo $i; ?>:checked" min="1">
                            <input type="number" name="prixgouter[]" class="form-control" placeholder="Prix" style="width: 70px;" data-parsley-required-if="#checkbox2-<?php echo $i; ?>:checked" min="0">
                            <input type="number" name="poidsgouter[]" class="form-control" placeholder="Poids" style="width: 70px;" data-parsley-required-if="#checkbox2-<?php echo $i; ?>:checked" min="1">
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label>Dejeuner</label>
                <?php for ($i = 0; $i < count($listDejeuner); $i++) { ?>
                    <div class="form-check" style="width: 30%;">
                        <input class="form-check-input" type="checkbox" name="Dejeuner[]" id="checkbox3-<?php echo $i; ?>" value="<?php echo $listDejeuner[$i]['id']; ?>">
                        <label class="form-check-label"><?php echo $listDejeuner[$i]['nom']; ?></label>
                        <div class="input-group">
                            <input type="number" name="quantitedejeuner[]" class="form-control" placeholder="Quantité" style="width: 70px;" data-parsley-required-if="#checkbox3-<?php echo $i; ?>:checked" min="1">
                            <input type="number" name="prixdejeuner[]" class="form-control" placeholder="Prix" style="width: 70px;" data-parsley-required-if="#checkbox3-<?php echo $i; ?>:checked" min="0">
                            <input type="number" name="poidsdejeuner[]" class="form-control" placeholder="Poids" style="width: 70px;" data-parsley-required-if="#checkbox3-<?php echo $i; ?>:checked" min="1">
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label>Diner</label>
                <?php for ($i = 0; $i < count($listDiner); $i++) { ?>
                    <div class="form-check" style="width: 30%;">
                        <input class="form-check-input" type="checkbox" name="Diner[]" id="checkbox4-<?php echo $i; ?>" value="<?php echo $listDiner[$i]['id']; ?>">
                        <label class="form-check-label"><?php echo $listDiner[$i]['nom']; ?></label>
                        <div class="input-group">
                            <input type="number" name="quantitediner[]" class="form-control" placeholder="Quantité" style="width: 70px;" data-parsley-required-if="#checkbox4-<?php echo $i; ?>:checked" min="1">
                            <input type="number" name="prixdiner[]" class="form-control" placeholder="Prix" style="width: 70px;" data-parsley-required-if="#checkbox4-<?php echo $i; ?>:checked" min="0">
                            <input type="number" name="poidsdiner[]" class="form-control" placeholder="Poids" style="width: 70px;" data-parsley-required-if="#checkbox4-<?php echo $i; ?>:checked" min="1">
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label>Activites Sportives</label>
                <?php for ($i = 0; $i < count($listSport); $i++) { ?>
                    <div class="form-check" style="width: 30%;">
                        <input class="form-check-input" type="checkbox" name="sport[]" id="checkbox5-<?php echo $i; ?>" value="<?php echo $listSport[$i]->id; ?>">
                        <label class="form-check-label"><?php echo $listSport[$i]->nom; ?></label>
                        <div class="input-group">
                            <input type="number" name="frequencesport[]" class="form-control" placeholder="Frequence" style="width: 70px;" data-parsley-required-if="#checkbox5-<?php echo $i; ?>:checked" min="1">
                            <input type="number" name="prixsport[]" class="form-control" placeholder="Prix" style="width: 70px;" data-parsley-required-if="#checkbox5-<?php echo $i; ?>:checked" min="0">
                            <input type="number" name="poidssport[]" class="form-control" placeholder="Poids" style="width: 70px;" data-parsley-required-if="#checkbox5-<?php echo $i; ?>:checked" min="1">
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#mon-formulaire').parsley();
    });
</script>
<script src="<?php echo base_url('assets/js/parsley.min.js'); ?>"></script>