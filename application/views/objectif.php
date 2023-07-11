<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link rel="icon" href="<?php echo base_url('assets/images/logo.jpg'); ?>" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="<?php echo base_url('assets/css/app-style.css'); ?>" rel="stylesheet" />
</head>

<body>
    <?php
    if (isset($error)) {
        $message =  $error;
    ?>
        <div class="alert alert-error">
            <div class="icon__wrapper">
                <i class="zmdi zmdi-alert-circle"></i>
            </div>
            <p><?php echo $message; ?><a href="<?php echo base_url('Code') ?>">.Acheter un code </a></p>
            <span class="mdi mdi-open-in-new open"></span>
            <span class="mdi mdi-close close"></span>
        </div>
        <style>
            *,
            *::before,
            *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            :root {
                --primary: #0676ed;
                --background: #222b45;
                --warning: #f2a600;
                --success: #12c99b;
                --error: #e41749;
                --dark: #151a30;
            }

            body {
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 20px;
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
    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
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


    </div><!--wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <!-- sidebar-menu js -->
    <script src="<?php echo base_url('assets/js/sidebar-menu.js'); ?>"></script>
    <script>
        var url = "<?php echo base_url('Objectif/checkRegime'); ?>";
    </script>
    <script src="<?php echo base_url('assets/js/objectif.js'); ?>"></script>

    <!-- Custom scripts -->
    <script src="<?php echo base_url('assets/js/app-script.js'); ?>"></script>

</body>

</html>