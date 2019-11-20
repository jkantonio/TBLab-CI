<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CS128.1</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" media="screen"/>
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
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span>Library</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span>Data</span></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Patient ID</h4>
                </div>
                <div class="col-md-6"><input type="text"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Name</h4>
                </div>
                <div class="col-md-6">
                    <p>Rizal, Jose</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Embassy</h4>
                </div>
                <div class="col-md-6">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Select</button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Australia (AU)</a><a class="dropdown-item" role="presentation" href="#">Canada (CA)</a><a class="dropdown-item" role="presentation" href="#">New Zealand (NZ)</a><a class="dropdown-item"
                                role="presentation" href="#">United States (US)</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4></h4>
                </div>
                <div class="col-md-6">
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Select</button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Initial</a><a class="dropdown-item" role="presentation" href="#">Repeat</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Collection Day</h4>
                </div>
                <div class="col-md-6"><input type="date"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-0"><button class="btn btn-primary" type="button">Search</button><button class="btn btn-primary" type="button">Generate</button><button class="btn btn-primary" type="button">Assign</button></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="assets/js/base.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>