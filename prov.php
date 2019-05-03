
<?php
$ccx = "000000";
$base=new PDO('mysql:host=localhost;dbname=srpr','root','polii');
//
echo $ccx;
//
$req=$base-> exec("
INSERT INTO `suivi` (`codepat`, `sejourrea`, `admission`, `j28`, `sortie`, `m6`) 
VALUES ('rrrr', '', '', '', '', '')
");
?>
<BR> zzzzzs


function ouinonnon($nom,$titre,$dd=""){
    //if ($dd == ""): $dd ="non"; endif;
    echo <<<NN1
        <LABEL for="$nom">$titre</LABEL> &nbsp;
            <INPUT TYPE="radio" name="$nom" id="$nom" value="oui"
    NN1;
        if ($dd == "oui"): echo "checked"; endif;
    echo <<<NN2
        >OUI &nbsp;
        <INPUT TYPE="radio" name="$nom" id="$nom" value="non"
    NN2;
        if ($dd == "non"): echo "checked";  endif;
    echo ">NON </BR>"; 
    }

    function ouinon($nom,$titre,$dd=""){
    echo <<<ON1
        <LABEL for="$nom">$titre</LABEL> &nbsp;
         <INPUT TYPE="radio" name="$nom" id="$nom" value="oui"
    ON1;
    if ($dd == "oui"): echo "checked"; endif;
    echo <<<ON2
         >OUI &nbsp;
         <INPUT TYPE="radio" name="$nom" id="$nom" value="non"
    ON2;
    if ($dd == "non"): echo "checked";  endif;
    echo ">NON </BR>"; 
}
