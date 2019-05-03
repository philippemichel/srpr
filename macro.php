<?php
// macros pour formulaire html
//
//
// Début questionnaire
//
function debutform($adresse){
echo <<<DBF
    <form action="$adresse" method=POST>
DBF;
}
//
// Début fieldset
//
function gdlegend($nom){
echo  <<<GDL
    <FIELDSET class="ptfield"><LEGEND>$nom</LEGEND><P>
GDL;
}
//
// fin fieldset
//
function finf(){
    echo "</P></fieldset>";
}
//
// Fin de questionnaire
//
function finq(){
echo <<<FIQ
    <hR>
    <p class="fin"> <button type="SUBMIT">Validation</button></p>
    </form>
FIQ;
}
//
// ouinon
//
function ouinon($nom,$titre,$donnees){
    $dd = $donnees[$nom];
    echo <<<ONO
    <LABEL for="$nom">$titre</LABEL> &nbsp;
    <INPUT TYPE="radio" name="$nom" id="$nom" value="oui"
ONO;
if ($dd == "oui"): echo "checked"; endif;
echo <<<ON2
>OUI &nbsp;
<INPUT TYPE="radio" name="$nom" id="$nom" value="non"
ON2;
if ($dd == "non"): echo "checked";  endif;
echo ">NON </BR>"; 
}
//
// oui/non avevc "non" préselectionné
//
function ouinonnon($nom,$titre,$donnees){
    $dd = $donnees[$nom];
    if ($dd == ""): $dd ="non"; endif;
    echo <<<ONO
    <LABEL for="$nom">$titre</LABEL> &nbsp;
    <INPUT TYPE="radio" name="$nom" id="$nom" value="oui"
ONO;
if ($dd == "oui"): echo "checked"; endif;
echo <<<ON2
>OUI &nbsp;
<INPUT TYPE="radio" name="$nom" id="$nom" value="non"
ON2;
if ($dd == "non"): echo "checked";  endif;
echo ">NON </BR>"; 
}
//
// liste
//
function liste($nom,$titre,$source,PDO $base,$donnees){
    $dd = $donnees[$nom];
    echo <<<LI1
    <LABEL for ="$nom">$titre</LABEL>
    <select name="$nom" id="$nom" >
LI1;
    $requete=$base->query("SELECT * FROM $source");
    while($art = $requete->fetch()){
        $val=$art["nom"];
        if ($dd == $val):$se ="selected"; else: $se =""; endif;
echo <<<LI2
        <option value="$val" $se >$val</option><BR>
LI2;
    }
    echo "</select><BR>";
     }
//
// saut de ligne
//
function saut(){
    echo "</P><P>";
}
//
// saut de ligne + lignr
//
function sautl(){
     echo "</P><HR><P>";   
}
//
// nombres
//
function nombre($nom,$titre,$unit,$min,$max,$bulle,$donnees){
    $dd=$donnees[$nom];
    echo <<<MMU
    <LABEL for ="$nom">$titre</LABEL>
    <input type="NUMBER" name= "$nom"  id= "$nom" 
       min= "$min"  max= "$max" 
       class="nb" title= "$bulle"  value= "$dd" >&nbsp;$unit
    <BR>
MMU;
    }
//
// date via la fonction ad hoc
//
function ndate($nom,$titre,$donnees){
    $dd = $donnees[$nom];
echo <<<DAT
    <LABEL for ="$nom">$titre</LABEL>
    <input type="DATE" name="$nom" id="$nom" value="$dd">
    <BR>
DAT;
}
//
// Case checked simple+
//
function boxs($nom,$titre){
echo <<<BOX
    <LABEL for= "$nom">$titre</LABEL>
    <input type="CHECKBOX" name= "$nom"  id= "$nom" value="oui">
    </BR>
BOX;
}
//
// grand Texte obligatoire
//
function texteob($nom,$titre, $dd=""){
echo <<<TXTOB
    <LABEL for ="$nom">$titre</LABEL>
    <input type="TEXT" name=" $nom" id="$nom" size= "20px" value="$dd" required>
    <BR>
TXTOB;
}
//
// Intégration d'une donnée
//
function varget($avant){
$val = (isset ($_POST[$avant]))?$_POST[$avant]:"NA";
$val = htmlentities($val);
return ($val);
}
?> 