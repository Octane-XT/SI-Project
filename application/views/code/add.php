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
<div class="card">
    <div class="card-body">
        <div class="card-title">Code</div>
        <hr>
        <form method="POST" action="<?php echo base_url('Code/check_code');?>">
            <div class="form-group">
                <label for="input-1">Code</label>
                <div style="width: 300px;">
                    <input type="text" name="code" class="form-control" id="input-1" placeholder="Entrer votre code">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Valider</button>
            </div>
        </form>
    </div>
</div>