<?php
/** 
 Page 1 à remplir à l'admission
 **/ 
$titre ="ADMISSION 1";
$form=1;
include'debut.php';
$reponse = $base->query("SELECT * FROM admission WHERE codepat='$codepat'");
$donnees = $reponse->fetch();
//print_r($donnees);
//
echo "<SECTION>";
debutform("posttout.php?table=admission&suite=admission");
//
gdlegend("Matériel en place");
ouinon("adm_ac_vasc1", "Accès vasculaire", $donnees);
liste("adm_ac_vasc2", "Si oui : type", "ascvasc", $base, $donnees);
sautl();
ouinon("adm_sg", "Sonde naso-gastrique",$donnees);
ouinon("adm_gastomie", "Gastrostomie",$donnees);
ouinon("adm_stomie", "Stomie digestive",$donnees);
ouinon("adm_su", "Sonde urinaire",$donnees);
ouinon("adm_ksp", "KT sus-pubien",$donnees);
ouinon("adm_trach", "Trachéotomie",$donnees);
ouinon("adm_dve", "DVE",$donnees);
sautl();
ouinon("adm_vm", "Ventilation mécanique",$donnees);
liste("adm_vm_cont", "Si oui : Durée", "continu", $base,$donnees);
nombre("adm_vm_h", "Durée quotidienne", "Heures/jour", "0", "24", "Si discontinue",$donnees);
sautl();
ouinon("adm_vni", "VNI",$donnees);
liste("adm_vni_cont", "Si oui : Durée", "continu", $base,$donnees);
nombre("adm_vni_h", "Durée quotidienne",  "Heures/jour", "0", "24", "Si discontinue",$donnees);
//
sautl();
ouinon("adm_esc", "Escarre",$donnees);
echo "<h4>Escarre 1</h4>";
ndate("adm_date_esc1", "Si oui : Date",$donnees);
liste("adm_esc_stade1", "Stade", "escarre", $base,$donnees);
liste("adm_esc_loc1", "Localisation", "escarreloc", $base,$donnees);
liste("adm_esc_tt1", "traitement", "escarrett", $base,$donnees);
echo "<h4>Escarre 2</h4>";
ndate("adm_date_esc2", "Si oui : Date",$donnees);
liste("adm_esc_stade2", "Stade", "escarre", $base,$donnees);
liste("adm_esc_loc2", "Localisation", "escarreloc", $base,$donnees);
liste("adm_esc_tt2", "traitement", "escarrett", $base,$donnees);
finf();
//
gdlegend("Bactériologie");
ouinon("adm_bmr", "BMR acquis",$donnees);
liste("adm_bmr_loc", "Si oui : Localisation", "bmrloc", $base,$donnees);
liste("adm_bmr_germe", "Germe", "bmrgerme", $base,$donnees);
sautl();
ouinon("adm_bhr", "BHR acquis",$donnees);
liste("adm_bhr_loc", "Si oui : Localisation", "bmrloc", $base,$donnees);
liste("adm_bhr_contact", "Si oui : Type d'infection", "bhr", $base,$donnees);
sautl();
ouinon("adm_clostridium", "Clostridium",$donnees);
finf();
//
gdlegend("Biologie");
//
nombre("adm_poids", "Poids", "Kg", "1", "300", "",$donnees);
nombre("adm_taille", "Taille", "cm", "0", "222", "",$donnees);
nombre("adm_prealb", "Pré-albumine", "g/L", "1", "50", "",$donnees);
nombre("adm_alb", "Albumine", "g/L", "1", "50", "",$donnees);
nombre("adm_uree", "Urée", "mmol/L", "0", "100", "",$donnees);
nombre("adm_creat", "Créatinine", "µmol/L", "0", "2000", "",$donnees);
//
finf();
finq();
echo "</SECTION>";
include 'pied.php';
?>