<?php
/** 
 * Page 2 à remplir à l'admission
 * 
 * @category Page_Formulaire
 * @author Philippe_MICHEL <philippe@docteur-michel.fr>
 * @license GNU
 **/ 

$titre = "ADMISSION 2";
$form=1;
require 'debut.php';
$reponse = $base->query("SELECT * FROM admission WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
//print_r($donnees);
//
echo "<SECTION>";
debutform("posttout.php?table=admission&suite=j28");
//
gdlegend("Défaillance d'organe");
nombre("adm_igs2", "IGS2", "", "0", "150", "",$donnees);
nombre("adm_sofa", "SOFA", "", "0", "150", "",$donnees);
ouinon("adm_defaillance", "Défaillance d'organe",$donnees);
ouinonnon("adm_hemod", "Si oui : Hémodynamique",$donnees);
ouinonnon("adm_rein", "Rénale",$donnees);
ouinonnon("adm_neuro", "Neurologique",$donnees);
ouinonnon("adm_hemato", "Hématologique",$donnees);
ouinonnon("adm_respi", "Respiratoire",$donnees);
ouinonnon("adm_autre", "Autre",$donnees);
finf();
//
gdlegend("Scores neurologiques");
nombre("adm_csg", "Score de Glasgow", "", "3", "15", "",$donnees);
nombre("adm_crsr", "CRS R", "", "0", "23", "",$donnees);
nombre("adm_goat", "GOAT", "", "0", "100", "",$donnees['adm_goat']);
// nombre("adm_mrcd", "MRC droit", "", "0", "60", "");
// nombre("adm_mrcg", "MRC gauche", "", "0", "60", "");
nombre("adm_whim", "WHIM", "", "0", "", "",$donnees);
nombre("adm_mif", "MIF", "", "0", "7", "",$donnees);
nombre("adm_drs", "DRS", "", "0", "29", "",$donnees);
nombre("adm_gose", "GOSE", "", "1", "", "",$donnees);
sautl();
nombre("adm_asia_mot", "ASIA - Meilleur niveau non déficitaire moteur", "", "0", "100", "",$donnees);
nombre("adm_asia_ssb", "ASIA - Meilleur niveau non déficitaire sensitif", "", "0", "112", "",$donnees);
liste("adm_asia_anom", "ASIA - Échelle d'anomalie", "abcde", $base,$donnees);
finf();
//
gdlegend("ECG");
ouinon("adm_ecgnormal", "ECG Normal",$donnees);
ouinonnon("adm_tdrvent", "TdR ventriculaires",$donnees);
ouinonnon("adm_tdrsupra", "TdR supra-ventriculaires",$donnees);
ouinonnon("adm_conduction", "Troubles de la conduction",$donnees);
ouinonnon("adm_repol", "Troubles de la repolarisation",$donnees);
ouinonnon("adm_ische", "Séquelles ischémiques",$donnees);
finf();
//
gdlegend("Échocardiographie");
liste("adm_echo", "Résultat échocardiographie", "echo", $base,$donnees);
$dd = $donnees['adm_echotxt'];
echo <<<ECH
<LABEL for = "adm_echotxt" class="labelhaut">Diagnostic échographique </label>
<textarea name="adm_echotxt" rows="6" cols="60" id ="adm_echotxt">
$dd
</textarea>
ECH;
finf();
//
gdlegend("Alimentation");
ouinon("adm_deglu", "Troubles de la déglutition",$donnees);
liste("adm_alim", "Voie de l'alimentation", "alim", $base,$donnees);
finf();
//
gdlegend("Diagnostic étiologique");
liste("adm_diag", "Diagnostic étiologique", "etiologie", $base,$donnees);
finf();
//
gdlegend("Clinique");
ouinon("adm_cognitif", "Troubles cognitifs",$donnees);
ouinon("adm_sommeil", "Troubles du sommeil",$donnees);
ouinon("adm_agitation", "Agitation",$donnees);
liste("adm_visuel", "Troubles visuels", "visuel", $base,$donnees);
liste("adm_hemip", "Hémiplégie", "plegie", $base,$donnees);
liste("adm_parap", "Paraplégie", "plegie", $base,$donnees);
liste("adm_tetrap", "Tétraplégie", "plegie", $base,$donnees);
saut();
$dd = $donnees['adm_retract'];
echo <<<RET1
<LABEL for = "adm_retract" class="labelhaut"> Rétractions tendineuses (liste)</label>
<textarea name="adm_retract" rows="6" cols="60" id ="adm_retract">
$dd
</textarea>
RET1;
saut();
$dd = $donnees['adm_retract2'];
echo <<<RET2
<LABEL for = "adm_retract2" class="labelhaut"> </label>Clinique autre
<textarea name="adm_retract2" rows="6" cols="60" id ="adm_retract2">
$dd
</textarea>'
RET2;
//
finf();
finq();
echo "</SECTION>";
require 'pied.php';
?>