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
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Patient</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>The content of your modal.</p><input type="text"></div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row"></div>
            <div style="padding: 14px;">
                <a href="#">
                    <h4>1. Home</h4>
                </a>
                <a href="#">
                    <h4>2. Library</h4>
                </a>
                <a href="#">
                    <h4>3. Data</h4>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-0">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle text-left" data-toggle="dropdown" aria-expanded="false" type="button">Specimen Code</button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Specimen Code</a><a class="dropdown-item" role="presentation" href="#">Patient ID</a><a class="dropdown-item" role="presentation" href="#">Last Name</a></div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-0"><input type="text"></div>
            </div>
            <div class="row">
                <div class="col-md-6"><button class="btn btn-primary text-monospace" type="button">Search</button><button class="btn btn-primary" type="button">Clear</button></div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Patient ID</h5>
                </div>
                <div class="col-md-3">
                    <h5>Patient Name</h5>
                </div>
                <div class="col-md-3">
                    <h5>Specimen Code</h5>
                </div>
                <div class="col-md-3">
                    <h5>Date Collected</h5>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>US000001</p>
                </div>
                <div class="col-md-3">
                    <p>Rizal, Jose Protacio</p>
                </div>
                <div class="col-md-3">
                    <p>MUI001A</p>
                </div>
                <div class="col-md-3">
                    <p>10/07/2019</p>
                </div>
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