<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        <div class="jumbotron mt-4">
                 <h1 class="text-center">Liste de véhicules : </h1>
        </div>
<div class="container">
    <table  class="table table-bordered">
    <tr>
    <th>Véhicule ID</th>
    <th>status </th>
    <th>Vehicule Number </th>
    <th>Operation</th>
    </tr>
    <?php
  include '../ajout.class.php';
  $Vehicle=new Vehicle;
  $liste=$Vehicle->read();
         while($data = $liste->fetch()){
echo '<tr class="bg-danger">';
echo '<td class="">'.$data['vid'].'</td>';
echo '<td class="">'.$data['Status'].'</td>';
echo '<td class="">'.$data['Vehiclenumber'].'</td>';
<a  class="badge badge-primary text-wrap" href="delete.php?pid='.$data['vid'].'">Supprimer</a></td>';
echo'</tr>';
}
?>
</body>
</html>