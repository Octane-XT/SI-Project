<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="<?php echo base_url('assets/plugins/simplebar/css/simplebar.css')?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url('assets/css/sidebar-menu.css')?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url('assets/css/app-style.css')?>" rel="stylesheet"/> <!--favicon-->
 
  
</head>

<body >


<br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <h3>
        TABLEAUX CROISES
</h3>
   <hr/>
   <br/>

      <div class="column mt-3">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Par utisateur - Par Regime</h5>
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                     <th scope="col">utilisateur</th>
                    <?php for ($i=0; $i <count($regime) ; $i++) { ?>
                     <th scope="col"><?php echo $regime[$i]->nom;?></th>
                   <?php }?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php for ($i=0; $i <count($user) ; $i++) { ?>
                    <tr>
                    <th scope="row"><?php echo $user[$i]->nom;?></th>
                     <?php for ($u=0; $u <count($regime) ; $u++) { ?>          
                                          <th scope="row"><?php echo $count[$i][$u];?></th>
                                        
                   <?php  } ?>
                   </tr>
                   <?php }?>
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Par regime - Par Genre </h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">REGIME</th>
                    <th scope="col">Femme</th>
                    <th scope="col">Homme</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0; $i < count($count_sexe); $i++) { ?>
                    <tr>
                    <th scope="row"><?php echo $regime[$i]->nom;?></th>
                    <?php for ($u=0; $u < 2; $u++) { ?>
                    <td><?php echo $count_sexe[$i][$u];?></td>
                  <?php  }?>
                  <th scope="row"><?php echo  $count_sexe[$i]['count'];?></th>
                  </tr>
                 <?php }?>
       
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


    </div>
    <!-- End container-fluid-->
    
 
	

	

   
  </div><!--End wrapper-->
  </center>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	
  <!-- simplebar js -->
  <script src="<?php echo base_url('assets/plugins/simplebar/js/simplebar.js')?>"></script>
  <!-- sidebar-menu js -->
  <script src="<?php echo base_url('assets/js/sidebar-menu.js')?>"></script>
  
  <!-- Custom scripts -->
  <script src="<?php echo base_url('assets/js/app-script.js')?>"></script>
	
</body>
</html>
