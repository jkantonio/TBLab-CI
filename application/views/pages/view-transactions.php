<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CS128.1</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>

<body style="margin-right: 50px;margin-left: 100px;margin-top: 200px;">
<nav class="navbar navbar-dark navbar-expand fixed-top bg-primary text-center" style="align-items: center;">
    <div class="container"><a class="navbar-brand" href="#">TB LAB</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse text-center"
            id="navcol-1">
            <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url('menu');?>">Menu</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><?php echo $priv;?></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Employee ID: <?php echo $userID;?></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('main/logout');?>">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="table-responsive" style="margin-right: 0;padding: 33px;padding-right: 30px;padding-left: 30px;padding-bottom: 0;padding-top: 0;">
    <table class="table">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Employee ID</th>
                <th>Action</th>
                <th>Date and Time of Transaction</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $tran){ ?>
            <tr>
                <td><?php echo $tran->TransactionLogID ?></td>
                <td><?php echo $tran->EmployeeID ?></td>
                <td><?php echo $tran->TransactionName ?></td>
                <td><?php echo $tran->DateTimeOfTransaction ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>