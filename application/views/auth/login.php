<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>CL Passerelle</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <link
        href="<?php echo base_url(); ?>https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Abou_.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1 class="text-center">CLASSES PASSERELLE</h1>
                            <br><br>
                            
                            <!-- Formulaire pour l'e-mail -->
                            <form action="<?= base_url('auth/login') ?>" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Utilisateur <span class="login-danger">*</span></label>
                                        <input class="form-control" placeholder="Email" type="email" name="email"
                                            required>
                                        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                            </div>
                            <div class="forgotpass">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> se souvenir de
                                            moi
                                            <input type="checkbox" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- <a href="<?php echo base_url(); ?>#">Mot de passe oublié?</a> -->
                                </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block"><span
                                    class="glyphicon glyphicon-log-in"></span> Suivant</button>
                            </form>
                            
                        </div>
                    </div>
                    <?php
				if($this->session->flashdata('error')){
					?>
                    <div class="alert alert-danger text-center" style="margin-top:20px;">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php
				}
			?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/feather.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>

</html>