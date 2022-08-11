<!doctype html>
<html lang="en">

<head>
    <title>User Registration and Login in Codeigniter 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <?php $session = \Config\Services::session(); ?>
    <?php if($session->get('user_admin')==TRUE){
    $yourstatus= "You are Admin"; }
    else{ $yourstatus= "You are not Admin"; } ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><?php echo $yourstatus ?></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Welcome <?php echo $session->get('user_name') ?></a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
                <h4 class="text-center"> Dashboard </h4>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>