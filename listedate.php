<?php
    $titre ="LISTE DES PATIENTS";
    include('debut.php');
    $codepat = " ";
    $_SESSION['codepat'] = " ";
?>
<DIV class = "corps">
    <ASIDE>
       <h4>Liste classée par :</h4>
        <menu>
            <li><a href="liste.php">Nom</a></li>
            <li><a href="listedate.php">Date d'admission</a></li>
        </menu>
        <HR>
        <H4>Recherche directe</h4>
            <?php
            debutform("postnom.php");
            texte("nomr","Nom patient");
            finq();
        ?>
    </ASIDE>
    <section>
         <H4>Classement par date d'admission</H4>
        <table><TR><TH>Nom</TH><TH>Prénom</TH><TH>Date de Naissance</TH><TH>Date d'admission</TH></TR>
        <?php
        $reponse=$base->query('SELECT * FROM etatcivil ORDER BY dateadm');
        while ($donnees = $reponse->fetch()){
            echo "<TR>
                <TD><a href=postliste.php?codepat=$donnees[codepat]>$donnees[nom]</a></TD>
                <TD>$donnees[prenom]</TD>
                <TD>$donnees[datenaiss]</TD>
                <TD>$donnees[dateadm]</TD>
           </TR>";
        }
        ?>
        </TABLE>
    </section>
</DIV>
<?php include('pied.php'); ?>
