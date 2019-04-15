<?php
$titre ="ADMISSION";
$form=1;
include('debut.php');
$reponse = $base->query("SELECT * FROM admission WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
//print_r($donnees);
//
echo "<SECTION>";
debutform("postsejrea.php");
//
liste("type_reaadm","Type de réanimation initiale","reanimations",$base);
ndate("dateadmrea","Date d'admission en réanimation");
saut();
nombre("csgrea","Score de Glasgow à l'admission en réanimation","",3,15,"","");
sautl();
nombre("delai_traj","Délai Trajectoire - admission SRPR","jours",0,100,"","");
nombre("retard","retrad estimé admission SRPR","jours",0,100,"","");
ouinon("pbmedadm","Problème médical non réglé","");
echo <<<PBC
    <LABEL for = "pbadm2" class="labelhaut"> </LABEL>
    <textarea name="pbadm2" rows="6" cols="60" id ="pbadm2">Si oui, précisez</textarea>'
PBC;
sautl();
liste("type_reafin","Type de réanimation lors du transfert","reanimations",$base);
ndate("dateadmsrpr","Date d'admission au SRPR");
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>