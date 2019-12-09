<?php
    session_start();
    if (isset($_SESSION['username']) == ""){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css" />

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Username : <?= $_SESSION['username']?></h4>
                    <p class="card-text">Email : <?= $_SESSION['email']?></p>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>