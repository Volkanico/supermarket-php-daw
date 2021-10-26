<?php

include 'config-db.php';

$carreto = array(
    array("id"=>"1112", "nom"=>"uva", "descripcio"=>"es lila", "preu"=>"17"),
    array("id"=>"2223", "nom"=>"mandarina", "descripcio"=>"es naranja" ,"preu"=>"17"),
    array("id"=>"3334", "nom"=>"caqui", "descripcio"=>"es rojizo" ,"preu"=>"17"),
    array("id"=>"4445", "nom"=>"platan", "descripcio"=>"es amarillo" ,"preu"=>"17"),
    array("id"=>"5556", "nom"=>"kiwi", "descripcio"=>"es aspero" ,"preu"=>"17")
  );


    $sql="SELECT * from productes";
    $result=mysqli_query($conn,$sql);
    while($carreto=mysqli_fetch_array($result)){
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carreto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  body > div{
    float:left;
    margin: 10px;
  }
  img{
    width:60px;
    height:200px;
  }
</style> 
<body>
<div class="card" style="width: 18rem;">

    <div class="card-body">
        <img class="card-img" src="fruta/imagen<?php echo $carreto['id'] ?>.jpg" alt="Card image cap">
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nom: <?php echo $carreto['nom'] ?></li>
      <li class="list-group-item">Descripció: <?php echo $carreto['descripcio'] ?></li>
      <li class="list-group-item">Preu: <?php echo $carreto['preu'] ?></li>
    </ul>
  </div>    

</body>
</html>
<?php } ?>