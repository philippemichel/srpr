<?php
$titre ="Statut à six mois";
$form=1;
include('debut.php');
$reponse = $base->query("SELECT * FROM mois6 WHERE codepat='$codepat'");
echo "<SECTION>";
debutform("posttout.php?table=mois6&suite=mois12");
gdlegend("Six mois");
liste("m6_contact","Contact","contact",$base, $donnees);
sautl();
echo '<LABEL for ="m6_statut">Statut à six mois</LABEL>';
$dd = $donnees['sort_statut'];
echo <<<STA
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="vivant"
STA;
if ($dd == "vivant"): echo "checked";  endif;
echo <<<STB
> Vivant&nbsp;
<input type="RADIO" Name="sort_statut" id ="sort_statut" value="décédé"
STB;
if ($dd == "décédé"): echo "checked";  endif;
echo <<<STC
> décédé</BR>
STC;
liste("m6_lieu","Lieu de vie","lieu",$base, $donnees);
sautl();
ouinon("m6_trach","Trachéotomie", $donnees);
ouinon("m6_gstomie","Gastrostomie", $donnees);
ouinon("m6_su","Sonde urinaire", $donnees);
ouinon("m6_vent","Ventilation", $donnees);
ouinon("m6_vni","VNI", $donnees);
sautl();
nombre("m6_poids","Poids","Kg","15","300","", $donnees);
finf();
gdlegend("Score EQ-5D", $donnees);
liste("m6_eq5mob","Mobilité","EQ5mob",$base, $donnees);
liste("m6_eq5aut","Autonomie de la personne","EQ5aut",$base, $donnees);
liste("m6_eq5act","Activités courantes","EQ5act",$base, $donnees);
liste("m6_eq5dou","Douleurs/gêne","EQ5dou",$base, $donnees);
liste("m6_eq5anx","Anxiété/Dépression","EQ5anx",$base, $donnees);
sautl();
nombre("m6_eq5eva", "Score EVA - État de santé", "0 - 100", "0","100", "", $donnees);
finf();
finq();
echo "</SECTION>";
include('pied.php');
?>
aa