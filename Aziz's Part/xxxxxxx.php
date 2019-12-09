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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/xx.css">
    <link rel="icon" href="img/3.png" />

    <title>Customer</title>

</head>
<body>
<?php include 'nav.php';?>
<div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">Bienvenue dans espace client</h4>
                    <p class="card-text">Mr/Mme <?= $_SESSION['username']?> </p>
                </div>
            </div>
        </div>
    </div>
    <div style="
    padding: 11px;
    margin: 66px;
    margin-left: -33px;
">
    <br>
    <button type="button" class="btn btn-light">Voir Menu</button>
    <button type="button" class="btn btn-light">Passer Commande</button>
    <button type="button" class="btn btn-light">Réctifier Commande</button>
    <button type="button" class="btn btn-light">Annuler Commande</button>
</div>

</body>

<?php include 'footer.php';?>
</html>