<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>TBLAB</title>
        <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" media="screen"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    </head>

<body  style="margin-right: 120px;margin-left: 120px;margin-top: 92px;">
    <nav class="navbar navbar-dark navbar-expand fixed-top bg-primary text-center" style="align-items: center;">
        <div class="container"><a class="navbar-brand" href="#">TB LAB</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center"
                id="navcol-1">
                <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url('menu');?>">Menu</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Employee ID: <?php echo $userID;?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('main/logout');?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin: 0;margin-top: 70px;">
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Schedule a Sputum Collection</h4><a href="<?php echo base_url();?>spmc"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Specimen Code Assignment</h4><a href="<?php echo base_url();?>sca"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>sca">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pulmonary Evaluation</h4><a href="<?php echo base_url();?>pulmoeval"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pulmonary Evaluation</h4><a href="<?php echo base_url();?>pulmoeval"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Entering Smear</h4><a href="<?php echo base_url();?>es"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Start Incubation</h4><a href="<?php echo base_url();?>si"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>sca">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Encode LJ Result</h4><a href="<?php echo base_url();?>eljr"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
        </div>
        <div class="card-group">
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Encode MGIT Result</h4><a href="<?php echo base_url();?>emgitr"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Drug Susceptibility Test</h4><a href="<?php echo base_url();?>dst"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>spmc">   Go   </button></a></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Final Culture Result</h4><a href="<?php echo base_url();?>fcr"><button class="btn btn-primary" type="button" href="<?php echo base_url();?>sca">   Go   </button></a></div>
            </div>
        </div>
    </div>
