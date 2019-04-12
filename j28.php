<?php
$titre ="Statut à J28";
$form=1;
include('debut.php');
//
echo "<SECTION>";
debutform("postj28.php");
gdlegend("J 28");
?>
<LABEL for ="j28.statut">Statut à J28</LABEL>
<input type="RADIO" Name="j28.statut" id ="j28.statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="j28.statut" id ="j28.statut" value="décédé"> décédé</BR>
<?php
liste("j28.lieu","Lieu de vie","lieu",$base);
sautl();
ouinon("j28.trach","Trachéotomie");
ouinon("j28.gstomie","Gastrostomie");
ouinon("j28.su","Sonde urinaire");
ouinon("j28.vent","Ventilation");
ouinon("j28.vni","VNI");
sautl();
nombre("j28.csg","Score de Glasgow","","3","15","");
nombre("j28.crsr","CRS R","","0","23","");
nombre("j28.whim","WHIM","","0","","");
nombre("j28.mif","MIF","","0","7","");
nombre("j28.drs","DRS","","0","29","");
nombre("j28.gose","GOSE","","1","","");
//nombre("j28.barthel","BARTHEL","","0","100","");
sautl();
nombre("j28.asia.mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("j28.asia.ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("j28.asia.anom","ASIA - Échelle d'anomalie","abcde",$base);
sautl();
nombre("j28.poids","Poids","Kg","15","300","");
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>


