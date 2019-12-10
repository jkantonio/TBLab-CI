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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
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
                <div class="col-md-12 col-lg-6 offset-lg-4 d-flex flex-grow-0 justify-content-lg-start"><label style="margin-right: 12px;">Patient ID: </label>
                    <form method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" style="width: 310px;" name="patient">
                            <input class="btn btn-primary btn-sm" type="submit" name="searchPatientId" value="Search" id="searchBtn"></div>
                        </div>
                    </form>
            </div>
            <?php $sputumCollectionIDTemp=0;
            foreach($results as $result){?>
            <div class="row">
                <div class="col-md-12 col-lg-2 offset-lg-4">
                    <p>Specimen Code:&nbsp;</p>
                </div>
                <div class="col-lg-4">
                    <p><?php echo $result->SpecimenCode; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-2 offset-lg-4">
                    <p>Name:</p>
                </div>
                <div class="col-lg-4">
                    <p>
                        <?php // Prints Patient Name but also stores it in a variable
                        echo $result->PatientFirstName." " .$result->PatientMiddleName." ".$result->PatientLastName;
                        ?>

                        <?php 
                        $patientNameHidden = $result->PatientFirstName. " " .$result->PatientMiddleName." ".$result->PatientLastName;
                        ?>
                    </p>
                </div>
            </div>
            <?php $sputumCollectionIDTemp = $result->SputumCollectionID;
                } ?>
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Schedule Date of Evaluation</h1>
                </div>
            </div>
            <form method="post" action="<?php echo base_url();?>pulmonaryevaluation/schedEvalDate">
            <div class="row">
                <div class="col-lg-1 offset-lg-4">
                    <p>Date</p>
                </div>
                <div class="col offset-lg-0"><input type="date" id="scheduledDate" name="scheduledDate"></div>
            </div>
            <input type="hidden" name="sputumCollectionID" value="<?php echo $sputumCollectionIDTemp; ?>">
            <div class="row">
                <div class="col-lg-1 offset-lg-4">
                    <p>Time:&nbsp;</p>
                </div>
                <div class="col">
                <select name="scheduledTime">
                <option value="8:00" selected="">8:00</option>
                <option value="8:30">8:30</option>
                <option value="9:00">9:00</option>
                <option value="11:00">11:00</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="15:00">15:00</option>
                </select>
                </div>
            </div>
            <?php // Gets patient id in hidden form to pass to function ?>
            <?php $patientIDHidden = $result->PatientID; ?>
            <input type="hidden"  name="patientFullName" value="<?php echo $patientNameHidden;?>">
            <input type="hidden" name="patientID" value="<?php echo $patientIDHidden;?>">
            <div class="row">
                <div class="col">
                    <input class="btn btn-primary" type="submit" value="ADD" style="margin-left: 328px;">
                </div>
            </div>
            </form>
        </div>
        <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Scheduled for Collection</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    //for($i=0, $count = count($dates);$i<$count;$i++) {
                                    //$date  = $dates[$i];
                                    //$sched = $scheds[$i];
                                ?>

                                <tr>
                                    <td><?php //echo $date; ?></td>
                                    <td><?php //echo $sched; ?></td>
                                </tr>

                                <?php //} ?>
                            </tbody>
                        </table>
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