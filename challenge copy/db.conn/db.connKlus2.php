<?php
$database_lokatie     = 'localhost';
$database_naam        = 'dehandigemannen';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM klussen";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevensKlus = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
