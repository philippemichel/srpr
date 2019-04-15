<?php
//include('connect.php');
include('macro.php');
$titre ="Statut à la sortie";
//
echo "<SECTION>";
debutform("posttestp.php");
gdlegend("TEST");
texteob("nom","nom");
nombre("age","âge<?php","","3","150","");
finq();
echo "</SECTION>";
include('pied.php');
?>