<?php

include 'config-db.php';

$sql = "SELECT id, nom, descripcio, preu FROM productes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " - Descripcio " . $row["descripcio"]. " - Preu " . $row["preu"].
    '<img src="fruta/imagen1111.jpg" width="50" height="50" />'; "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitxa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    img {
        width: 160px;
        height:60px;
    }
</style>
<body>
<div class="card-body">
            <img class="card-img" src="fruta/imagen1111.jpg" alt="Card image cap">
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: 1111 </li>
        <li class="list-group-item">Nom: naranja </li>
        <li class="list-group-item">Descripció: es naranja </li>
        <li class="list-group-item">Preu: 2€</li>
        </ul>
        </div> 

        <div class="card-body">
            <img class="card-img" src="fruta/imagen2222.jpg" alt="Card image cap">
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: 2222</li>
        <li class="list-group-item">Nom: limon</li>
        <li class="list-group-item">Descripció: es amarillo</li>
        <li class="list-group-item">Preu: 4€</li>
        </ul>
        </div> 

        <div class="card-body">
            <img class="card-img" src="fruta/imagen3333.jpg" alt="Card image cap">
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: 3333</li>
        <li class="list-group-item">Nom: pera</li>
        <li class="list-group-item">Descripció: es verde</li>
        <li class="list-group-item">Preu: 3€</li>
        </ul>
        </div> 

        <div class="card-body">
            <img class="card-img" src="fruta/imagen4444.jpg" alt="Card image cap">
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: 4444</li>
        <li class="list-group-item">Nom: melocoton</li>
        <li class="list-group-item">Descripció: es dulce</li>
        <li class="list-group-item">Preu: 6€</li>
        </ul>
        </div> 

        <div class="card-body">
            <img class="card-img" src="fruta/imagen5555.jpg" alt="Card image cap">
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: 5555</li>
        <li class="list-group-item">Nom: lima</li>
        <li class="list-group-item">Descripció: es verde, lima</li>
        <li class="list-group-item">Preu: 5€</li>
        </ul>
        </div> 
</body>
</html>
