<?php
ob_start();
$base=new PDO('mysql:host=localhost;dbname=srpr', 'root', 'polii', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
//
$code="1";
//
foreach($_POST as $cle => $val)
{
    $val = (isset ($val))?$val:"NA";
    $val = htmlentities($val);
    echo $cle." - ".$val."<BR>";
    $req = $base -> prepare("UPDATE testp SET $cle = ? WHERE id = '$code'");
    $req -> execute(array($val));
    echo "$$$<BR>";
}
    //
ob_end_flush();
?>
<BR>
aa