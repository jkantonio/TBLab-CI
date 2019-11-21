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
    <div>
        <div class="container">
            <form method="POST">
                <div class="row">
                    <div class="col-md-4 col-lg-3 offset-lg-3">
                        <h1>Patient ID:&nbsp;</h1>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="patientId" style="margin-top: 9px;">
                        <input class="btn btn-primary" name="searchPatientId" type="submit" value="Search" style="margin-left: 12px;"></input></div>
                </div>
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
                        <p>Paragraph</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-lg-3 offset-lg-3">
                        <p>Sex:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <p>Paragraph</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p># Of Days:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <p>Paragraph</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-3 offset-lg-3">
                        <p>Collection Type:</p>
                    </div>
                    <div class="col-lg-4 offset-lg-0">
                        <p>Paragraph</p>
                    </div>
                </div>
                <?php }?>
            </form>
            <div class="row">
                <div class="col-md-2 col-lg-3 offset-lg-3">
                    <p>Specimen Code:</p>
                </div>
                <div class="col-lg-4 offset-lg-0"><input type="text"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 offset-lg-5"><button class="btn btn-primary" type="button" style="margin: 0px;margin-top: 0px;margin-left: -20px;">Assign</button><button class="btn btn-primary" type="button" style="margin-top: 0px;margin-left: 36px;">Cancel</button></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>