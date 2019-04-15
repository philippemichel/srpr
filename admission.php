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
debutform("postadmission.php");
//
gdlegend("Matériel en place");
$dd = $donnees['adm_ac_vasc1'];
ouinon("adm_ac_vasc1", "Accès vasculaire", $dd);
$dd = $donnees['adm_ac_vasc2'];
liste("adm_ac_vasc2", "Si oui : type", "ascvasc", $base, $dd);
sautl();
ouinon("adm_sg", "Sonde naso-gastrique");
ouinon("adm_gastomie", "Gastrostomie");
ouinon("adm_stomie", "Stomie digestive");
ouinon("adm_su", "Sonde urinaire");
ouinon("adm_ksp", "KT sus-pubien");
ouinon("adm_trach", "Trachéotomie");
ouinon("adm_dve", "DVE");
sautl();
ouinon("adm_vm", "Ventilation mécanique");
liste("adm_vm_cont", "Si oui : Durée", "continu", $base);
nombre("adm_vm_h", "Durée quotidienne", "Heures/jour", "0", "24", "Si discontinue");
sautl();
ouinon("adm_vni", "VNI");
liste("adm_vni_cont", "Si oui : Durée", "continu", $base);
nombre("adm_vni_h", "Durée quotidienne",  "Heures/jour", "0", "24", "Si discontinue");
//
sautl();
ouinon("adm_esc", "Escarre");
echo "<h4>Escarre 1</h4>";
ndate("adm_date_esc", "Si oui : Date");
liste("adm_esc_stade", "Stade", "escarre", $base);
liste("adm_esc_loc", "Localisation", "escarreloc", $base);
liste("adm_esc_tt", "traitement", "escarrett", $base);
echo "<h4>Escarre 2</h4>";
ndate("adm_date_esc", "Si oui : Date");
liste("adm_esc_stade", "Stade", "escarre", $base);
liste("adm_esc_loc", "Localisation", "escarreloc", $base);
liste("adm_esc_tt", "traitement", "escarrett", $base);
finf();
//
gdlegend("Bactériologie");
ouinon("adm_bmr", "BMR acquis");
liste("adm_bmr_loc", "Si oui : Localisation", "bmrloc", $base);
liste("adm_bmr_germe", "Germe", "bmrgerme", $base);
sautl();
ouinon("adm_bhr", "BHR acquis");
liste("adm_bhr_loc", "Si oui : Localisation", "bmrloc", $base);
liste("adm_bhr_contact", "Si oui : Type d'infection", "bhr", $base);
sautl();
ouinon("adm_clostridium", "Clostridium");
finf();
//
gdlegend("Biologie");
//
nombre("adm_poids", "Poids", "Kg", "1", "300", "");
nombre("adm_taille", "Taille", "cm", "0", "222", "");
nombre("adm_prealb", "Pré-albumine", "g/L", "1", "50", "");
nombre("adm_alb", "Albumine", "g/L", "1", "50", "");
nombre("adm_uree", "Urée", "mmol/L", "0", "100", "");
nombre("adm_creat", "Créatinine", "µmol/L", "0", "2000", "");
//
finf();
finq();
echo "</SECTION>";
include 'pied.php';
?>