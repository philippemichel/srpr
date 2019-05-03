<?php
$titre ="Statut à un an";
$form=1;
include('debut.php');
echo "<SECTION>";
debutform("postunan.php");
gdlegend("Un an");
?>
<LABEL for ="an1_statut">Statut à un an </LABEL>
<input type="RADIO" Name="an1_statut" id ="an1_statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="an1_statut" id ="an1_statut" value="décédé"> décédé</BR>
<?php
liste("an1_lieu","Lieu de vie","lieu",$base);
sautl();
ouinon("an1_trach","Trachéotomie");
ouinon("an1_gstomie","Gastrostomie");
ouinon("an1_su","Sonde urinaire");
ouinon("an1_vent","Ventilation");
ouinon("an1_vni","VNI");
sautl();
nombre("an1_csg","Score de Glasgow","","3","15","");
nombre("an1_crsr","CRS R","","0","23","");
nombre("an1_whim","WHIM","","0","","");
nombre("an1_mif","MIF","","0","7","");
nombre("an1_drs","DRS","","0","29","");
nombre("an1_gose","GOSE","","1","","");
//nombre("an1_barthel","BARTHEL","","0","100","");
sautl();
nombre("an1_asia.mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("an1_asia.ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("an1_asia.anom","ASIA - Échelle d'anomalie","abcde",$base);
sautl();
nombre("an1_poids","Poids","Kg","15","300","");
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>