<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CS128.1</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
                <div class="col-md-12">
                    <h1 class="text-center">ENCODE LJ RESULT</h1>
                </div>
            </div>
            <div class="row">
                <form method="post">
                <div class="col-md-12">
                    <h1>Specimen Code:&nbsp;</h1>
                        <input type="text" style="width: 220px;height: 32px;" name="specimenCode" required>
                        <input class="btn btn-primary btn-sm" type="submit" value="Search" style="margin-top: -6px;margin-left: 8px;"></input>
                    
                    <h3>Specimen Code: <?php echo $specimenCode; ?></h3>
                    <h3>Patient ID: <?php echo $patientID; ?></h3>
                </div>
                </form>
            </div>
<form method ="post" action="<?php echo base_url(); ?>EncodeLJResult/add">
            <div class="row">
                <div class="col-md-2 offset-md-3">
                    <input class="btn btn-primary" type="radio" name="LJresult" value="negative" required>Negative</input>
                </div>
                <div class="col-md-2 offset-md-1">
                    <input class="btn btn-primary" type="radio" name="LJresult" value="contaminated" required>Contaminated</input>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 offset-md-3">
                    <input class="btn btn-primary" type="radio" name="LJresult" value="ntm" required>NTM</input>
                </div>
                <div class="col-md-2 offset-md-1">
                    <input class="btn btn-primary" type="radio" name="LJresult" value="positive" required>POSITIVE</input>
                </div>
            </div>
            <input type="hidden" value="<?php echo $specimenCode; ?>" name="specCode">

            <div class="row">
                <div class="col-md-3 offset-md-3">
                    <p>Date Reported:&nbsp;</p>
                </div>
                <div class="col">
                    <input type="date" name="dateReported" required></input>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="btn-group" role="group" style="margin-left: 330px;padding: 0px;">
                        <input class="btn btn-primary" type="submit" value="SAVE">
                        <button class="btn btn-primary" type="button">CANCEL</button>
                        <button class="btn btn-primary" type="button">CLEAR</button></div>
                </div>
            </div>
</form>

        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>