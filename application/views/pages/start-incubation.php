<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CS128.1</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand fixed-top bg-primary text-center" style="align-items: center;">
        <div class="container"><a class="navbar-brand" href="#">TB LAB</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center"
                id="navcol-1">
                <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url('menu');?>">Menu</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><?php echo $priv; ?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Employee ID: <?php echo $userID;?></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('main/logout');?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin: 0;margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 offset-lg-1" style="margin-top: 18px; margin-left: 25%">
                    <h2>Enter Specimen Code: </h2>
                    <p>Specimen Code: <?php echo $specimenCode; ?></p>
                    <p>Patient ID: <?php echo $patientID; ?></p>
                </div>
                <form method="post">
                    <div class="col-md-6 offset-md-3">
                        <input type="text" name="specimenCode" id="specimenCode" style="margin-top: 24px; margin-left: -175px" required></input>
                        <input class="btn btn-primary btn-sm" type="submit" name="searchSpecimenCode" value="Search" id="searchBtn" style="margin-left: 45px; margin-top: -55px"></input>
                    </div>
                </form>
            </div>
            
            <!--
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h5 class="text-left">Start Incubation</h5>
                </div>
            </div>
            -->

            <form method="post" action="<?php echo base_url(); ?>StartIncubation/start" name="add">
            <div class="row">
                <div class="col-lg-2 offset-lg-3">
                    <p>Incubation Date: </p>
                </div>
                <div class="col-lg-2 offset-lg-0" style="margin-left: -40px; margin-top: -5px">
                    <input type="date" name="dateProcessed" required>
                </div>
            </div>
            <div class="row" style="margin-left: 200px">
                <div class="col-lg-2 offset-lg-0">
                    <div class="form-check text-right">
                        <input class="form-check-input" type="radio" name="incubationType" value="MGIT" id="formCheck-1" required>
                            <label class="form-check-label" for="formCheck-1">MGIT</label>
                        </input>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-0">
                    <div class="form-check text-center">
                        <input class="form-check-input" type="radio" name="incubationType" value="LJ" id="formCheck-1" required>
                            <label class="form-check-label" for="formCheck-1">LJ</label>
                        </input>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-0">
                    <div class="form-check text-left">
                        <input class="form-check-input" type="radio" name="incubationType" value="Both" id="formCheck-3" required>
                            <label class="form-check-label" for="formCheck-3">Both</label>
                        </input>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px; margin-left: -185px">
                <div class="col-md-6 col-lg-4 offset-lg-2">
                    <input type="hidden" value="<?php echo $specimenCode; ?>" name="specCode">
                    <input class="btn btn-primary text-center" type="submit" style="margin-left: 235px;margin-right: 0;" value="Start">
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary" type="button" style="margin-left: -120px;">Cancel</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>