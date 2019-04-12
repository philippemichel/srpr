<?php
$titre ="Accueil";
include('debut.php');
$_SESSION['adm']=0;
?>
<DIV CLASS = "corps">
<aside>
<p>De la place pour un texte explicatif ou autre. </p>
  <HR>
  <p>V 1.3 du 15/02/2019</P>
</aside>

<section>
<menu>
  <li><a href="patient.php">Nouveau patient</a></li>
  <li><a href="liste.php" >Compléter une fiche existante</a>
</menu>
</section>
</DIV>
<?php
include('pied.php');
?>
