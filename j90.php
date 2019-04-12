<?php
$titre ="Statut à J90";
$form=1;
include('debut.php');
echo "<SECTION>";
debutform("postJ90.php");
//
gdlegend("J 90");
?>
<LABEL for ="j90.statut">Statut à 3 mois</LABEL>
<input type="RADIO" Name="j90.statut" id ="j90.statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="j90.statut" id ="j90.statut" value="décédé"> décédé</BR>
<?php
liste("j90.lieu","Lieu de vie","lieu",$base);
sautl();
ouinon("j90.trach","Trachéotomie");
ouinon("j90.gstomie","Gastrostomie");
ouinon("j90.su","Sonde urinaire");
ouinon("j90.vent","Ventilation");
ouinon("j90.vni","VNI");
sautl();
nombre("j90.csg","Score de Glasgow","","3","15","");
nombre("j90.crsr","CRS R","","0","23","");
nombre("j90.whim","WHIM","","0","","");
nombre("j90.mif","MIF","","0","7","");
nombre("j90.drs","DRS","","0","29","");
nombre("j90.gose","GOSE","","1","","");
//nombre("j90.barthel","BARTHEL","","0","100","");
sautl();
nombre("j90.asia.mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("j90.asia.ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("j90.asia.anom","ASIA - Échelle d'anomalie","abcde",$base);
sautl();
nombre("j90.poids","Poids","Kg","15","300","");
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>


