<?php
$titre ="CONTACTS";
include('debut.php');
//
debutform("postcontact.php");
//
gdlegend("CONTACTS");
gtexte("serv.sortie","Service de sortie du malade");
saut();
texte("telperso","No téléphone du patient");
saut();
liste("proche1","Contact 1","contact",$base);
texte("telcontact1","No téléphone");
saut();
liste("proche2","Contact 2","contact",$base);
texte("telcontact2","No téléphone");
saut();
gtexte("medtrait","Nom du médecin traitant");
texte("telmedtrait","No téléphone du médecin traitant");
finf();
finq();
include('pied.php');
?>