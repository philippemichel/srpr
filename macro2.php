<link rel="stylesheet" href="style.css"/>
<?php
// macros pour formulaire html
//
// liste
//
function liste($nom,$titre,$source,PDO $base,$dd=""){
    //echo $dd;
    echo "<LABEL for =\"$nom\">$titre</LABEL>";
    echo "<select name=\"$nom\" id=\"$nom\" >";
    $requete=$base->query("SELECT * FROM $source");
    while($art = $requete->fetch()){
        $val=$art["nom"];
        if ($dd == $val){$se ="selected";} else {$se ="";}
        echo "<option value=\"$val\" $se >$val</option><BR>";
    }
    echo "</select><BR>";
     }
//
// nombres
//
function nombre($nom,$titre,$unit,$min,$max,$bulle){
     echo "<LABEL for =\"$nom\">$titre</LABEL>";
     echo "<input type=\"NUMBER\" name= \"$nom\"  id= \"$nom\" 
        min= \"$min \"  max= \"$max \" 
        class=\"nb\", title= \"$bulle \"  value= \"$dd \"  >&nbsp;'.$unit";
        echo "<BR>";
     }
     //
     // Texte
     //
function texte($nom,$titre, $dd=""){
     echo "<LABEL for =\"$nom\">$titre</LABEL>";
     echo "<input type=\"TEXT\"  name= \"$nom\"  id= \"$nom\"  value= \"$dd \" >";
     echo "<BR>";
}
//
// Grand texte
//
function gtexte($nom,$titre, $dd=""){
     echo "<LABEL for =\"$nom\">$titre</LABEL>";
     echo "<input type=\"TEXT\" name= \"$nom\"  id= \"$nom\"  size= \"50px\" value= \"$dd \" >";
     echo "<BR>";
}
// 
// petit texte
/*
function ptexte($nom,$titre,$dd="")
    echo "<LABEL for = \"$nom\" >'.$titre.'</LABEL>";
    echo "<input type=\"TEXT\" name=\" $nom \" id=\" $nom \" class=\"nb\" value=\"$dd \" >";
    echo "<BR>";
}
//
// petit Texte obligatoire
//
function ptexteob($nom,$titre){
    echo "<LABEL for =\" $nom \"> $titre </LABEL>";
    echo "<input type=\"TEXT\"  name= \"$nom\"  id= \"$nom\"  class=\"nb\"  value= \"$dd \" required>";
    echo "<BR>";
}
*/
// grand Texte obligatoire
//
function texteob($nom,$titre, $dd=""){
    echo "<LABEL for =\" $nom\"> $titre </LABEL>";
    echo "<input type=\"TEXT\" name=\" $nom\" id=\" $nom\" size= \"40px\"  value=\"$dd\" required>";
    echo "<BR>";
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
// date à l'ancienne
//
function fdate($nom,$titre,$dd=""){
     echo "<LABEL for =\"$nom\"> $titre</LABEL>";
     echo "<input type=\"TEXT\" name=\"$nom\" id=\"$nom\"
        pattern=\"[0-3][0-9]/[0-1][0-9]/[1-2][0-9][0-9][0-9]\"
        size=\"10\" placeholder=\"jj/mm/aaaa\" value=\"$dd\">";
     echo "<BR>";
}
//
// date via la fonction ad hoc
//
function ndate($nom,$titre,$dd=""){
    echo "<LABEL for =\"$nom\"> $titre</LABEL>";
    echo "<input type=\"DATE\" name=\"$nom\" id=\"$nom\" value=\"$dd\">";
    echo "<BR>";
}
/*
//
// Mois & année
//
function mois($nom,$titre,$dd=""){
    echo "<LABEL for =\"$nom\"> $titre</LABEL>";
    echo "<input type=\"MONTH\" name=\"$nom\" id=\"$nom\" value=\"$dd\">";
    echo "<BR>";
}
//
     // Date & Heure
     //
     function dateheure($nomd,$nomh,$titre,$dd=""){
     echo "<LABEL for = \"$nomd \" >'.$titre.'</LABEL>";
      echo "<input type=\"TEXT\"  name= \"$nomd \"  id= \"$nomd \" 
    pattern=\"[0-3][0-9]/[0-1][0-9]/201[7-9]\" size=\"10\" placeholder=\"jj/mm/aaaa\">&nbsp;";
     echo "<input type=\"NUMBER\" name= \"$nomh \"  id= \"$nomh \" 
     class=\"ptexte\" placeholder=\"hh\" size=\"2\" min=\"0\" max=\"23\" value= \"$dd \" >";
     echo "<BR>";
     }
     //------------------------------------------------------------
     // titre intermédiaire
     //
     function ptitre ($titre){
     echo "</p><H4>\".$titre.\"</H4><P>";
     }
     */
// //------------------------------------------------------------
     // titre début
//
     function btitre ($titre){
     echo "<H4>\".$titre.\"</H4><P>";
     }
//
// ouinon
//
function ouinon($nom,$titre,$dd=""){
    echo"<LABEL for=\"$nom\">$titre</LABEL> &nbsp;
        <INPUT TYPE=\"radio\" name=\"$nom\" id=\"$nom\" value=\"oui\" ";
    if ($dd == "oui"){echo "checked";}
    echo">OUI &nbsp;
        <INPUT TYPE=\"radio\" name=\"$nom\" id=\"$nom\" value=\"non\" ";
    if ($dd == "non"){echo "checked";} 
    echo">NON </BR>"; 
}
/*
//
     // ouinon + bullle
     //
    function ouinonb($nom,$titre,$bulle)
{
""<LABEL for= \"$nom\" , title= \"$bulle \" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"oui\", title= \"$bulle \" >&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"non\", title= \"$bulle \"  ></BR>"; 
}
//
     // ouinon si oui
     //
    function ouinon2($nom,$titre)
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<LABEL for= \"$nom\" >Si oui,'.$titre.'</LABEL>
OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"oui\">&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"non\" ></BR>"; 
}
//

     // ouinon inclusion 
     //
    function inclu($nom,$titre)
{
echo "<LABEL for= \"$nom\" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"1\">&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"0\" checked></BR>"; 
}
//
     // ouinon exclusion 
     //
    function exclu($nom,$titre)
{
echo "<LABEL for= \"$nom\" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\"
     name= \"$nom\"  id= \"$nom\"   value=\"0\" checked>&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"1\" ></BR>"; 
}
//

     // oui/non/nsp
     //
    function ouinsp($nom,$titre)
{
echo "<LABEL for= \"$nom\" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"oui\">&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"non\" >&nbsp;
    Ne sais pas  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"nsp\" >
</BR>";
}
    //
     // oui/non/sans objet
     //
    function ouiobj($nom,$titre,$q1,$q2)
{
echo "<LABEL for= \"$nom\" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"oui\">&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"non\" >&nbsp;
    '.$q1.' <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value= \"$q1 \"  >&nbsp;
   '.$q2.' <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value= \"$q2 \" >
</BR>";
     }
//
    //
     // oui/non/sans objet
     //
    function oui3($nom,$titre,$q1)
{
echo "<LABEL for= \"$nom\" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"oui\">&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"non\" >&nbsp;
    '.$q1.' <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value= \"$q1 \" ></BR>";
     }
     */
     //
     // Case checked simple
     //
 function boxs($nom,$titre){
echo "<LABEL for= \"$nom\" > $titre </LABEL>
<input type=\"CHECKBOX\" name= \"$nom\"  id= \"$nom\" ></BR>";
}
 //
     // Autre, précisez
//
function autre($nom){
echo "<LABEL for= \"$nom\" >&nbsp;</LABEL>
<textarea name= \"$nom\"  id= \"$nom\"  rows=\"4\"
cols=\"50\">Autre, précisez</textarea></br>";
}
//
// fieldset
//
function champ($titre){
echo "<FIELDSET><LEGEND>$titre</LEGEND>";
}
// contrôle saisie
//
function saisie($nom){
    $nom = (isset ($_POST[$nom]))?$_POST[$nom]:"NA";
    return $nom;
}
//
     // initiale
     //
     function initial(){
     echo "<LABEL for =\"nom\">Initiale du nom</LABEL>";
     echo "<input type=\"TEXT\"  name=\"nom\" id=\"nom\" size=\"1\" required>";
     echo "&nbsp;(Une lettre)<BR>";
     echo "<LABEL for =\"prenom\">Initiale du prénom</LABEL>";
     echo "<input type=\"TEXT\"  name=\"prenom\" id=\"prenom\" size=\"1\" required>";
     echo "&nbsp;(Une lettre)<BR>";
     }
//
//

     // ouinon inclusion + bulle 
     //
    function inclub($nom,$titre,$bulle)
{
echo "<LABEL for= \"$nom\" , title= \"$bulle \" >'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"1\", title= \"$bulle \" >&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"0\" checked, title= \"$bulle \" ></BR>"; 
}
//
     // grand label ouinon
     //
    function gouinon($nom,$titre)
{
echo "<LABEL for= \"$nom\"  class=\"glabel\">'.$titre.'</LABEL>OUI  <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
      value=\"oui\">&nbsp;
    NON   <INPUT TYPE=\"radio\" name= \"$nom\"  id= \"$nom\" 
value=\"non\" ></BR>"; 
}
//
function gdlegend($nom){
echo "<FIELDSET class='ptfield'><LEGEND>\".$nom.\"</LEGEND><P>";
}
function finf(){
echo "</P></fieldset>";
}
//
// Fin de questionnaire
//
function finq(){
    echo "<p class=\"fin\"> <input type=\"SUBMIT\" value=\"Validation\"></p>";
    echo "</form>";
}
//
// Début questionnaire
//
function debutform($adresse){
    echo "<form action=\"$adresse\" method=POST>";
}
?>