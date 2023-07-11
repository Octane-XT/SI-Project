
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="assets/images/logo.jpg" alt="logo icon" style="width:30px; height:30px;">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Objectif</div>
                    <form method="POST" action="<?php echo base_url("Objectif/regime"); ?>">
                        <div class="form-group">
                            <label for="exampleInputUsername" class="sr-only">Poids</label>
                            <div class="position-relative has-icon-right">
                                <input type="number" name="poids" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Your Objectif">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName" class="sr-only">Type de regime</label>
                            <div class="position-relative has-icon-right" id="select_champ">
                                <select name="type" id="exampleInputName1" class="form-control input-shadow">
                                    <option value="">Selectionnez le type de regime</option>
                                </select>
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light btn-block">Valider</button>
                    </form>
                </div>
            </div>
        </div>