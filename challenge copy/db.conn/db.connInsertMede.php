<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
$database_lokatie     = 'localhost';
$database_naam        = 'dehandigemannen';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "INSERT INTO medewerkers ( `naam`, `email`, `wachtwoord`, `geboortedatum`, `adres`, `postcode`, `stad`, `telefoonnummer`) VALUES ('$_GET[naam]','$_GET[email]','$_GET[wachtwoord]','$_GET[datum]','$_GET[adres]','$_GET[postcode]','$_GET[stad]','$_GET[tel]' )  ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Met succes medewerker geregistreerd</h1>
<a href="..\indexM.php" class="btn btn-light">terug</a>