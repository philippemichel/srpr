<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
//if ($_SESSION['connect']==0){header("Location:index.php");}
include('connect.php');
include('macro.php');
$codepat = " ";
$codepat = $_SESSION['codepat'];
$base=new PDO('mysql:host=localhost;dbname=srpr', 'root', 'polii', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
//
//echo $codepat."<BR>";
//print_r($_POST);
//
$table = $_GET['table'];
$suite = $_GET['suite'].".php";
//echo $suite;
foreach($_POST as $cle => $val)
{
    $val = (isset ($val))?$val:"NA";
    //$val = htmlentities($val);
    echo $cle." - ".$val."<BR>";
    $req = $base -> prepare("UPDATE $table SET $cle = ? WHERE codepat = '$codepat'");
    $req -> execute(array($val));
}
    //
ob_end_flush();
header("Location:".$suite);
?>
<BR>
aa