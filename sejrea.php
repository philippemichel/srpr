<?php
$titre ="Séjour en réa avant le SRPR";
$form=1;
include('debut.php');
$reponse = $base->query("SELECT * FROM sejrea WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
//print_r($donnees);
echo "<SECTION>";
debutform("posttout.php?table=sejrea&suite=admission");
//
liste("sejrea_reaadm","Type de réanimation initiale","reanimations",$base,$donnees);
//echo $donnees["sejrea_pbmedadm"];
ndate("sejrea_dateadm", "Date d'admission en réanimation", $donnees["sejrea_dateadm"]);
saut();
nombre("sejrea_csg","Score de Glasgow à l'admission en réanimation","",3,15,"",$donnees);
sautl();
nombre("sejrea_delai_traj","Délai Trajectoire - admission SRPR","jours",0,100,"",$donnees);
nombre("sejrea_retard","retard estimé admission SRPR","jours",0,100,"",$donnees);
ouinon("sejrea_pbmedadm","Problème médical non réglé",$donnees);
$dd = $donnees["sejrea_pbmedadm2"];
echo <<<PBC
    <LABEL for = "sejrea_pbmedadm2" class="labelhaut">Si oui, précisez </LABEL>
    <textarea name="sejrea_pbmedadm2" rows="7" cols="50" id ="sejrea_pbmedadm2">
    $dd</textarea>
PBC;
sautl();
liste("sejrea_reafin","Type de réanimation lors du transfert","reanimations",$base,$donnees);
ndate("sejrea_dateadmsrpr","Date d'admission au SRPR",$donnees);
finf();
finq();
echo "</SECTION>";
include('pied.php');
