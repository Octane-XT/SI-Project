<head>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
  <!-- Icons CSS-->
  <link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="<?php echo base_url('assets/css/app-style.css'); ?>" rel="stylesheet" />

</head>

      <!--Start Dashboard Content-->

      <div class="card mt-3">
        <div class="card-content">
          <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?php echo $total_petit_dejeuner; ?> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
                </div>
                <p class="mb-0 text-white small-font">Total Petit dejeuner <span class="float-right"><?php echo $total_petit_dejeuner; ?>%<i class="zmdi zmdi-long-arrow-up"></i></span></p>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?php echo $total_dejeuner; ?><span class="float-right"><i class="fa fa-usd"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
                </div>
                <p class="mb-0 text-white small-font">Total Dejeuner <span class="float-right"><?php echo $total_dejeuner_pour; ?>% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?php echo $total_gouter; ?> <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
                </div>
                <p class="mb-0 text-white small-font">Total Collation <span class="float-right"><?php echo $total_gouter_pour; ?>% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0"><?php echo $total_diner; ?> <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
                </div>
                <p class="mb-0 text-white small-font">Total Diner <span class="float-right"><?php echo $total_diner_pour; ?>%<i class="zmdi zmdi-long-arrow-up"></i></span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>  

      <div class="row">
        <div class="col-12 col-lg-8 col-xl-8">
          <div class="card">
            <div class="card-header">Traffic sur le Site
              <div class="card-action">
                <div class="dropdown">
                  <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                    <i class="icon-options"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void();">Action</a>
                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
                <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
              </ul>
              <div class="chart-container-1">
                <canvas id="chart1"></canvas>
              </div>

           </div>
           
           <div class="row m-0 row-group text-center border-top border-light-3">
             <div class="col-12 col-lg-4">
               <div class="p-3">
                 <h5 class="mb-0"><?php echo $abonnement_total;?></h5>
                 <small class="mb-0">Total Abonnement </small>
               </div>
             </div>
             <div class="col-12 col-lg-4">
               <div class="p-3">
                 <h5 class="mb-0"><?php echo $users_total;?></h5>
                 <small class="mb-0">Total utilisateurs</small>
               </div>
             </div>
             <div class="col-12 col-lg-4">
               <div class="p-3">
                 <h5 class="mb-0"><?php echo $abo_users;?></h5>
                 <small class="mb-0">Moyenne d'abonnement par utilisateur <span> </small>
               </div>
             </div>
           </div>
           
          </div>
       </div>
  
       <div class="col-12 col-lg-4 col-xl-4">
          <div class="card">
             <div class="card-header">Abonnement par regime
               <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void();">Action</a>
                <a class="dropdown-item" href="javascript:void();">Another action</a>
                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
               </div>
             </div>
             <div class="card-body">
               <div class="chart-container-2">
                 <canvas id="chart2"></canvas>
                </div>
             </div>
             <div class="table-responsive">
               <table class="table align-items-center">
                 <tbody>
                  <?php for($i =0 ;$i < count($regimes);$i++){ ?>
                   <tr>
                     <td><i class="fa fa-circle text-white mr-2"></i> <?php echo $regimes[$i];?></td>
                     <td><?php echo $poids[$i];?>kg</td>
                     <td><?php echo $montant[$i];?>Ar</td>
                   </tr>
                  <?php } ?>
                 </tbody>
               </table>
             </div>
           </div>
       </div>
      </div><!--End Row-->
      
      <div class="row">
       <div class="col-12 col-lg-12">
         <div class="card">
           <div class="card-header">Classement Appreciation Regime & efficacite hebdomadaire
            <div class="card-action">
               <div class="dropdown">
               <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                <i class="icon-options"></i>
               </a>
                <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void();">Action</a>
                <a class="dropdown-item" href="javascript:void();">Another action</a>
                <a class="dropdown-item" href="javascript:void();">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void();">Separated link</a>
                 </div>
                </div>
               </div>
           </div>
             <div class="table-responsive">
                   <table class="table align-items-center table-flush table-borderless">
                    <thead>
                     <tr>
                       <th>Nom</th>
                       <th>Poids</th>
                       <th>Image</th>
                       <th>Objectif</th>
                       <th>Efficacite</th>
                     </tr>
                     </thead>
                     <tbody>
                      <?php
                      for($i = 0 ; $i  < count($abo_regime) ; $i++){ ?>
                      <tr>
                      <td><?php echo $abo_regime[$i]['nom'];?></td>
                      <td><?php echo $poids[$i];?></td>
                      <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                      <td><?php echo $abo_regime[$i]['objectif']  ;?></td>
                      <td><div class="progress shadow" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width:<?php echo $poids[$i];?>"></div>
                          </div></td>
                     </tr>
  <?php } ?>
                    
  
                   </tbody></table>
                 </div>
         </div>
       </div>
      </div><!--End Row-->
  
        <!--End Dashboard Content-->
        
      <!--start overlay-->
            <div class="overlay toggle-menu"></div>

      <!-- End container-fluid-->
      
      </div><!--End content-wrapper-->

            </div>
      </div><!--End Row-->

      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->

  </div><!--End content-wrapper-->


</div><!--End wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<!-- sidebar-menu js -->
<script src="<?php echo base_url('assets/js/sidebar-menu.js'); ?>"></script>
<!-- loader scripts -->
<script src="<?php echo base_url('assets/js/jquery.loading-indicator.js'); ?>"></script>
<!-- Chart js -->

<script src="<?php echo base_url('assets/plugins/Chart.js/Chart.min.js'); ?>"></script>

<!-- Index js -->
<script src="<?php echo base_url('assets/js/index.js'); ?>"></script>
<!-- <script type="module" src="<?php echo base_url('assets/js/jspdf.js'); ?>"></script>
<script type="module" src="<?php echo base_url('assets/js/pdf.js'); ?>"></script> -->
<script>
  <?php
  $user = array();
  ?>
  chart(<?php echo json_encode($users); ?>, <?php echo json_encode($abonnement); ?>, <?php echo json_encode($regimes); ?>);
</script>
