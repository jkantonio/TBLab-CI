<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CS128.1</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" media="screen"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-0 text-center">
                    <form method="post">
                        <h1>Schedule</h1><input class="form-control" type="date" name="ScheduledDate">
                        <h1>First Name</h1><input class="form-control" type="text" name="FirstName">
                        <h1>Last Name</h1><input class="form-control" type="text" name="LastName">
                        <h1>Embassy Code</h1><select name="EmbassyCode" class="form-control"><option value="undefined" selected="">Select Embassy</option><option value="AU">Australia</option><option value="CA">Canada</option><option value="NZ">New Zealand</option><option value="US">United States</option></select>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="add" value="Schedule Patient"/></td>
                        </tr>
                    </form>
                </div>
                <div class="col">
                    <h1>Queue</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Specimen Code</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>US000001</td>
                                    <td>Rizal, Jose</td>
                                    <td>Pending</td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>