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
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Drug Susceptibility Test</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Specimen Code:&nbsp;<input type="text" style="width: 335px;height: 32px;"><button class="btn btn-primary" type="button" style="margin-left: 14px;height: 34px;margin-top: -6px;">Search</button></h1>
                </div>
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
            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>STREPTOMYCIN</p>
                </div>
                <div class="col-lg-3">
                    <p>1.0 mcg/mL</p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <input class="btn btn-primary" type="radio">SENSITIVE</button></div>
                <div class="col-lg-2">
                    <input class="btn btn-primary" type="radio">RESISTANT</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>ISONIAZID</p>
                </div>
                <div class="col-lg-3">
                    <p>0.1&nbsp;mcg/mL<br><br></p>
                </div>
                    <div class="col-lg-2 offset-lg-1">
                        <input class="btn btn-primary" type="radio">SENSITIVE</button></div>
                    <div class="col-lg-2">
                        <input class="btn btn-primary" type="radio">RESISTANT</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>RIFAMPICIN</p>
                </div>
                <div class="col-lg-3">
                    <p>1.0 mcg/mL<br><br></p>
                </div>
                    <div class="col-lg-2 offset-lg-1">
                        <input class="btn btn-primary" type="radio">SENSITIVE</button></div>
                    <div class="col-lg-2">
                        <input class="btn btn-primary" type="radio">RESISTANT</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>ETHAMBUTOL</p>
                </div>
                <div class="col-lg-3">
                    <p>5.0 mcg/mL</p>
                </div>
                    <div class="col-lg-2 offset-lg-1">
                        <input class="btn btn-primary" type="radio">SENSITIVE</button></div>
                    <div class="col-lg-2">
                        <input class="btn btn-primary" type="radio">RESISTANT</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col-md-12 col-lg-3">
                    <p>P2A</p>
                </div>
                <div class="col-lg-3">
                    <p>100 mcg/mL</p>
                </div>
                    <div class="col-lg-2 offset-lg-1">
                        <input class="btn btn-primary" type="radio">SENSITIVE</button></div>
                    <div class="col-lg-2">
                        <input class="btn btn-primary" type="radio">RESISTANT</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col"><button class="btn btn-primary" type="button" style="margin-left: 320px;">ADD</button><button class="btn btn-primary" type="button" style="margin-left: 5px;">CANCEL</button><button class="btn btn-primary" type="button" style="margin-left: 5px;">CLEAR</button></div>
            </div>
            <div class="row" style="height: 42px;">
                <div class="col-lg-5 offset-lg-0">
                    <p class="text-right">MEDICAL TECHNOLOGIST:&nbsp;</p>
                </div>
                <div class="col"><input type="text" style="margin-top: 0px;height: 24px;width: 345px;"></div>
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