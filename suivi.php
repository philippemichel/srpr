
<?php
$titre ="SÉJOUR";
include('debut.php');
//
echo '<form action="postsuivi.php" method="POST">';
?>


<?php
//
gdlegend("Matériel");
ouinon("adm.ac.vasc1","Accès vasculaire");
liste("adm.ac.vasc2","Si oui : Type","ascvasc",$base);
fdate("adm.vsac.pose","Date de pose");
fdate("adm.vsac.retrait","Date de retrait");
sautl();
ouinon("adm.sg","Sonde naso-gastrique");
fdate("adm.sng.pose","Si oui : Date de pose");
fdate("adm.sng.retrait","Date de retrait");
sautl();
ouinon("adm.gstomie","Gastrostomie");
fdate("adm.gstomie.pose","Si oui : Date de pose");
fdate("adm.gstomie.retrait","Date de retrait");
sautl();
ouinon("adm.su","Sonde urinaire");
fdate("adm.su.pose","Si oui : Date de pose");
fdate("adm.su.retrait","Date de retrait");
sautl();
ouinon("adm.ksp","KT sus-pubien");
fdate("adm.ksp.pose","Si oui : Date de pose");
fdate("adm.ksp.retrait","Date de retrait");
sautl();
ouinon("adm.trach","Trachéotomie");
fdate("Si oui : Date de pose","adm.trach.pose");
fdate("Date de retrait","adm.trach.retrait");
sautl();
ouinon("adm.vm","Ventilation mécanique");
liste("adm.vm.cont","Si oui : Durée","continu",$base);
nombre("adm.vm.h","Heures/jour","","0","24","Si discontinue");
fdate("Date de pose","adm.vm.pose");
fdate("Date de retrait","adm.vm.retrait");
sautl();
ouinon("adm.vni","VNI");
liste("adm.vni.cont","Si oui : Durée","continu",$base);
nombre("adm.vni.h","Heures/jour","","0","24","Si discontinue");
fdate("adm.vni.pose","Date de pose");
fdate("adm.vni.retrait","Date de retrait");
finf();
//
gdlegend("Escarres");
ouinon("adm.esc","Escarre");
fdate("adm.date.esc","Date");
liste("adm.esc.stade","Si oui : Stade","escarre",$base);
liste("adm.esc.tt","traitement","escarrett",$base);
finf();
//
gdlegend("Stomie digestive");
ouinon("adm.stomie","Stomie digestive");
finf();
//
gdlegend("Bactériologie");
ouinon("adm.bmr","BMR acquis");
liste("adm.bmr.loc","Si oui : Localisation","bmrloc",$base);
liste("adm.bmr.germe","germe","bmrgerme",$base);
fdate("adm.date.bmr","Date Positif");
sautl();
ouinon("adm.bhr","BHR acquis");
fdate("adm.date.bhr","Si oui : Date Positif");
sautl();
ouinon("adm.clostridium","Clostridium");
finf();
//
gdlegend("Défaillance d'organe");
boxs("comp.aucune","Aucune");
boxs("comp.rein","Rénale");
boxs("comp.hemod","Hémodynamique");
boxs("comp.neuro","Neurologique");
boxs("comp.hémato","Hématologique");
boxs("comp.respi","Respiratoire");
boxs("comp.autre","Autre");
finf();
//
gdlegend("Complications");
ouinon("adm.comp","Complications");
echo "<h4>Si oui</h4><p>";
liste("comp.rein","Rénale","comprein",$base);
liste("comp.card","Cardiaque","compcard",$base);
liste("comp.resp","Infection respiratoire aiguë","compresp",$base);
liste("comp.acr","ACR","compacr",$base);
liste("comp.inf","Infectieux extra respiratoire","compinf",$base);
liste("comp.thrombo","Thrombo-Embolique","ouinon",$base);
liste("comp.neuro","Neurologique","compneuro",$base);
liste("comp.autre","Autre","ouinon",$base);
sautl();
echo "<h4>Suite à la complication :</h4><p>";
ouinon("comp.retard","Retard de sortie du SRPR");
ouinon("comp.realoc","Transfert réa locale");
ouinon("comp.reaautre","Transfert réa autre");
ouinon("comp.dcd","Décès");
finf();
//
finq();
//
include('pied.php');
?>
