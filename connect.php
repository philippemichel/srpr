<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
//if ($_SESSION['connect']==0){header("Location:index.php");}
try
{
$base=new PDO('mysql:host=localhost;dbname=srpr','phpmyadmin','polii'
,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (Exception $e)
{
die ('Erreur : '.$e->getMessage());
}
?>
