<head>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>
<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="index.html">
      <img src="assets/images/logo.jpg" class="logo-icon" alt="logo icon" style="width:50px;height:30px;">
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">ACTIVITES</li>
    <li>
      <a href="<?php echo base_url('Dashboard'); ?>">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <li>
      <a href="<?php echo base_url('Regime'); ?>">
        <i class="zmdi zmdi-calendar"></i> <span>Regime</span>
      </a>
    </li>

    <li>
      <a href="<?php echo base_url('Admin_code'); ?>">
        <i class="zmdi zmdi-code"></i> <span>Code</span>
      </a>
    </li>

    <li>
      <a href="<?php echo base_url('Sport'); ?>">
        <i class="zmdi zmdi-directions-run"></i> <span>Sport</span>
      </a>
    </li>

    <li>
      <a href="<?php echo base_url('Aliment'); ?>">
        <i class="zmdi zmdi-local-dining"></i> <span>Plat</span>
      </a>
    </li>

  </ul>

</div>
<!--End sidebar-wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>

<div id="wrapper">
  <div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">