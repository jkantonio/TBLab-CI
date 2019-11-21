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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
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
                    <h1 class="text-center">Pulmonary Evaluation</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-4">
                    <p>Patient ID:&nbsp;<input type="text" style="height: 26px;margin-left: 8px;"><button class="btn btn-primary btn-sm" type="button" style="height: 36px;margin-left: 8px;">Search</button></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-2 offset-lg-4">
                    <p>Specimen Code:&nbsp;</p>
                </div>
                <div class="col-lg-4">
                    <p>Paragraph</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-2 offset-lg-4">
                    <p>Name:</p>
                </div>
                <div class="col-lg-4">
                    <p>Paragraph</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Pulmonary Evaluation Date</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 offset-lg-4">
                    <p>Date</p>
                </div>
                <div class="col offset-lg-0"><input type="date"></div>
            </div>
            <div class="row">
                <div class="col-lg-1 offset-lg-4">
                    <p>Time:&nbsp;</p>
                </div>
                <div class="col">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Select Time</button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">8:00</a><a class="dropdown-item" role="presentation" href="#">8:30</a><a class="dropdown-item" role="presentation" href="#">9:00</a><a class="dropdown-item" role="presentation"
                                href="#">9:30</a><a class="dropdown-item" role="presentation" href="#">10:00</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><button class="btn btn-primary" type="button" style="margin-left: 328px;">ADD</button><button class="btn btn-primary" type="button" style="margin-left: 8px;">CANCEL</button><button class="btn btn-primary" type="button" style="margin-left: 8px;">PRINT</button></div>
            </div>
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