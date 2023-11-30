<div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                            <?php $user = $this->session->userdata('user');
				            extract([$user]);
			            ?>
                                <h3 class="page-title">Bienvenue <?php echo $fname; ?>!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


       <div class="row">
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Enfants Cibles</h6>
                        <h3>50055</h3>
                    </div>
                    <div class="db-icon">
                        <img src="<?php echo base_url()?>assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Apprenants</h6>
                        <h3>+90</h3>
                    </div>
                    <div class="db-icon">
                        <img src="<?php echo base_url()?>assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Classes Passerelles</h6>
                        <h3>10</h3>
                    </div>
                    <div class="db-icon">
                        <img src="<?php echo base_url()?>assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Facilitateurs</h6>
                        <h3>10</h3>
                    </div>
                    <div class="db-icon">
                        <img src="<?php echo base_url()?>assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>