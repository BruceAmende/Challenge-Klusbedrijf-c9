<?php
  session_start();
    require('db.conn/db.conn.php');
    include('include/header.php');
    ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>KlantPortaal-De Handige Mannen</title>
</head>
<body>
<style>
.titel{
    margin-left: 500px;
}
.klusBekijken{
    display: flex;
    flex-direction:column;
    width: auto;
    border: 2px solid lightgray;
    margin-top:25px;
    background-color:lightgray;
    
  padding: 6px;
  box-shadow: 5px 10px 5px 5px #888888;
    
}
td{
  
  border-bottom:black 1px solid;
  
}
}
</style>
<div>
				
				
				<a href="loguit.php"><i class="fas fa-sign-out-alt"></i>Loguit</a>
			</div>
		</nav>
		<div class="content">
			
			<p>Welkom terug, <?=$_SESSION['name']?>!</p>
		</div>
      <div class='titel'>
      <h1 >KlantPortaal</h1>
      </div>

<div class='klusBekijken'>
   <h2>Mijn klusopdrachten</h2>

<table>

  <tr>
  
    
    <th>Naam</th>
    <th>Type</th>
    <th>Duur</th>
    <th>Omschrijving</th>
    <th>Grootte</th>
    <th>Locatie</th>
    <th>Datum aangevraagd</th>
    <th>Email</th>
    <th>Annuleren</th>
   
  </tr>
  <tbody>
   <?php foreach($database_gegevensKlus as $data):?>
  <tr>
    <td><?php echo $data["naam"]?></td>
    <td><?php echo $data["type"]?></td>
    <td><?php echo $data["duur"]?></td>
    <td><?php echo $data["omschrijving"]?></td>
    <td><?php echo $data["grootte"]?></td>
    <td><?php echo $data["locatie"]?></td>
    <td><?php echo $data["datum"]?></td>
    <td><?php echo $data["email"]?></td>
    
    <td><a href="db.conn/db.connDelete.php?id=<?php echo $data['id']; ?>"  class="btn btn-danger">Annuleer</a></td></td>
    
    
    
  </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>
</div>

<div class='klusAanvragen'>
   <h2>Klus aanvragen</h2>

    <h4>Nog geen klus?</h4>
    <p>Vraag er <a href="klusAanvraag.php">hier</a> een aan</p>
</div>
</body>

