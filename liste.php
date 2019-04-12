<?php
$titre ="LISTE DES PATIENTS";
include('debut.php');
debutform("postliste.php");
$codepat = " ";
$_SESSION['codepat'] = " ";
?>
//
<DIV class = "corps">
    <ASIDE>
        <p>Liste classée par :</P>
    
        <p><a href="liste.php">Nom</a><br>
        <a href="listedate.php">Date d'admission</a></p>
    
    </ASIDE>
    <section>
    <h4>Classement par nom</h4>
    <table><TR><TH>Nom</TH><TH>Prénom</TH><TH>Date de Naissance</TH><TH>Date d'admission</TH></TR>
        <?php
            $reponse=$base->query('SELECT * FROM etatcivil ORDER BY nom');
            while ($donnees = $reponse->fetch()){
                echo "<TR>
                    <TD><a href=postliste.php?codepat=$donnees[codepat]>$donnees[nom]</a></TD>
                    <TD>$donnees[prenom]</TD>
                    <TD>$donnees[datenaiss]</TD>
                    <TD>$donnees[dateadm]</TD>
                </TR>";
            }
    echo "</TABLE>";
    echo '</section>';
echo '</DIV>';
//
include('pied.php');
?>

