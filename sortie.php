<?php
$titre ="Statut à la sortie";
$form=1;
include('debut.php');
//
echo "<SECTION>";
debutform("postsortie.php");
gdlegend("SORTIE");
?>
<LABEL for ="sort_statut">Statut à la sortie</LABEL>
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="décédé"> décédé</BR>
<?php
ndate("sort_date","Date de la sortie");
saut();
liste("sort_lieu","Lieu de sortie","lieu",$base);
sautl();
ouinon("sort_trach","Trachéotomie");
ouinon("sort_gstomie","Gastrostomie");
ouinon("sort_su","Sonde urinaire");
ouinon("sort_vent","Ventilation");
ouinon("sort_vni","VNI");
sautl();
nombre("sort_csg","Score de Glasgow","","3","15","");
nombre("sort_crsr","CRS R","","0","23","");
nombre("sort_whim","WHIM","","0","","");
nombre("sort_mif","MIF","","0","7","");
nombre("sort_drs","DRS","","0","29","");
nombre("sort_gose","GOSE","","1","","");
nombre("sort_barthel","BARTHEL","","0","100","");
sautl();
nombre("sort_asia_mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("sort_asia_ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("sort_asia_anom","ASIA - Échelle d'anomalie","abcde",$base);
sautl();
nombre("sort_poids","Poids","Kg","15","300","");
sautl();
ouinon("sort_escar","Escarre","");
liste("sort_esc_stade","Stade","stadeesc",$base);
liste("sort_esc_evo","Évolution","evoesc",$base);
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>

