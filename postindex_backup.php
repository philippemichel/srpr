<?php
ob_start();
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) .'/toperreur'));
session_start();
include('connect.php');
$nom = (isset ($_POST['login']))?$_POST['login']:"xx";
$pass = (isset ($_POST['pass']))?$_POST['pass']:"xx";
$reponse = $base->query("SELECT * FROM codes WHERE nom LIKE '$nom'");
$donnees = $reponse->fetch();
$code=$donnees['code'];
// if ($code == $pass)
if (1 == 1)
{
     $_SESSION['connect']=1;
     $_SESSION['hopital']=$donnees['hopital'];
     header("Location:index2.php");
}
else{
    header("Location:index.php");
}
ob_end_flush();
?>