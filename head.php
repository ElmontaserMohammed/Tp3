<?php

$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

$datefr = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".date("Y");

?>
<header>
     <img src=../Images/fsdm.jpg alt="logo of FSDM"></a> 
        <p>SMI6 <br>Faculte des Sciences Dhar Mehraz,Fes</p>
        <div style="height: 20px;background-color:brown;margin-top: 20px">
    <h4 style="text-align:right;margin-right:20px"><?=$datefr?></h4>
    </div>
    </header>
