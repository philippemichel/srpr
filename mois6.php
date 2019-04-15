<?php
$titre ="Statut à six mois";
$form=1;
include('debut.php');
echo "<SECTION>";
debutform("postmois6.php");
gdlegend("Six mois");
?>
<LABEL for ="m6.statut">Statut à six mois</LABEL>
<input type="RADIO" Name="m6.statut" id ="m6.statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="m6.statut" id ="m6.statut" value="décédé"> décédé</BR>
<?php
liste("m6.lieu","Lieu de vie","lieu",$base);
sautl();
ouinon("m6.trach","Trachéotomie");
ouinon("m6.gstomie","Gastrostomie");
ouinon("m6.su","Sonde urinaire");
ouinon("m6.vent","Ventilation");
ouinon("m6.vni","VNI");
sautl();
nombre("m6.csg","Score de Glasgow","","3","15","");
nombre("m6.crsr","CRS R","","0","23","");
nombre("m6.whim","WHIM","","0","","");
nombre("m6.mif","MIF","","0","7","");
nombre("m6.drs","DRS","","0","29","");
nombre("m6.gose","GOSE","","1","","");
//nombre("m6.barthel","BARTHEL","","0","100","");
sautl();
nombre("m6.asia.mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("m6.asia.ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("m6.asia.anom","ASIA - Échelle d'anomalie","abcde",$base);
sautl();
nombre("m6.poids","Poids","Kg","15","300","");
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>