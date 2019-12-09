<!DOCTYPE html>
<html>
<head>
    <title></title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/temp2.css" />   
        <link rel="stylesheet" href="../../css/ajout.css" /> 
    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><h2>FoodLove</h2></a>
                <ul class="nav navbar-nav"> 
               <li class="active"><a href="../ajout.php">Ajout Produit</a></li>
                <li><a href="Vehicule.php">Vheicule</a></li>  
              <li class="navbar-right "><a href="food-admin.php">Mon Produit</a></li></ul>
            </div>     
        </div>
</head>
    
<body>
             <?php 
              if(!empty($_POST)){
          include 'vh.class.php';
$Vehicle = new Vehicle;
$Vehicle ->ajout($_POST['Status'],$_POST['Vehiclenumber']);
    header ('location:../food-admin.php');
}
    ?>
    <div class="container">
    
 <div class="ajout">
        
<h1>Ajout Vehicle:</h1>   
<div class="text-center">
  <img src="../../css/bg2.jpg" class="img-fluid  alt="...">
</div>
            <form action="" method="POST" enctype="multipart/form-data">
                     <table width="550">
  <div class="form-group">
      <tr><td>
          <label for="nom">Status</label></td>
          <td>
            <input type="text" class="form-control" name="Status" id="Status" placeholder="Status" required size="75"></td></tr>
  </div><br>
  <div class="form-group">
      <tr><td> <label for="description">Vehicle Number</label></td>
          <td>  
          <input type="text" class="form-control" name="Vehiclenumber" id="Vehiclenumber" placeholder="" required size="75"></td></tr></td></tr>
  </div>  <br>  
         <div class="col-md-3">
             <tr>
                <td> 
              
 <button type="submit" value="envoi" class="btn btn-primary">Enregistrer</button>
    </td>
   <td> <button type="reset" class="btn btn-secondary">Annuler</button>
</td></tr>
         </div>
         
       </table> 
            </form>
        </div></div>
</body>

</html>