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
                    <h1 class="text-center">Drug Susceptibility Test</h1>
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

            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>DRUG</p>
                </div>
                <div class="col-lg-3">
                    <p>DRUG CONCENTRATION</p>
                </div>
                <div class="col">
                    <p class="text-center">RESULT</p>
                </div>
            </div>
            <form method="post" action="<?php echo base_url(); ?>DrugSusceptibilityTest/add">

            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>STREPTOMYCIN</p>
                </div>
                <div class="col-lg-3">
                    <p>1.0 mcg/mL</p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <input class="btn btn-primary" type="radio" name="streptomycinResult" value="sensitive" required>SENSITIVE
                </div>
                <div class="col-lg-2">
                    <input class="btn btn-primary" type="radio" name="streptomycinResult" value="resistant">RESISTANT</button>
                </div>
            </div>

            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>ISONIAZID</p>
                </div>
                <div class="col-lg-3">
                    <p>0.1&nbsp;mcg/mL<br><br></p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <input class="btn btn-primary" type="radio" name="isoniazidResult" value="sensitive"required>SENSITIVE</button>
                </div>
                <div class="col-lg-2">
                    <input class="btn btn-primary" type="radio" name="isoniazidResult" value="resistant">RESISTANT</button>
                </div>
            </div>

            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>RIFAMPICIN</p>
                </div>
                <div class="col-lg-3">
                    <p>1.0 mcg/mL<br><br></p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <input class="btn btn-primary" type="radio" name="rifampicinResult" value="sensitive"required>SENSITIVE</button>
                </div>
                <div class="col-lg-2">
                    <input class="btn btn-primary" type="radio" name="rifampicinResult" value="resistant">RESISTANT</button>
                </div>
            </div>

            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>ETHAMBUTOL</p>
                </div>
                <div class="col-lg-3">
                    <p>5.0 mcg/mL</p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <input class="btn btn-primary" type="radio" name="ethambutolResult" value="sensitive"required>SENSITIVE</button>
                </div>
                <div class="col-lg-2">
                    <input class="btn btn-primary" type="radio" name="ethambutolResult" value="resistant">RESISTANT</button>
                </div>
            </div>

            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>P2A</p>
                </div>
                <div class="col-lg-3">
                    <p>100 mcg/mL</p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <input class="btn btn-primary" type="radio" name="p2aResult" value="sensitive"required>SENSITIVE</button>
                </div>
                <div class="col-lg-2">
                    <input class="btn btn-primary" type="radio" name="p2aResult" value="resistant">RESISTANT</button>
                </div>
            </div>

            <div class="row" style="height: 42px;">
                <div class="col"><input class="btn btn-primary" type="submit" style="margin-left: 320px;" value="ADD"></button><button class="btn btn-primary" type="button" style="margin-left: 5px;">CANCEL</button><button class="btn btn-primary" type="button" style="margin-left: 5px;">CLEAR</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col-lg-5 offset-lg-0">
                    <p class="text-right">MEDICAL TECHNOLOGIST:&nbsp;</p>
                </div>
                <div class="col"><input type="text" style="margin-top: 0px;height: 24px;width: 345px;"required>
                    <input type="date" name="dateReported"required>
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