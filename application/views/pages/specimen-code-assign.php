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

            <!--

            GENERATING SPECIMEN CODE

            NEEDED REQUIREMENTS: 
            USI00001A

            US/AU/NZ/CA
            -> sputumrequestlog.Embassy

            I/R
            -> sputumrequestlog.CollectionType
            
            00001, ...
            -> sputumrequestlog.SputumRequestID
            (search how to prepend 0s)

            A/B/C
            -> sputumrequestlog.NumberOfDaysCollection


            -->

<?php

$Embassy = "XX";
$SputumRequestID = 00000;
$NumberOfDaysCollection = 'D';
$CollectionType = "Initial";
$patient = 0;

foreach($posts as $post){
    $Embassy = $post->Embassy;
    $CollectionType = $post->CollectionType;
    $SputumRequestID = $post->SputumRequestID;
    $NumberOfDaysCollection = $post->NumberOfDaysCollection;
    $patient = $post->PatientID; 
}

$ct = '';
$specimenCode = ' ';
$collectCount = '';

if($collection != ''){
    $collectCount = $collection;
}else{
    $collectCount = "D";
}

if ($CollectionType == 'Initial')
{
  $ct = 'I';
}
else
{
  $ct = 'R';
}

$num = $SputumRequestID;
$num_padded = sprintf("%05d", $num);
$specimenCode = $Embassy .$ct . $num_padded .$collectCount;
?>
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
<body>
    <div style="margin: 0;margin-top: 70px;">
        <div class="container">
            <form method="POST">
                <div class="row">
                    <div class="col-md-4 col-lg-3 offset-lg-3">
                        <h1>Patient ID:</h1>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="patientId" style="margin-top: 9px;"></input>
                        <input class="btn btn-primary" name="searchPatientId" type="submit" value="Search" style="margin-left: 12px;"></input>
                    </div>
                </div>
            </form>
             <?php foreach($posts as $post){
            ?>
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p>Name:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <?php echo $post->PatientFirstName.' '. $post->PatientMiddleName.' '.$post->PatientLastName;?>
                        <label id="n" type="text"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p>Birthday:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <?php echo $post->PatientBirthday;?>
                        <label id="bd" type="text"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-lg-3 offset-lg-3">
                        <p>Sex:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <?php echo $post->PatientSex;?>
                        <label id="sex" type="text"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p># Of Days:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <?php echo $post->NumberOfDaysCollection;?>
                        <label id="numofdays" type="text"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p>Collection Type:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <?php echo $post->CollectionType;?>
                        <label id="ct" type="text"></label>
                    </div>
                </div>
                <?php }?>
            <form action="<?php echo base_url(); ?>SpecimenCodeAssign/add" method="post">
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p>Specimen Code:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <input type="text" name="specimenCode" value="<?php echo $specimenCode;?>"></input>
                        <input type="hidden" name="patientID" value="<?php echo $patient;?>"></input>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-5">
                    <input class="btn btn-primary" type="submit" value="Assign" style="margin: 0px;margin-top: 0px;margin-left: -20px;"></button>
                    <button class="btn btn-primary" type="button" style="margin-top: 0px;margin-left: 36px;">Cancel</button>
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