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
                            
                            <?php 
                            if($this->session->flashdata('message')){
                                echo '
                                <div class="alert alert-success">'.$this->session->flashdata('message').'</div>
                                '
                            }
                            
                            ?>
                            <!-- Formulaire pour l'e-mail -->
                            <form action="<?= base_url();?>register/validation" method="post">
                                <fieldset>
                                   <div class="form-group">
                                        <label>Prenom <span class="login-danger">*</span></label>
                                        <input class="form-control" placeholder="Entrer un prenom" type="text" name="user_fname" value="<?= set_value('user_fname');?>"
                                            />
                                        <span class="text-danger"><?= form_error('user_fname');?></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nom <span class="login-danger">*</span></label>
                                        <input class="form-control" placeholder="Entrer un nom" type="text" name="user_lname" value="<?= set_value('user_lname');?>"
                                            />
                                        <span class="text-danger"><?= form_error('user_lname');?></span>
                                    </div>
                            
                                    <div class="form-group">
                                        <label>Adresse email  <span class="login-danger">*</span></label>
                                        <input class="form-control" placeholder="Email" type="email" name="user_email"
                                        value="<?= set_value('user_email');?>"/>
                                            <span class="text-danger"><?= form_error('user_email');?></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Mot de passe  <span class="login-danger">*</span></label>
                                        <input class="form-control" placeholder="mot de passe" type="password" name="user_password"
                                        value="<?= set_value('user_password');?>"/>
                                            <span class="text-danger"><?= form_error('user_password');?></span>
                                    </div>


                                    <button type="submit" name="Register" class="btn btn-lg btn-primary btn-block"><span
                                            class="glyphicon glyphicon-log-in"></span> Enregistrer</button>
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