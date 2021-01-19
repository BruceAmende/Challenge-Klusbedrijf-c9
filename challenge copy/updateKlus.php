<?php
    
    include('include/header.php');
    require 'db.conn/db.conn.php';




$sql = "SELECT * FROM klussen WHERE id =:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


?>


<html>
<body>

<h2>Update klus van: <?php echo  $database_gegevens['naam']?></h2>

<form action="dbconnMedeport/dbconnUpdateKlus.php" method="get">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input  type="text"placeholder='Naam' name="naam" value="<?php echo $database_gegevens['naam']?>"><br>
        <br>
        <input type="text"placeholder='Email' name="type"value="<?php echo $database_gegevens['type']?>"><br>
        <br>
        <input type="text"placeholder='Wachtwoord' name="duur"value="<?php echo $database_gegevens['duur']?>"><br>
        <br>
        <input type="text"placeholder='Geboortedatum' name="omschrijving"value="<?php echo $database_gegevens['omschrijving']?>"><br>
        <br>
        <input type="text"placeholder='Team' name="grootte"value="<?php echo $database_gegevens['grootte']?>"><br>
        <br>
        <input type="text"placeholder='Contributie' name="locatie"value="<?php echo $database_gegevens['locatie']?>"><br>
        <br>
        <input type="text"placeholder='Contributie' name="datum"value="<?php echo $database_gegevens['datum']?>"><br>
        <br>
        <input type="text"placeholder='Contributie' name="email"value="<?php echo $database_gegevens['email']?>"><br>
        <br>
        <input type="submit" value='Update'>
</form>

</body>
</html>