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
                <div class="col-md-6">
                    <h1>Specimen Code:&nbsp;</h1>
                </div>
                <form method="POST">
                    <div class="col">
                        <input type="text" name="specimenCode" style="margin-top: 12px;"></input>
                        <input class="btn btn-primary btn-sm" name="searchSpecimenCode" type="submit" value="Search" style="margin-left: 16px;"></input>
                    </div>
                </form>
            </div>  

            <div class="row">
                <div class="col-md-12 col-lg-2 offset-lg-4">
                    <?php echo $patientFN.' '. $patientMN.' '.$patientLN;?>
                    <label></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <input class="btn btn-primary" type="radio" name="smear" value="0" style="margin: 5px;">0</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="1" style="margin: 5px;">+1</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="2" style="margin: 5px;">+2</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="3" style="margin: 5px;">+3</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="4" style="margin: 5px;">+4</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="5" style="margin: 5px;">+5</input>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 offset-md-4" style="margin-right: 0px;margin-left: 269px;">
                    <input class="btn btn-primary" type="radio" name="smear" value="6" style="margin: 5px;">+6</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="7" style="margin: 5px;">+7</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="8" style="margin: 5px;">+8</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="9" style="margin: 5px;">+9</input>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 offset-md-5" style="margin-left: 268px;">
                    <input class="btn btn-primary" type="radio" name="smear" value="1+" style="margin: 5px;">1+</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="2+" style="margin: 5px;">2+</input>
                    <input class="btn btn-primary" type="radio" name="smear" value="3+" style="margin: 5px;">3+</input>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-right">Smear Result Date:&nbsp;</p>
                </div>

                <div class="col">
                    <input type="date" style="margin-top: 0px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-primary text-center" type="button" style="margin-left: 269px;">Save</button>
                </div>

                <div class="col">
                    <button class="btn btn-primary" type="button">Cancel</button>
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