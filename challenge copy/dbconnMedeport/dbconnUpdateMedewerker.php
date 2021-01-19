<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
    

$database_lokatie     = 'localhost';
$database_naam        = 'dehandigemannen';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);



$sql = "UPDATE medewerkers SET naam= :naam,email=:email,wachtwoord=:ww,geboortedatum=:geboortedatum,adres=:adres,postcode=:postcode,stad=:stad,telefoonnummer=:tel where id=:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(':naam', $_GET['naam']);
$statement->bindParam(':email', $_GET['email']);
$statement->bindParam(':ww', $_GET['wachtwoord']);
$statement->bindParam(':geboortedatum', $_GET['geboortedatum']);
$statement->bindParam(':adres', $_GET['adres']);
$statement->bindParam(':postcode', $_GET['postcode']);
$statement->bindParam(':stad', $_GET['stad']);
$statement->bindParam(':tel', $_GET['telefoonnummer']);
$statement->bindParam(':id', $_GET['id']);

$statement->execute();
// $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Medewerker aangepast</h1>
<a href="..\indexM.php" class="btn btn-light">Terug</a>