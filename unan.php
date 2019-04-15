<?php
$titre ="Statut à un an";
$form=1;
include('debut.php');
echo "<SECTION>";
debutform("postunan.php");
gdlegend("Un an");
?>
<LABEL for ="an1.statut">Statut à un an </LABEL>
<input type="RADIO" Name="an1.statut" id ="an1.statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="an1.statut" id ="an1.statut" value="décédé"> décédé</BR>
<?php
liste("an1.lieu","Lieu de vie","lieu",$base);
sautl();
ouinon("an1.trach","Trachéotomie");
ouinon("an1.gstomie","Gastrostomie");
ouinon("an1.su","Sonde urinaire");
ouinon("an1.vent","Ventilation");
ouinon("an1.vni","VNI");
sautl();
nombre("an1.csg","Score de Glasgow","","3","15","");
nombre("an1.crsr","CRS R","","0","23","");
nombre("an1.whim","WHIM","","0","","");
nombre("an1.mif","MIF","","0","7","");
nombre("an1.drs","DRS","","0","29","");
nombre("an1.gose","GOSE","","1","","");
//nombre("an1.barthel","BARTHEL","","0","100","");
sautl();
nombre("an1.asia.mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("an1.asia.ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("an1.asia.anom","ASIA - Échelle d'anomalie","abcde",$base);
sautl();
nombre("an1.poids","Poids","Kg","15","300","");
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>