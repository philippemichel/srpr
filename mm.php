<?php
$nom = "srpr";
$cnom = hash('sha256',$nom);
echo $cnom."<br>";
echo strlen($cnom);
//$verif = crypt($nom,$cnom."beaumont");
//echo hash_equals($cnom,$verif);
?>
<br>zz