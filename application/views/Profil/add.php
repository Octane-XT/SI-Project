<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="assets/images/logo.jpg" alt="logo icon" style="width:30px; height:30px;">
            </div>
            <div class="card-title text-uppercase text-center py-3">Inserer votre profil</div>
            <form method="POST" action="<?php echo base_url("Profil/update"); ?>">
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Poids</label>
                    <div class="position-relative has-icon-right">
                        <input type="number" name="poids" id="exampleInputUsername" class="form-control input-shadow" min="0" placeholder="Enter Your Weight (kg)">
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Taille</label>
                    <div class="position-relative has-icon-right">
                        <input type="number" name="taille" id="exampleInputUsername" min="0" class="form-control input-shadow" placeholder="Enter Your Height (cm)">
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-light btn-block">Valider</button>


                <br>
                <?php if ($this->input->get('imc') != null) { ?>
                    <h6>
                        <p>Votre IMC est de <?php echo $this->input->get('imc'); ?></p>
                    </h6>
                <?php } ?>
            </form>
        </div>
    </div>
</div>