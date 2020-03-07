<?php
$Filier[]= ["filier" =>"SMI" ,"Abr"=>"science math et informatique"];
$Filier[]= ["filier" =>"SMA" ,"Abr"=>"science math et applique"];
$Filier[]= ["filier" =>"SMP" ,"Abr"=>"science math et physique"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/acceuil.css">
	<title>page1</title>
</head>
<body>
	<?php
	include("head.php"); 
	include("menu.php");
	?>
	<div class="description">
		<h1>Affichage des resultats</h1><br><hr><br>
		<p>Cliquez sur une filiere pour voir les resultats</p><br>
		<ul>
<?php
foreach ($Filier as $F)
{ 
	?>
	
                    <li><a href="page2.php?codeF=<?=$F["filier"]?>"><?=$F["Abr"]?></a></li>           
<?php 
} 
?> 
</ul>
</div>
<?php
include("footer.php");?>
</body>
</html>