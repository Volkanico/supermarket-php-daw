<?php 

    
    $id = $_POST['id'];
    $name = $_POST['nom'];
    $descripcio = $_POST['descripcio'];
    $preu = $_POST['preu'];

    $conn = mysqli_connect("volkan", "adminVolkan", "volkan", "prova1");
    
    $sql = "INSERT INTO productes (id, nom, descripcio, preu) VALUES ('$id', '$name', '$descripcio', '$preu')";


    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

    

?>