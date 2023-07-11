<head>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="<?php echo base_url('assets/plugins/simplebar/css/simplebar.css')?>" rel="stylesheet" />
  <!-- Icons CSS-->
  <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url('assets/css/sidebar-menu.css')?>" rel="stylesheet" />
  <!-- Custom Style-->
  <link href=" <?php echo base_url('assets/css/app-style.css')?>" rel="stylesheet" />

</head>
<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="index.html">
      <img src="<?php echo base_url('assets/images/logo.jpg')?>" class="logo-icon" alt="logo icon" style="width:50px;height:30px;">
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
    <li class="sidebar-header">ACTIVITES</li>
    <li>
      <a href="index.html">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>


    <li>
      <a href="tables.html">
        <i class="zmdi zmdi-grid"></i> <span>Regime</span>
      </a>
    </li>

    <li>
      <a href="calendar.html">
        <i class="zmdi zmdi-calendar-check"></i> <span>Code</span>
        <small class="badge float-right badge-light">New</small>
      </a>
    </li>

    <li>
      <a href="profile.html">
        <i class="zmdi zmdi-face"></i> <span>Sport</span>
      </a>
    </li>

    <li>
      <a href="login.html" target="_blank">
        <i class="zmdi zmdi-lock"></i> <span>Plat</span>
      </a>
    </li>

  </ul>

</div>
<!--End sidebar-wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- simplebar js -->
<script src="<?php echo base_url('assets/plugins/simplebar/js/simplebar.js')?>"></script>

<div id="wrapper">
  <div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">