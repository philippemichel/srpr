<?php
$titre ="ÉTAT CIVIL";
include('debut.php');

echo "<SECTION>";
debutform("postpatient.php");
//
gdlegend("IDENTITÉ");
echo "<H4>Atention ! les données saisies sur cette page ne seront plus modifiables.</H4><BR>";
texteob("nom","Nom du patient");
texteob("prenom","Prénom du patient");
saut();
ndate("datenaiss",("Date de naissance"));
saut();
liste("csp","Catégorie socio-professionnelle","csp",$base);
//
finf();
finq();
echo "</SECTION>";
include('pied.php');
