<?php
$titre ="Statut à J28 après l'admission";
$form=1;
include('debut.php');
//
echo "<SECTION>";
debutform("posttout.php?table=j28&suite=j28");
$reponse = $base->query("SELECT * FROM j28 WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
gdlegend("J 28");
$dd = $donnees['j28_statut'];
echo <<<STA
<LABEL for ="j28_statut">Statut à J28</LABEL>
<input type="RADIO" Name="j28_statut" id ="j28_statut" value="vivant"
STA;
if ($dd == "vivant"): echo "checked";  endif;
echo <<<STB
> Vivant&nbsp;
<input type="RADIO" Name="j28_statut" id ="j28_statut" value="décédé"
STB;
if ($dd == "décédé"): echo "checked";  endif;
echo <<<STC
> décédé</BR>
STC;
liste("j28_lieu","Lieu de vie","lieu",$base, $donnees);
sautl();
ouinon("j28_trach","Trachéotomie", $donnees);
ouinon("j28_gstomie","Gastrostomie", $donnees);
ouinon("j28_su","Sonde urinaire", $donnees);
ouinon("j28_vent","Ventilation", $donnees);
ouinon("j28_vni","VNI", $donnees);
sautl();
nombre("j28_csg","Score de Glasgow","","3","15","", $donnees);
nombre("j28_crsr","CRS R","","0","23","", $donnees);
nombre("j28_whim","WHIM","","0","","", $donnees);
nombre("j28_mif","MIF","","0","7","", $donnees);
nombre("j28_drs","DRS","","0","29","", $donnees);
nombre("j28_gose","GOSE","","1","","", $donnees);
//nombre("j28_barthel","BARTHEL","","0","100","", $donnees);
sautl();
nombre("j28_asia_mot","ASIA - Meilleur niveau non déficitaire moteur","","0","100","", $donnees);
nombre("j28_asia_ssb","ASIA - Meilleur niveau non déficitaire sensitif","","0","112","", $donnees);
liste("j28_asia_anom","ASIA - Échelle d'anomalie","abcde",$base, $donnees);
sautl();
nombre("j28_poids","Poids","Kg","15","300","", $donnees);
sautl();
ouinon("j28_esc","Escarre", $donnees);

echo "<h4>Escarre 1</h4>";
ndate("j28_date_esc1","Si oui : Date", $donnees);
liste("j28_esc_stade1","Stade","escarre",$base, $donnees);
liste("j28_esc_loc1","Localisation","escarreloc",$base, $donnees);
liste("j28_esc_tt1","traitement","escarrett",$base, $donnees);
echo "<h4>Escarre 2</h4>";
ndate("j28_date_esc2","Si oui : Date", $donnees);
liste("j28_esc_stade2","Stade","escarre",$base, $donnees);
liste("j28_esc_loc2","Localisation","escarreloc",$base, $donnees);
liste("j28_esc_tt2","traitement","escarrett",$base, $donnees);
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>


