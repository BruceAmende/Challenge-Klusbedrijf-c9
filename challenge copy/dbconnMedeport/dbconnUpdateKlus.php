<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
    

$database_lokatie     = 'localhost';
$database_naam        = 'dehandigemannen';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);



$sql = "UPDATE klussen SET naam= :naam,type=:type,duur=:duur,omschrijving=:omschrijving,grootte=:grootte,locatie=:locatie,datum=:datum,email=:email where id=:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(':naam', $_GET['naam']);
$statement->bindParam(':type', $_GET['type']);
$statement->bindParam(':duur', $_GET['duur']);
$statement->bindParam(':omschrijving', $_GET['omschrijving']);
$statement->bindParam(':grootte', $_GET['grootte']);
$statement->bindParam(':locatie', $_GET['locatie']);
$statement->bindParam(':datum', $_GET['datum']);
$statement->bindParam(':email', $_GET['email']);
$statement->bindParam(':id', $_GET['id']);

$statement->execute();
// $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Klusgegevens aangepast</h1>
<a href="..\indexM.php" class="btn btn-light">Terug</a>