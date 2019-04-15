<?php
/** 
 * Page 2 à remplir à la sortie du patient
 * 
 * @category Page_Formulaire
 * @author Philippe_MICHEL <philippe@docteur-michel.fr>
 * @license GNU
 **/ 
$titre ="Statut à la sortie";
$form=1;
require 'debut.php' ;
//
echo "<SECTION>";
debutform("postsortie.php");
gdlegend("SORTIE");
?>
<LABEL for ="sort_statut">Statut à la sortie</LABEL>
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="vivant"> Vivant&nbsp;
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="décédé"> décédé</BR>
<?php
ndate("sort_date", "Date de la sortie");
saut();
liste("sort_lieu", "Lieu de sortie", "lieu", $base);
sautl();
ouinon("sort_trach", "Trachéotomie");
ouinon("sort_gstomie", "Gastrostomie");
ouinon("sort_su", "Sonde urinaire");
ouinon("sort_vent", "Ventilation");
ouinon("sort_vni", "VNI");
sautl();
nombre("sort_csg", "Score de Glasgow", "", "3", "15", "");
nombre("sort_crsr", "CRS R", "", "0", "23", "");
nombre("sort_whim", "WHIM", "", "0", "", "");
nombre("sort_mif", "MIF", "", "0", "7", "");
nombre("sort_drs", "DRS", "", "0", "29", "");
nombre("sort_gose", "GOSE", "", "1", "", "");
nombre("sort_barthel", "BARTHEL", "", "0", "100", "");
sautl();
nombre("sort_asia_mot", "ASIA - Meilleur niveau non déficitaire moteur", "", "0", "100", "");
nombre("sort_asia_ssb", "ASIA - Meilleur niveau non déficitaire sensitif", "", "0", "112", "");
liste("sort_asia_anom", "ASIA - Échelle d'anomalie", "abcde", $base);
sautl();
nombre("sort_poids", "Poids", "Kg", "15", "300", "");
ouinon("sort_deglu", "Troubles de la déglutition");
liste("sort_alim", "Voie de l'alimentation", "alim", $base);
finf();
sautl();
//
gdlegend("Escarre");
ouinon("sort_esc", "Escarre");
echo "<h4>Escarre 1</h4>";
ndate("sort_date_esc", "Si oui : Date");
liste("sort_esc_stade", "Stade", "escarre", $base);
liste("sort_esc_loc", "Localisation", "escarreloc", $base);
liste("sort_esc_tt", "traitement", "escarrett", $base);
echo "<h4>Escarre 2</h4>";
ndate("sort_date_esc", "Si oui : Date");
liste("sort_esc_stade", "Stade", "escarre", $base);
liste("sort_esc_loc", "Localisation", "escarreloc", $base);
liste("sort_esc_tt", "traitement", "escarrett", $base);
finf();
finq();
echo "</SECTION>";
require 'pied.php';
?>

