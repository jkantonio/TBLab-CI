<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CS128.1</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-0">
                    <form method="POST">
                        <h1 style="font-size: 42px;">Patient ID:
                            <input class="form-control-sm" name="patientId" id="patientId" type="text" style="margin: 10px;height: 35px;width: 182px;padding: 14px;"></input>
                            <input class="btn btn-primary btn-sm" type="submit" name="searchPatientId" value="Search" style="margin: 10px;padding: 7px;width: 72px;" id="searchBtn"></input></h1>
                    </form>
                </div>
            </div>
             <?php foreach($posts as $post){?>
            <div class="row">
                <div class="col-md-2">
                    <p style="width: 50px;padding: 0px;">Name:</p>
                </div>
                <div class="col"><?php echo $post->PatientFirstName.' '. $post->PatientMiddleName.' '.$post->PatientLastName;?><label id="n" type="text"></div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p>Birthday:</p>
                </div>
                <div class="col-md-4"><?php echo $post->PatientBirthday;?><label id="bd" type="date"></div>
                <div class="col-md-1">
                    <p>Sex</p>
                </div>
                <div class="col"><?php echo $post->PatientSex;?><label id="s" type="text"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Collection Type:</p>
                </div>
                <div class="col"><?php echo $post->CollectionType;?><label id="ct" type="text"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Number of Days Collection:</p>
                </div>
                <div class="col"><?php echo $post->NumberOfDaysCollection;?><label id="nodc" type="number"></div>
            </div>
            <?php }?>
            <div class="row">
                <div class="col-md-3">
                    <p style="width: 90px;">Start Date:</p>
                </div>
                <!--
                    Fix EmployeeID with SESSION VARIABLE!!!!
                -->
                <div class="col">
                    <input name="sputumDate" type="date">
                    <input name="employeeId" type="text" value="21">
                </div>
            </div>
            <form class="user" action="<?php echo base_url(); ?>SputumCollection/add" method="post">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" type="submit" style="margin: 12px;">ADD</button>
                        <button class="btn btn-primary" type="button" style="margin: 12px;">EDIT</button>
                        <button class="btn btn-primary" id="clearBtn" type="button" style="margin: 12px;">CLEAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type='text/javascript'>
        $(document).ready(function(){
            //alert(n);
            $('#clearBtn').click(function(){
                $('#n').reset();
                $('#bd').reset();
                $('#s').reset();
                $('#ct').reset();
                $('#nodc').reset();
                //alert(n);
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/tblab.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
-->

</body>

</html>