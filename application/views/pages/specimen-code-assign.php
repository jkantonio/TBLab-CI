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
$CollectionType = "Initial";
$SputumRequestID = 00000;
$NumberOfDaysCollection = 1;

foreach($posts as $post){
    $Embassy = $post->Embassy;
    $CollectionType = $post->CollectionType;
    $SputumRequestID = $post->SputumRequestID;
    $NumberOfDaysCollection = $post->NumberOfDaysCollection;
}

$ct = '';
$specimenCode = ' ';

if ($CollectionType == 'Initial')
{
  $ct = 'I';
}
else
{
  $ct = 'R';
}

if ($NumberOfDaysCollection == 1)
{
    $collection = 'A';
}
else if ($NumberOfDaysCollection == 2)
{
    $collection = 'B';
}
else
{
    $collection = 'C';
}


$num = $SputumRequestID;
$num_padded = sprintf("%05d", $num);

$specimenCode = $Embassy .$ct . $num_padded .$collection;
?>

<body>
    <div>
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
             <?php foreach($posts as $post){?>
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