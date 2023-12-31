<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/nav_test.png">

        <title>AUTHENTIFICATION Gestion Ticket</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
                
    </head>
    <body>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img">
                    <img class="bg-overlay" src="assets/images/charger.jpg"/>
                    <h3 class="text-center m-t-5 text-primary">Gestion</h3>
                </div> 


                <div class="panel-body">
					<!--<form class="form-horizontal m-t-20" action="index.html">-->
					<form id="sign_in" method="POST" class="form-horizontal m-t-20" action="<?php echo base_url(); ?>auth">   
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="text" required="" placeholder="Entrer votre IEN" name="ien" >
                        </div>
                    </div>
                        <?php if (ENVIRONMENT == 'production') : ?>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control input-lg" type="password" required placeholder="Entrer mot de passe" name="passe" >
                            </div>
                        </div>
                        <?php endif; ?>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" style="background-image: url('assets/images/charger.jpg')" type="submit"> Se connecter </button>
                        </div>
                    </div>
                </form> 
                </div>                                 
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>
