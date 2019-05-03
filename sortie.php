<?php
$titre ="Statut à la sortie du SRPR";
$form=1;
include('debut.php');
//
echo "<SECTION>";
debutform("posttout.php?table=sortie&suite=mois6");
$reponse = $base->query("SELECT * FROM sortie WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
gdlegend("J 28");
$dd = $donnees['sort_statut'];
echo <<<STA
<LABEL for ="sort_statut">Statut à sort</LABEL>
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="vivant"
STA;
if ($dd == "vivant"): echo "checked";  endif;
echo <<<STB
> Vivant&nbsp;
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="décédé"
STB;
if ($dd == "décédé"): echo "checked";  endif;
echo <<<STC
> décédé</BR>
STC;
liste("sort_lieu","Lieu de vie","lieu",$base, $donnees);
sautl();
ouinon("sort_trach","Trachéotomie", $donnees);
ouinon("sort_gstomie","Gastrostomie", $donnees);
ouinon("sort_su","Sonde urinaire", $donnees);
ouinon("sort_vent","Ventilation", $donnees);
ouinon("sort_vni","VNI", $donnees);
sautl();
nombre("sort_csg","Score de Glasgow","","3","15","", $donnees);
nombre("sort_crsr","CRS R","","0","23","", $donnees);
nombre("sort_whim","WHIM","","0","","", $donnees);
nombre("sort_mif","MIF","","0","7","", $donnees);
nombre("sort_drs","DRS","","0","29","", $donnees);
nombre("sort_gose","GOSE","","1","","", $donnees);
//nombre("sort_barthel","BARTHEL","","0","100","", $donnees);
sautl();
nombre("sort_asia_mot","ASIA - Meilleur niveau non déficitaire moteur","","0","100","", $donnees);
nombre("sort_asia_ssb","ASIA - Meilleur niveau non déficitaire sensitif","","0","112","", $donnees);
liste("sort_asia_anom","ASIA - Échelle d'anomalie","abcde",$base, $donnees);
sautl();
nombre("sort_poids","Poids","Kg","15","300","", $donnees);
sautl();
ouinon("sort_esc","Escarre", $donnees);

echo "<h4>Escarre 1</h4>";
ndate("sort_date_esc1","Si oui : Date", $donnees);
liste("sort_esc_stade1","Stade","escarre",$base, $donnees);
liste("sort_esc_loc1","Localisation","escarreloc",$base, $donnees);
liste("sort_esc_tt1","traitement","escarrett",$base, $donnees);
echo "<h4>Escarre 2</h4>";
ndate("sort_date_esc2","Si oui : Date", $donnees);
liste("sort_esc_stade2","Stade","escarre",$base, $donnees);
liste("sort_esc_loc2","Localisation","escarreloc",$base, $donnees);
liste("sort_esc_tt2","traitement","escarrett",$base, $donnees);
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>


