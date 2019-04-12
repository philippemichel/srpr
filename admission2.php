<?php
$titre ="ADMISSION 2";
$form=1;
include('debut.php');
$reponse = $base->query("SELECT * FROM admission WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
//print_r($donnees);
//
echo "<SECTION>";
debutform("postadmission2.php");
//
gdlegend("Défaillance d'organe");
ouinon("adm_defaillance","Défaillance d'organe");
boxs("adm_hemod","Si oui : Hémodynamique");
boxs("adm_rein","Rénale");
boxs("adm_neuro","Neurologique");
boxs("adm_hemato","Hématologique");
boxs("adm_respi","Respiratoire");
boxs("adm_autre","Autre");
finf();
//
gdlegend("Scores neurologiques");
nombre("adm_csg","Score de Glasgow","","3","15","");
nombre("adm_crsr","CRS R","","0","23","");
nombre("adm_goat","GOAT","","0","100","");
nombre("adm_mrcd","MRC droit","","0","60","");
nombre("adm_mrcg","MRC gauche","","0","60","");
nombre("adm_whim","WHIM","","0","","");
nombre("adm_mif","MIF","","0","7","");
nombre("adm_drs","DRS","","0","29","");
nombre("adm_gose","GOSE","","1","","");
sautl();
nombre("adm_asia_mot","ASIA - Plus mauvais score moteur","","0","100","");
nombre("adm_asia_ssb","ASIA - Plus mauvais score sensitif","","0","112","");
liste("adm_asia_anom","ASIA - Échelle d'anomalie","abcde",$base);
finf();
//
gdlegend("ECG");
boxs("adm_ecgnormal","ECG Normal");
boxs("adm_tdrvent","TdR ventriculaires");
boxs("adm_tdrsupra","TdR supra-ventriculaires");
boxs("adm_conduction","Troubles de la conduction");
boxs("adm_repol","Troubles de la repolarisation");
boxs("adm_ische","Séquelles ischémiques");
finf();
//
gdlegend("Échocardiographie");
ouinon("adm_echo","Échocardiographie");
ndate("adm_date_echo","Date de l'échocardiographie");
finf();
//
gdlegend("Alimentation");
ouinon("adm_deglu","Troubles de la déglutition");
liste("adm_alim","Voie de l'alimentation","alim",$base);
finf();
//
gdlegend("Diagnostic étiologique");
liste("adm_diag","Diagnostic étiologique","etiologie",$base);
finf();
//
gdlegend("Clinique");
ouinon("adm_cognitif","Troubles cognitifs");
ouinon("adm_sommeil","Troubles du sommeil");
ouinon("adm_agitation","Agitation");
liste("adm_visuel","Troubles visuels","visuel",$base);
liste("adm_hemip","Hémiplégie","plegie",$base);
liste("adm_parap","Paraplégie","plegie",$base);
liste("adm_tetrap","Tétraplégie","plegie",$base);
saut();
echo '<LABEL for = "adm_retract" class="labelhaut"> </label>
<textarea name="adm_retract" rows="6" cols="60" id ="adm_retract">Rétractions tendineuses (liste)</textarea>';
saut();
echo '<LABEL for = "adm_retract" class="labelhaut"> </label>
<textarea name="adm_retract" rows="6" cols="60" id ="adm_retract">Clinique autre</textarea>';
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>