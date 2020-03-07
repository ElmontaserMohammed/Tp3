<?php
$etudiants[]=["Mohammed","Elmontaser","SMI",18];
$etudiants[]=["Anoir","Ezzaher","SMI",19];
$etudiants[]=["Omar","Amrani","SMI",10];
$etudiants[]=["Aymen","Zaidi","SMP",8];
$etudiants[]=["Hanae","Charbak","SMA",18];
$etudiants[]=["Meryem","Sebani","SMI",15];
function getFilier($Filier)
{
global $etudiants;
$Liste =array();
foreach ($etudiants as $et) {
	if($et[sizeof($et)-2]==$Filier)
	{
     $Liste[]=$et;
	}
}
return $Liste;
}
function getMention($key)
{
		if($key[sizeof($key)-1]<=20 && $key[sizeof($key)-1]>16 )
			return "Excelent";
		if($key[sizeof($key)-1]<=16&&$key[sizeof($key)-1]>14 )
			return "Tres bien";
		if($key[sizeof($key)-1]<=14&&$key[sizeof($key)-1]>12 )
			return "bien";
		
		if($key[sizeof($key)-1]>=12&&$key[sizeof($key)-1]<14 )
			return "assez bien";
		
		if($key[sizeof($key)-1]>=10&&$key[sizeof($key)-1]<12)
			return "passable";
		if($key[sizeof($key)-1]<10)
			return "Non admis";
	
	return "Nan" ;
}
function getMax($etud)
{
	$max=0;
	foreach ($etud as $et) {
			if($et[sizeof($et)-1]>$max)
				$max=$et[sizeof($et)-1];
	}
	return $max;
}
function getNbr($etud)
{
	$c=0; 
	foreach ($etud as $value) {
		$c++;
	}
	return $c;
}
function getMoy($etud)
{
	$S=0;
	$M=0;
	$c=getNbr($etud);
	foreach ($etud as $value) {
			$S+=$value[sizeof($value)-1];
	}
	if($c!=0)
	{
    $M=$S/$c;
    return $M;
    }
  return "Nan";
}
$F=$_GET["codeF"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/acceuil.css">
	<title>page2</title>
</head>
<body>
	<?php
	include("head.php"); 
	include("menu.php");
	?>
	<div class="description">
<table border="2"> 
	<tr>
		<th>nom:</th>
		<th>Prenom:</th>
		<th>Filier:</th>
		<th>Note:</th>
		<th>Mention:</th>
	</tr>
<?php
$list=getFilier($F);
echo "<h1>"."Liste des etudiants reussis de la filiere:".$F."</h1>"."<hr>";
echo "<p>"."Meillere note:".getMax($list)."</p>";
echo "<p>"."le nombre des etudiants est:".getNbr($list)."</p>";
echo "<p>"."la moyenne est:".getMoy($list)."</p>"."<hr>"."<br>";
foreach ($list as $l) 
{
	echo "<tr>";
	foreach ($l as $l1) 		
		{
			echo "<td>".$l1."</td>";
		}
		echo "<td>".getMention($l)."</td>";
			
	echo "</tr>";
}

?>
</table>
</div>
<?php
include("footer.php");?>
</body>
</html>
