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
                <label for="input-1">Viande</label>
                <div style="width: 300px;">
                    <input type="number" name="viande" class="form-control" id="input-viande" min="0" max="100" placeholder="En pourcentage" oninput="checkSum()">
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Poisson</label>
                <div style="width: 300px;">
                    <input type="number" name="poisson" class="form-control" id="input-poisson" min="0" max="100" placeholder="En pourcentage" oninput="checkSum()">
                </div>
            </div>

            <div class="form-group">
                <label for="input-1">Volaille</label>
                <div style="width: 300px;">
                    <input type="number" name="volaille" class="form-control" id="input-volaille" min="0" max="100" placeholder="En pourcentage" oninput="checkSum()">
                </div>
            </div>

            <div id="error-message" style="color: red; display: none;">La somme des pourcentages ne doit pas dépasser 100.</div>

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
                            <input type="number" name="poidspetitdej[]" class="form-control" placeholder="Poids en g" style="width: 70px;" data-parsley-required-if="#checkbox1-<?php echo $i; ?>:checked" min="1">
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
                            <input type="number" name="poidsgouter[]" class="form-control" placeholder="Poids en g" style="width: 70px;" data-parsley-required-if="#checkbox2-<?php echo $i; ?>:checked" min="1">
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
                            <input type="number" name="poidsdejeuner[]" class="form-control" placeholder="Poids en g" style="width: 70px;" data-parsley-required-if="#checkbox3-<?php echo $i; ?>:checked" min="1">
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
                            <input type="number" name="poidsdiner[]" class="form-control" placeholder="Poids en g" style="width: 70px;" data-parsley-required-if="#checkbox4-<?php echo $i; ?>:checked" min="1">
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
                            <input type="number" name="poidssport[]" class="form-control" placeholder="Poids en g" style="width: 70px;" data-parsley-required-if="#checkbox5-<?php echo $i; ?>:checked" min="1">
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

    // Récupérer les éléments des champs de saisie
    var viandeInput = document.querySelector('input[name="viande"]');
    var poissonInput = document.querySelector('input[name="poisson"]');
    var volailleInput = document.querySelector('input[name="volaille"]');

    // Écouter les événements de saisie sur les champs de saisie
    viandeInput.addEventListener('input', checkSum);
    poissonInput.addEventListener('input', checkSum);
    volailleInput.addEventListener('input', checkSum);

    // Fonction pour vérifier la somme des valeurs
    function checkSum() {
        var viandeValue = parseInt(viandeInput.value) || 0;
        var poissonValue = parseInt(poissonInput.value) || 0;
        var volailleValue = parseInt(volailleInput.value) || 0;

        var sum = viandeValue + poissonValue + volailleValue;
        var errorMessage = document.getElementById('error-message');
        var form = document.getElementById('mon-formulaire');

        if (sum > 100) {
            errorMessage.style.display = 'block';
            form.addEventListener('submit', preventSubmit);
        } else {
            errorMessage.style.display = 'none';
            form.removeEventListener('submit', preventSubmit);
        }

        function preventSubmit(event) {
            event.preventDefault();
        }
    }
</script>
<script src="<?php echo base_url('assets/js/parsley.min.js'); ?>"></script>