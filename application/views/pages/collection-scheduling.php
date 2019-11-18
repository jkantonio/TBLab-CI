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
                <div class="col-md-6 text-center">
                    <header></header>
                    <header></header>
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
                    <div class="btn-group" role="group"></div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-12 offset-md-0"><input type="date" style="padding: 2px;"><button class="btn btn-primary" type="button" style="padding: 4px 20px;margin: 5px;">Search</button></div>
                                <div class="col">
                                    <h1>First Name</h1>
                                </div>
                            </div><input type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h1>Last Name</h1>
                                </div>
                            </div><input type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h1>Embassy Code</h1>
                                </div>
                                <div class="col-md-12 offset-md-0"><select><option value="undefined" selected="">Embassy Code</option><option value="AU">Australia</option><option value="CA">Canada</option><option value="NZ">New Zealand</option><option value="US">United States</option></select></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 offset-md-6"><button class="btn btn-primary" type="button">Add</button><button class="btn btn-primary" type="button">Remove</button></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>