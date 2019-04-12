<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
if ($_SESSION['connect']==0){header("Location:index.php");}
include('connect.php');
//
$codepat=$_GET['codepat'];
$_SESSION['codepat'] =$codepat;
echo $codepat;
//
header("Location:admission.php");
ob_end_flush();
?>
<BR>zz